<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // 1. Send OTP Logic (Signup / Login Combined)
    public function sendOtp(Request $request)
    {
        // Validation: 10 digit number aur valid role hona chahiye
        $request->validate([
            'phone' => 'required|digits:10',
            'user_role' => 'required|in:student,employer,user,admin'
        ]);

        // Generate a 4-Digit OTP (Professional Standard)
        $otp = rand(1000, 9999);
        
        // Find user by phone OR Create new one (Aman Sir's Multi-role vision)
        $user = User::updateOrCreate(
            ['phone' => $request->phone],
            [
                'role' => $request->user_role,
                'otp_code' => $otp,
                'otp_expires_at' => Carbon::now()->addMinutes(10), // 10 min validity
            ]
        );

        // ABHI KE LIYE: Hum OTP screen par flash karenge testing ke liye
        // Production mein yahan SMS API call hogi
        return redirect()->route('otp.verify.view', ['phone' => $request->phone])
                         ->with('success', 'OTP sent to your number!')
                         ->with('debug_otp', $otp); // Sirf testing ke liye
    }

    // 2. Show OTP Verification View
    public function verifyOtpView($phone)
    {
        return view('pages.verify-otp', compact('phone'));
    }

    // 3. Verify OTP & Login the User
    public function verifyOtp(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'otp' => 'required|digits:4'
        ]);

        $user = User::where('phone', $request->phone)
                    ->where('otp_code', $request->otp)
                    ->where('otp_expires_at', '>', Carbon::now())
                    ->first();

        if ($user) {
            // OTP sahi hai -> Login karo!
            Auth::login($user);
            
            // OTP reset kardo security ke liye
            $user->update(['otp_code' => null, 'otp_expires_at' => null]);

            return redirect()->route('home')->with('success', 'Logged in successfully!');
        }

        return back()->withErrors(['otp' => 'Invalid or Expired OTP. Please try again.']);
    }

    // 4. Logout Function
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}