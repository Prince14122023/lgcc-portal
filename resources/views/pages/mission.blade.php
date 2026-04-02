@extends('layouts.app')

@section('content')
<div class="relative py-12 md:py-32 bg-[#FDFDFD] overflow-hidden font-['Lexend']" x-data="{ hover: false }">
    
    {{-- Background Glows --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-[10%] -left-[10%] w-[50%] h-[50%] bg-blue-100 rounded-full blur-[160px] opacity-40 animate-pulse"></div>
        <div class="absolute top-[20%] -right-[20%] w-[50%] h-[50%] bg-amber-100 rounded-full blur-[160px] opacity-40 animate-pulse"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 md:gap-24 items-center">
        
        {{-- LEFT SIDE: THE PITCH --}}
        <div class="relative z-10 order-2 md:order-1">
            <div class="inline-flex items-center gap-3 px-4 py-2 mb-6 bg-white shadow-sm rounded-xl border border-slate-100">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-indigo-600"></span>
                </span>
                <span class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-800">Mission LGCC 2026</span>
            </div>
            
            {{-- Responsive Font Fix --}}
            <h1 class="text-4xl md:text-7xl lg:text-8xl font-black text-[#1C2738] leading-[1.1] md:leading-[0.85] mb-8 md:mb-12 tracking-tighter">
                Building <span class="text-[#2B57A7] block md:inline">Futures,</span><br class="hidden md:block">
                <span class="relative inline-block mt-2 md:mt-4">
                    Not Just Degrees.
                    <svg class="absolute -bottom-2 md:-bottom-3 left-0 w-full h-3 md:h-5 text-[#F4CA4A]" viewBox="0 0 300 20" fill="none"><path d="M5 15C50 5 150 5 295 15" stroke="currentColor" stroke-width="12" stroke-linecap="round"/></svg>
                </span>
            </h1>
            
            <p class="text-base md:text-xl text-slate-500 leading-relaxed mb-10 md:mb-14 max-w-lg font-medium">
                We are on a mission to turn <span class="text-[#1C2738] font-bold border-b-2 border-[#F4CA4A]/30">Uncertainty into Income.</span> Breaking the cycle of confusion with high-ticket career blueprints.
            </p>
            
            <div class="space-y-6 md:space-y-8">
                <div class="group flex items-center gap-6 md:gap-8 p-6 md:p-8 bg-white rounded-2xl md:rounded-[2rem] shadow-sm border border-slate-100 hover:shadow-xl transition-all duration-500">
                    <div class="h-14 w-14 md:h-20 md:w-20 bg-[#F0F4FA] rounded-xl md:rounded-2xl flex items-center justify-center text-[#2B57A7] group-hover:bg-[#2B57A7] group-hover:text-white transition-all duration-500 shrink-0">
                        <svg viewBox="0 0 24 24" class="h-6 w-6 md:h-10 md:w-10" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl font-black text-[#1C2738]">Identify Potential</h3>
                        <p class="text-slate-400 text-[9px] md:text-[10px] font-black uppercase tracking-widest mt-1">Scientific Career Mapping</p>
                    </div>
                </div>

                <div class="group flex items-center gap-6 md:gap-8 p-6 md:p-8 bg-[#1C2738] rounded-2xl md:rounded-[2rem] shadow-xl transition-all duration-500 hover:-translate-y-1">
                    <div class="h-14 w-14 md:h-20 md:w-20 bg-[#F4CA4A] rounded-xl md:rounded-2xl flex items-center justify-center text-[#1C2738] shrink-0">
                        <svg viewBox="0 0 24 24" class="h-6 w-6 md:h-10 md:w-10" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-xl md:text-2xl font-black text-white">Global Placements</h3>
                        <p class="text-slate-400 text-[9px] md:text-[10px] font-black uppercase tracking-widest mt-1">Direct Corporate Access</p>
                    </div>
                    <div class="text-[#F4CA4A] animate-pulse">⭐</div>
                </div>
            </div>
        </div>

        {{-- RIGHT SIDE: THE VECTOR --}}
        <div class="relative order-1 md:order-2">
            <div class="absolute -inset-10 bg-indigo-50/50 rounded-full blur-3xl opacity-50 animate-pulse"></div>

            <div class="relative z-10">
                {{-- Professional Rectangular Box --}}
                <div class="relative bg-white rounded-[2rem] md:rounded-[3rem] shadow-[0_40px_80px_-15px_rgba(43,87,167,0.15)] border-[8px] md:border-[16px] border-white overflow-hidden h-[350px] md:h-[650px] flex items-center justify-center group">
                    
                    <svg viewBox="0 0 400 500" class="w-full h-full p-4 md:p-8">
                        <defs>
                            <linearGradient id="roadGrad" x1="0%" y1="100%" x2="100%" y2="0%">
                                <stop offset="0%" style="stop-color:#F8FAFC;stop-opacity:1" />
                                <stop offset="100%" style="stop-color:#E2E8F0;stop-opacity:1" />
                            </linearGradient>
                        </defs>

                        <path d="M 100 450 C 150 400 150 200 300 100" fill="none" stroke="url(#roadGrad)" stroke-width="40" stroke-linecap="round" />
                        <path d="M 100 450 C 150 400 150 200 300 100" fill="none" stroke="#2B57A7" stroke-width="4" stroke-dasharray="15 20" class="animate-draw-path" />

                        <g class="animate-float-slow">
                            <rect x="80" y="380" width="60" height="40" rx="8" fill="white" stroke="#2B57A7" stroke-width="1"/>
                            <text x="110" y="405" text-anchor="middle" font-size="10" font-weight="900" fill="#2B57A7">START</text>
                        </g>

                        <g class="animate-float-slow" style="animation-delay: 1.5s">
                            <rect x="180" y="240" width="80" height="50" rx="10" fill="#1C2738" />
                            <circle cx="205" cy="265" r="8" fill="#F4CA4A" class="animate-pulse" />
                            <text x="235" y="270" text-anchor="middle" font-size="14" fill="white">₹</text>
                        </g>

                        <g class="animate-bounce-slow">
                            <polygon points="320,30 335,70 375,70 345,95 355,135 320,110 285,135 295,95 265,70 305,70" fill="#F4CA4A" />
                        </g>
                    </svg>

                    {{-- ROI Badge with Slightly Curved Corner --}}
                    <div class="absolute top-6 left-6 md:top-10 md:left-10 bg-white shadow-xl border border-slate-50 px-4 md:px-6 py-3 md:py-4 rounded-xl md:rounded-2xl transition-transform group-hover:scale-105">
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                            <span class="text-[8px] md:text-[10px] font-black uppercase tracking-widest text-[#1C2738]">System Online</span>
                        </div>
                        <div class="text-2xl md:text-3xl font-black text-[#2B57A7] mt-1 tracking-tighter">ROI 100%</div>
                    </div>
                </div>

                {{-- Professional Rectangular Quote Box --}}
                <div class="absolute -bottom-6 -left-4 md:-bottom-10 md:-left-12 max-w-[260px] md:max-w-sm bg-[#1C2738] p-6 md:p-10 rounded-2xl md:rounded-[2rem] shadow-2xl border-4 border-white transition-all">
                    <p class="text-white font-bold italic text-sm md:text-xl leading-snug mb-4 md:mb-6">
                        "No child should remain confused due to lack of guidance."
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="h-px w-8 bg-[#F4CA4A]"></div>
                        <p class="text-[#F4CA4A] text-[8px] md:text-[10px] font-black uppercase tracking-widest leading-none">The LGCC Oath</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
    @keyframes draw-path { from { stroke-dashoffset: 400; } to { stroke-dashoffset: 0; } }
    .animate-draw-path { stroke-dasharray: 15 20; stroke-dashoffset: 400; animation: draw-path 8s linear infinite; }
    @keyframes float-slow { 0%, 100% { transform: translate(0, 0); } 50% { transform: translate(-5px, -15px); } }
    .animate-float-slow { animation: float-slow 5s ease-in-out infinite; }
    @keyframes bounce-slow { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-15px); } }
    .animate-bounce-slow { animation: bounce-slow 4s ease-in-out infinite; }
</style>
@endsection