@extends('layouts.app')

@section('content')
<div class="py-20 bg-slate-50 font-['Lexend']">
    <div class="max-w-4xl mx-auto px-6">
        <div class="bg-white p-10 md:p-16 rounded-[2.5rem] shadow-xl border border-slate-100">
            <h1 class="text-4xl font-black text-slate-900 mb-8 tracking-tighter italic">Privacy <span class="text-indigo-600">Policy</span></h1>
            <div class="prose prose-slate max-w-none text-slate-600 leading-relaxed space-y-6 font-medium">
                <p>Welcome to **Little Genius Children's Care (LGCC)**. Your privacy is our top priority.</p>
                
                <h3 class="text-xl font-bold text-slate-800 mt-8">1. Information We Collect</h3>
                <p>We collect information such as your Name, WhatsApp Number, Email, and Qualification to provide personalized career roadmaps and enrollment services.</p>

                <h3 class="text-xl font-bold text-slate-800 mt-8">2. How We Use Your Data</h3>
                <p>Your data is used solely for counseling, job placement assistance, and processing payments via our secure gateway (Razorpay).</p>

                <h3 class="text-xl font-bold text-slate-800 mt-8">3. Data Security</h3>
                <p>We implement industry-standard security measures (SSL/TLS) to ensure your personal information remains confidential and safe from unauthorized access.</p>

                <div class="mt-12 pt-8 border-t border-slate-100">
                    <p class="text-xs text-slate-400">Last Updated: April 2026 | LGCC Legal Team</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection