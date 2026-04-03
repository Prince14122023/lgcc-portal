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
        // 1. Purane tables saaf karke naye banayega (Ek dum fresh start)
        \Artisan::call('migrate:fresh', ['--force' => true]);

        // 2. Data insert karega saare columns ke saath
        // Note: Agar aapke table mein features ya description missing bhi hoga, toh ye error nahi dega
        
        $p1 = new \App\Models\Package();
        $p1->name = 'LGCC BASIC';
        $p1->price = 999;
        $p1->validity = '1 Year';
        $p1->description = 'Perfect for foundation building, counseling, and core skill mapping.';
        $p1->features = 'Career Counseling, Job Support'; // Error isi wajah se tha
        $p1->save();

        $p2 = new \App\Models\Package();
        $p2->name = 'LGCC STANDARD';
        $p2->price = 1499;
        $p2->validity = '2 Years';
        $p2->description = 'The professional choice for India-wide placements and exam prep.';
        $p2->features = '2 Free Courses, Work-From-Home Jobs';
        $p2->save();

        $p3 = new \App\Models\Package();
        $p3->name = 'LGCC PREMIUM';
        $p3->price = 1999;
        $p3->validity = 'Lifetime';
        $p3->description = 'Elite global mastery with entrepreneurship and lifetime support.';
        $p3->features = 'Startup Support, Project Development';
        $p3->save();

        return "<h1>Success!</h1><p>Database Refresh ho gaya aur data bhi dhal gaya!</p><a href='/services'>Services Page Dekhiye</a>";
    } catch (\Exception $e) {
        return "<h1>Error Aa Gaya Bhaiya:</h1><pre>" . $e->getMessage() . "</pre>";
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