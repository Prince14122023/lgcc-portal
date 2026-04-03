<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan; // Ye zaruri hai migration ke liye
use App\Models\Package;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| LGCC Web Routes - Full Professional & Backend Integration
|--------------------------------------------------------------------------
*/

// --- 0. SPECIAL MIGRATION ROUTE (Sirf ek baar chalane ke liye) ---
// Is link ko browser mein kholne par tables ban jayenge: https://lgcc-portal.onrender.com/migrate-db
Route::get('/final-setup', function () {
    try {
        // 1. Puraane tables delete karke naye banayega (Fresh Migration)
        \Artisan::call('migrate:fresh', ['--force' => true]);

        // 2. Naya Data Insert karega
        $packages = [
            [
                'name' => 'LGCC BASIC',
                'price' => 999,
                'description' => 'Perfect for foundation building, counseling, and core skill mapping.',
                'validity' => '1 Year'
            ],
            [
                'name' => 'LGCC STANDARD',
                'price' => 1499,
                'description' => 'The professional choice for India-wide placements and exam prep.',
                'validity' => '2 Years'
            ],
            [
                'name' => 'LGCC PREMIUM',
                'price' => 1999,
                'description' => 'Elite global mastery with entrepreneurship and lifetime support.',
                'validity' => 'Lifetime'
            ]
        ];

        foreach ($packages as $pkg) {
            \App\Models\Package::create($pkg);
        }

        return "<h1>Success!</h1><p>Database Refresh ho gaya aur data bhi dhal gaya!</p><a href='/services'>Services Page Dekhiye</a>";
    } catch (\Exception $e) {
        return "<h1>Error:</h1><pre>" . $e->getMessage() . "</pre>";
    }
});
// --- 1. CORE PAGES ---
Route::get('/', function () {
    // Note: Agar Package table khaali hai toh error aa sakta hai, isliye try-catch use kar sakte hain
    try {
        $packages = Package::all(); 
    } catch (\Exception $e) {
        $packages = collect(); // Khaali collection agar table nahi mili toh
    }
    return view('pages.home', compact('packages'));
})->name('home');

Route::get('/global-career', function () {
    return view('pages.global-career');
})->name('global.career');

Route::get('/services', function () {
    try {
        $packages = Package::all();
    } catch (\Exception $e) {
        $packages = collect();
    }
    return view('pages.packages', compact('packages'));
})->name('packages');

Route::get('/mission', function () {
    return view('pages.mission');
})->name('mission');


// --- 2. AUTHENTICATION SYSTEM (The Backend Logic) ---

// Login View
Route::get('/login', function () {
    return view('pages.login');
})->name('login');

// Step 1: Send OTP (Signup/Login Entry)
Route::post('/send-otp', [AuthController::class, 'sendOtp'])->name('otp.send');

// Step 2: Verify OTP View & Action
Route::get('/verify-otp/{phone}', [AuthController::class, 'verifyOtpView'])->name('otp.verify.view');
Route::post('/verify-otp', [AuthController::class, 'verifyOtp'])->name('otp.verify.submit');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// --- 3. DASHBOARDS (Role Based Placeholders) ---
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.dashboard'); // Student/User Dashboard
    })->name('dashboard');
});


// --- 4. LEGAL & COMPLIANCE (Razorpay Demand) ---
Route::get('/privacy-policy', function () {
    return view('pages.privacy');
})->name('privacy');

Route::get('/terms-and-conditions', function () {
    return view('pages.terms');
})->name('terms');

Route::get('/refund-policy', function () {
    return view('pages.refund');
})->name('refund');


// --- 5. TRANSACTION ROUTES ---
Route::get('/buy-package/{id}', function ($id) {
    $package = Package::findOrFail($id);
    return "Redirecting to Payment Gateway for " . $package->name;
})->name('purchase');