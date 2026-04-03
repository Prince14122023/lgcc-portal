<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use App\Models\Package;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| LGCC Web Routes - Full Professional & Backend Integration
|--------------------------------------------------------------------------
*/

// --- 0. THE ULTIMATE SETUP ROUTE ---
// Is link ko kholte hi saare column missing wale error khatam ho jayenge
Route::get('/final-setup', function () {
    try {
        // 1. Purane table ko delete karke naya sahi structure banate hain
        Schema::dropIfExists('packages');
        
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->string('validity')->nullable();
            $table->text('description')->nullable();
            $table->text('features')->nullable();
            $table->timestamps();
        });

        // 2. Fresh Data Insert karte hain
        $packages = [
            [
                'name' => 'LGCC BASIC',
                'price' => 999,
                'validity' => '1 Year',
                'description' => 'Perfect for foundation building, counseling, and core skill mapping.',
                'features' => 'Career Counseling, Job Support'
            ],
            [
                'name' => 'LGCC STANDARD',
                'price' => 1499,
                'validity' => '2 Years',
                'description' => 'The professional choice for India-wide placements and exam prep.',
                'features' => '2 Free Courses, Work-From-Home Jobs'
            ],
            [
                'name' => 'LGCC PREMIUM',
                'price' => 1999,
                'validity' => 'Lifetime',
                'description' => 'Elite global mastery with entrepreneurship and lifetime support.',
                'features' => 'Startup Support, Project Development'
            ]
        ];

        foreach ($packages as $pkg) {
            Package::create($pkg);
        }

        return "<h1>Mubarak Ho Prince Bhaiya!</h1><p>Table fresh ban gayi aur data bhi dhal gaya!</p><a href='/services'>Services Page Dekhiye</a>";
    } catch (\Exception $e) {
        return "<h1>Error Aa Gaya:</h1><pre>" . $e->getMessage() . "</pre>";
    }
});

// --- 1. CORE PAGES ---
Route::get('/', function () {
    try {
        $packages = Package::all(); 
    } catch (\Exception $e) {
        $packages = collect();
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


// --- 2. AUTHENTICATION SYSTEM ---

Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::post('/send-otp', [AuthController::class, 'sendOtp'])->name('otp.send');
Route::get('/verify-otp/{phone}', [AuthController::class, 'verifyOtpView'])->name('otp.verify.view');
Route::post('/verify-otp', [AuthController::class, 'verifyOtp'])->name('otp.verify.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// --- 3. DASHBOARDS ---
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.dashboard');
    })->name('dashboard');
});


// --- 4. LEGAL & COMPLIANCE ---
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