@extends('layouts.app')

@section('content')
<div class="min-h-[100vh] flex items-center justify-center px-6 py-24 bg-[#F3F2EF] font-['Lexend']" x-data="{ role: 'Student' }">
    
    {{-- Main Login Card --}}
    <div class="w-full max-w-[420px] bg-white rounded-xl shadow-[0_4px_12px_rgba(0,0,0,0.08)] p-8 md:p-12 border border-slate-200 relative z-10">
        
        {{-- Header --}}
        <div class="mb-10">
            <h1 class="text-3xl font-black text-slate-900 tracking-tight mb-2">Welcome back</h1>
            <p class="text-slate-500 text-sm font-medium leading-relaxed">
                Stay updated on your professional world.
            </p>
        </div>

        {{-- ROLE SELECTOR (Stacked/Hamburger Style) --}}
        <div class="mb-10 relative" x-data="{ open: false }">
            <label class="text-[11px] font-black text-slate-400 uppercase tracking-widest ml-1 mb-2 block">I am a...</label>
            
            <button @click="open = !open" type="button" 
                class="w-full flex items-center justify-between px-5 py-4 bg-white border border-slate-300 rounded-lg text-slate-700 font-bold hover:bg-slate-50 transition-all focus:ring-2 focus:ring-indigo-600/20">
                <span x-text="role">Student</span>
                <svg :class="open ? 'rotate-180' : ''" class="w-4 h-4 transition-transform text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>

            {{-- Dropdown Options --}}
            <div x-show="open" @click.away="open = false" x-transition 
                class="absolute z-50 w-full mt-2 bg-white border border-slate-200 rounded-lg shadow-2xl overflow-hidden">
                <button @click="role = 'Student'; open = false" class="w-full text-left px-5 py-3.5 text-sm font-bold text-slate-600 hover:bg-indigo-50 hover:text-indigo-600 border-b border-slate-50">🎓 Student</button>
                <button @click="role = 'Employer'; open = false" class="w-full text-left px-5 py-3.5 text-sm font-bold text-slate-600 hover:bg-indigo-50 hover:text-indigo-600 border-b border-slate-50">💼 Employer / Recruiter</button>
                <button @click="role = 'User'; open = false" class="w-full text-left px-5 py-3.5 text-sm font-bold text-slate-600 hover:bg-indigo-50 hover:text-indigo-600">👤 General User</button>
            </div>
        </div>

        {{-- FORM --}}
        <form action="{{ route('otp.send') }}" method="POST" class="space-y-10">
            @csrf
            <input type="hidden" name="user_role" :value="role.toLowerCase()">

            <div class="relative group">
                <label class="text-[11px] font-black text-slate-400 uppercase tracking-widest ml-1 mb-2 block">WhatsApp / Mobile Number</label>
                <div class="relative">
                    <span class="absolute left-5 top-1/2 -translate-y-1/2 text-slate-400 font-bold text-base">+91</span>
                    <input type="tel" name="phone" required maxlength="10" placeholder="Phone number" 
                        class="w-full pl-14 pr-5 py-3.5 bg-white border border-slate-400 rounded-lg focus:border-indigo-600 focus:ring-1 focus:ring-indigo-600 transition-all outline-none font-semibold text-slate-800 placeholder:text-slate-300">
                </div>
            </div>

            <button type="submit" class="w-full bg-[#0a66c2] hover:bg-[#004182] text-white font-black py-4 rounded-full transition-all text-base shadow-sm">
                Get OTP Login
            </button>
        </form>

        {{-- OR DIVIDER --}}
        <div class="flex items-center my-8 text-slate-300">
            <div class="flex-grow h-px bg-slate-200"></div>
            <span class="px-4 text-[10px] font-black uppercase tracking-widest text-slate-400">or</span>
            <div class="flex-grow h-px bg-slate-200"></div>
        </div>

        {{-- ADDITIONAL LINKS --}}
        <div class="text-center space-y-6">
            <p class="text-sm font-medium text-slate-500">
                New to LGCC? <a href="#" class="text-[#0a66c2] font-black hover:underline">Join now</a>
            </p>
            <p class="text-[10px] text-slate-400 font-medium px-4">
                By clicking Continue, you agree to LGCC's <a href="{{ route('terms') }}" class="text-[#0a66c2] font-black">User Agreement</a>, <a href="{{ route('privacy') }}" class="text-[#0a66c2] font-black">Privacy Policy</a>, and <a href="{{ route('privacy') }}" class="text-[#0a66c2] font-black">Cookie Policy</a>.
            </p>
        </div>
    </div>
</div>
@endsection