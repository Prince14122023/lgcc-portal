@extends('layouts.app')

@section('content')
<div class="min-h-[100vh] flex items-center justify-center px-6 py-24 bg-[#F3F2EF] font-['Lexend']">
    <div class="w-full max-w-[420px] bg-white rounded-xl shadow-sm p-10 border border-slate-200">
        
        <div class="mb-8 text-center">
            <h1 class="text-2xl font-black text-slate-900 mb-2">Verify your phone</h1>
            <p class="text-slate-500 text-sm font-medium leading-relaxed">
                Enter the 4-digit code sent to <span class="text-indigo-600 font-bold">+91 {{ $phone }}</span>
            </p>
        </div>

        @if(session('debug_otp'))
            <div class="mb-6 p-3 bg-amber-50 border border-amber-200 rounded-lg text-center">
                <p class="text-xs font-bold text-amber-700 uppercase tracking-widest">Test OTP: {{ session('debug_otp') }}</p>
            </div>
        @endif

        <form action="{{ route('otp.verify.submit') }}" method="POST" class="space-y-6">
            @csrf
            <input type="hidden" name="phone" value="{{ $phone }}">
            
            <div class="flex justify-between gap-2">
                {{-- Single Input with LinkedIn vibe (clean & simple) --}}
                <input type="text" name="otp" required maxlength="4" placeholder="0 0 0 0" 
                    class="w-full text-center py-4 bg-white border border-slate-400 rounded-lg focus:border-indigo-600 focus:ring-1 focus:ring-indigo-600 outline-none font-black text-2xl tracking-[1em] text-slate-800 placeholder:text-slate-200">
            </div>

            @error('otp')
                <p class="text-red-500 text-xs font-bold">{{ $message }}</p>
            @enderror

            <button type="submit" class="w-full bg-[#0a66c2] hover:bg-[#004182] text-white font-black py-4 rounded-full transition-all text-base">
                Verify & Continue
            </button>
        </form>

        <div class="mt-8 text-center">
            <button class="text-sm font-bold text-slate-500 hover:text-indigo-600 transition-colors">
                Didn't receive code? <span class="text-[#0a66c2]">Resend</span>
            </button>
        </div>
    </div>
</div>
@endsection