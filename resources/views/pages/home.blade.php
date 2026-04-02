@extends('layouts.app')

@section('content')
<script src="https://unpkg.com/alpinejs" defer></script>

<div class="font-['Lexend'] overflow-hidden" style="background-color: #ffffff;">

    {{-- 1. HERO SECTION --}}
    <section class="relative min-h-[90vh] flex items-center pt-20">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
            <div class="relative z-10">
                <div class="inline-flex items-center gap-2 px-3 py-1 mb-6 bg-[#F0F4FA] border border-[#2B57A7]/10 rounded-lg">
                    <span class="w-2 h-2 bg-[#F4CA4A] rounded-full animate-pulse"></span>
                    <span class="text-[10px] font-black uppercase tracking-widest text-[#2B57A7]">Step into your future</span>
                </div>
                <h1 class="text-6xl md:text-8xl font-black text-[#1C2738] leading-[1] mb-8 tracking-tighter">
                    Stop Guessing. <br>
                    <span class="text-[#2B57A7]">Start Growing.</span>
                </h1>
                <p class="text-xl text-slate-500 mb-10 max-w-lg leading-relaxed font-medium">
                    From college confusion to career clarity. We don't just teach; we <span class="text-[#1C2738] font-bold">hand-hold you</span> through counseling, skills, and lifetime placements.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('packages') }}" class="px-10 py-5 bg-[#2B57A7] text-white font-black rounded-xl shadow-2xl shadow-[#2B57A7]/20 hover:bg-[#1C2738] transition-all hover:-translate-y-1 active:scale-95">
                        Start Your Journey
                    </a>
                    <a href="{{ route('mission') }}" class="px-10 py-5 bg-white text-[#1C2738] border-2 border-slate-100 font-black rounded-xl hover:bg-slate-50 transition-all">
                        How it Works?
                    </a>
                </div>
            </div>

            <div class="relative group">
                <div class="absolute -inset-10 bg-[#F0F4FA] rounded-full blur-[100px] opacity-70 group-hover:opacity-100 transition-opacity"></div>
                <svg viewBox="0 0 500 500" class="relative w-full h-auto drop-shadow-3xl" xmlns="http://www.w3.org/2000/svg">
                    <rect x="50" y="380" width="120" height="80" rx="15" fill="#1C2738" />
                    <text x="110" y="425" text-anchor="middle" fill="white" font-size="14" font-weight="900" text-transform="uppercase">COLLEGE</text>
                    <path d="M170 420 C 250 420, 200 250, 300 250 S 350 150, 420 100" stroke="#2B57A7" stroke-width="8" fill="none" stroke-dasharray="15 10" class="animate-draw" />
                    <circle cx="240" cy="300" r="35" fill="white" stroke="#2B57A7" stroke-width="4" />
                    <path d="M230 300 L250 300 M240 290 L240 310" stroke="#F4CA4A" stroke-width="5" stroke-linecap="round" />
                    <circle cx="330" cy="220" r="35" fill="white" stroke="#2B57A7" stroke-width="4" />
                    <rect x="315" y="210" width="30" height="20" rx="4" fill="#2B57A7" />
                    <g class="animate-bounce" style="animation-duration: 3s;">
                        <rect x="380" y="40" width="100" height="100" rx="20" fill="#F4CA4A" />
                        <path d="M410 90 L420 100 L440 80" stroke="#1C2738" stroke-width="6" fill="none" stroke-linecap="round" />
                        <text x="430" y="125" text-anchor="middle" fill="#1C2738" font-size="10" font-weight="900">DREAM JOB</text>
                    </g>
                    <rect x="80" y="280" width="80" height="30" rx="8" fill="#F4CA4A" opacity="0.8" />
                    <text x="120" y="300" text-anchor="middle" fill="#1C2738" font-size="10" font-weight="900">PLACEMENT</text>
                </svg>
            </div>
        </div>
    </section>

    {{-- 2. PARTNERS SECTION --}}
    <div class="py-20 bg-slate-50 border-y border-slate-100 overflow-hidden relative">
        <div class="absolute top-0 left-0 w-32 h-full bg-gradient-to-r from-slate-50 to-transparent z-10"></div>
        <div class="absolute top-0 right-0 w-32 h-full bg-gradient-to-l from-slate-50 to-transparent z-10"></div>
    
        <div class="text-center mb-12">
            <p class="text-[11px] font-black uppercase tracking-[0.5em] text-slate-400">Trusted Hiring & Educational Partners</p>
        </div>
    
        <div class="flex space-x-16 md:space-x-24 animate-marquee whitespace-nowrap items-center">
            @php
                $partners = ['zepto', 'blinkit', 'zomato', 'swiggy', 'rapido', 'creditcode', 'paytm', 'phonepe', 'flipkart', 'amazon', 'axisbank', 'icicibank', 'hdfcbank', 'tata', 'techmahindra', 'tcs', 'byjus', 'kotak', 'idfcfirstbank', 'upstox', 'genpact', 'justdial', 'heromotocorp', 'l&t'];
            @endphp
            @foreach($partners as $logo)
                <div class="flex items-center justify-center min-w-[180px] md:min-w-[220px] transition-all duration-300 hover:scale-110">
                    <img src="{{ asset('images/' . $logo . '.png') }}" alt="{{ $logo }}" class="h-12 md:h-16 w-auto object-contain drop-shadow-sm">
                </div>
            @endforeach
            @foreach($partners as $logo)
                <div class="flex items-center justify-center min-w-[180px] md:min-w-[220px] transition-all duration-300 hover:scale-110">
                    <img src="{{ asset('images/' . $logo . '.png') }}" alt="{{ $logo }}" class="h-12 md:h-16 w-auto object-contain drop-shadow-sm">
                </div>
            @endforeach
        </div>
    </div>

    {{-- 3. MISSION SECTION --}}
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                <div class="max-w-2xl">
                    <p class="text-[10px] font-black uppercase tracking-[0.5em] text-[#2B57A7] mb-4">Our Vision</p>
                    <h2 class="text-4xl md:text-6xl font-black text-[#1C2738] tracking-tighter leading-none">
                        Not Just Degrees. <br><span class="text-[#2B57A7]">Building Futures.</span>
                    </h2>
                </div>
                <a href="{{ route('mission') }}" class="group flex items-center gap-3 font-black text-[#1C2738] hover:text-[#2B57A7] transition-colors">
                    View Full Roadmap
                    <span class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center group-hover:bg-[#2B57A7] group-hover:text-white transition-all">→</span>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 relative">
                <div class="relative bg-white p-10 rounded-[2.5rem] shadow-xl border border-slate-100 flex flex-col items-start text-left group hover:-translate-y-4 transition-all duration-500">
                    <div class="h-16 w-16 bg-[#F0F4FA] rounded-3xl mb-8 flex items-center justify-center text-3xl group-hover:scale-110 transition-transform shadow-inner">🔍</div>
                    <h3 class="text-2xl font-black text-[#1C2738] mb-4">Discover Potential</h3>
                    <p class="text-slate-500 font-medium">Stop being confused. Our experts map your skills through intensive 1-on-1 counseling.</p>
                </div>

                <div class="relative bg-white p-10 rounded-[2.5rem] shadow-xl border border-slate-100 flex flex-col items-start text-left group hover:-translate-y-4 transition-all duration-500">
                    <div class="h-16 w-16 bg-[#1C2738] rounded-3xl mb-8 flex items-center justify-center text-3xl group-hover:scale-110 transition-transform shadow-2xl shadow-[#1C2738]/30">🚀</div>
                    <h3 class="text-2xl font-black text-[#1C2738] mb-4">Quality Placements</h3>
                    <p class="text-slate-500 font-medium">Direct access to 500+ corporate partners for lifetime career security.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- 4. SERVICE PREVIEW SECTION --}}
    <section class="py-24 bg-slate-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                <div class="max-w-2xl">
                    <p class="text-[10px] font-black uppercase tracking-[0.5em] text-[#2B57A7] mb-4">Our Services</p>
                    <h2 class="text-4xl md:text-6xl font-black text-[#1C2738] tracking-tighter leading-none">
                        Choose the Path <br><span class="text-[#2B57A7]">Designed for You.</span>
                    </h2>
                </div>
                <a href="{{ route('packages') }}" class="group flex items-center gap-3 font-black text-[#1C2738] hover:text-[#2B57A7] transition-colors">
                    View All Plans 
                    <span class="w-10 h-10 rounded-full bg-white shadow-sm flex items-center justify-center group-hover:bg-[#2B57A7] group-hover:text-white transition-all">→</span>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="group p-10 rounded-[3rem] bg-white border border-slate-100 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="w-16 h-16 bg-blue-100 rounded-2xl mb-8 flex items-center justify-center text-3xl group-hover:animate-bounce">🛠️</div>
                    <h3 class="text-2xl font-black text-[#1C2738] mb-4 italic text-sm md:text-2xl leading-none">LGCC BASIC</h3>
                    <p class="text-slate-500 font-medium text-sm mb-8 leading-relaxed">Perfect for foundation building, counseling, and core skill mapping.</p>
                    <div class="text-3xl font-black text-[#60A5FA] mb-6">₹999 <span class="text-xs text-slate-400 font-bold">/ Plan</span></div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-2 text-xs font-bold text-slate-600">✅ Career Counseling</li>
                        <li class="flex items-center gap-2 text-xs font-bold text-slate-600">✅ Job Support</li>
                    </ul>
                </div>
                <div class="group p-10 rounded-[3rem] bg-[#2B57A7] text-white shadow-2xl shadow-[#2B57A7]/30 hover:-translate-y-2 transition-all duration-500 scale-105 z-10">
                    <div class="w-16 h-16 bg-white/10 rounded-2xl mb-8 flex items-center justify-center text-3xl group-hover:animate-rocket">🚀</div>
                    <h3 class="text-2xl font-black mb-4 italic text-sm md:text-2xl leading-none">LGCC STANDARD</h3>
                    <p class="text-white/70 font-medium text-sm mb-8 leading-relaxed">The professional choice for India-wide placements and exam prep.</p>
                    <div class="text-3xl font-black text-[#F4CA4A] mb-6">₹1499 <span class="text-xs text-white/40 font-bold">/ Plan</span></div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-2 text-xs font-bold">✅ 2 Free Courses</li>
                        <li class="flex items-center gap-2 text-xs font-bold">✅ Work-From-Home Jobs</li>
                    </ul>
                </div>
                <div class="group p-10 rounded-[3rem] bg-[#1C2738] text-white hover:-translate-y-2 transition-all duration-500">
                    <div class="w-16 h-16 bg-white/5 rounded-2xl mb-8 flex items-center justify-center text-3xl group-hover:animate-pulse">💎</div>
                    <h3 class="text-2xl font-black mb-4 italic text-sm md:text-2xl leading-none">LGCC PREMIUM</h3>
                    <p class="text-white/60 font-medium text-sm mb-8 leading-relaxed">Elite global mastery with entrepreneurship and lifetime support.</p>
                    <div class="text-3xl font-black text-[#F4CA4A] mb-6">₹1999 <span class="text-xs text-white/40 font-bold">/ Plan</span></div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-2 text-xs font-bold">✅ Startup Support</li>
                        <li class="flex items-center gap-2 text-xs font-bold">✅ Project Development</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- 5. TRANSFORMATION SECTION --}}
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-black text-[#1C2738] mb-6 tracking-tighter">Transformation at LGCC</h2>
                <div class="h-2 w-24 bg-[#F4CA4A] mx-auto rounded-full"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 relative">
                @foreach([
                    ['Identify', 'Stop being confused. Our experts map your skills to the modern world.', 'rotate-3'],
                    ['Equip', 'Master the AI & digital tools that companies actually pay for. We bridge the gap.', '-rotate-3'],
                    ['Thrive', 'Get placed in top companies. With Lifetime Support, you are never alone.', 'rotate-6']
                ] as $item)
                <div class="bg-white p-10 rounded-[2.5rem] shadow-xl border border-slate-100 flex flex-col items-center text-center group hover:-translate-y-4 transition-all duration-500 {{ $loop->last ? 'md:mt-24' : ($loop->index == 1 ? 'md:mt-12' : '') }}">
                    <div class="h-20 w-20 bg-[#F0F4FA] rounded-3xl mb-8 flex items-center justify-center {{ $item[2] }} group-hover:rotate-0 transition-transform shadow-inner">
                        @if($loop->first) 🔍 @elseif($loop->index == 1) 🛠️ @else 🚀 @endif
                    </div>
                    <h3 class="text-2xl font-black text-[#1C2738] mb-4">{{ $item[0] }}</h3>
                    <p class="text-slate-500 font-medium text-sm">{{ $item[1] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- 6. FAADU SMART CAREER QUIZ SECTION --}}
    <section class="py-32 bg-[#1C2738] relative overflow-hidden" x-data="{ step: 1, qualification: '', goal: '' }">
        <div class="absolute top-0 right-0 w-96 h-96 bg-[#2B57A7] rounded-full blur-[150px] opacity-10 -mr-48 -mt-48"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-[#F4CA4A] rounded-full blur-[150px] opacity-10 -ml-48 -mb-48"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div class="relative flex justify-center items-center p-10 bg-white/5 backdrop-blur-sm border border-white/10 rounded-[3rem]">
                    <svg viewBox="0 0 500 500" class="w-full h-auto max-w-[400px]" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="250" cy="250" r="230" fill="none" stroke="white" stroke-opacity="0.1" stroke-width="2" />
                        <path d="M 250,20 A 230,230 0 0 1 250,480" stroke="#2B57A7" stroke-width="6" fill="none" class="animate-draw" />
                        <g class="animate-float" style="animation-delay: 1s"><circle cx="100" cy="150" r="40" fill="#2B57A7" opacity="0.8"/><text x="100" y="155" text-anchor="middle" fill="white" font-size="14" font-weight="900">BASIC</text></g>
                        <g class="animate-float" style="animation-delay: 2s"><circle cx="400" cy="150" r="50" fill="#F4CA4A" /><text x="400" y="155" text-anchor="middle" fill="#1C2738" font-size="16" font-weight="900">PREMIUM</text></g>
                        <g class="animate-float" style="animation-delay: 0.5s"><circle cx="250" cy="400" r="60" fill="white" stroke="#2B57A7" stroke-width="4"/><text x="250" y="405" text-anchor="middle" fill="#2B57A7" font-size="20" font-weight="900">GLOBAL</text></g>
                    </svg>
                </div>
                <div class="relative min-h-[450px]">
                    <div x-show="step === 1" x-transition>
                        <p class="text-[10px] font-black uppercase tracking-[0.5em] text-[#F4CA4A] mb-4">CONFUSED?</p>
                        <h2 class="text-4xl md:text-5xl font-black text-white mb-12 tracking-tight leading-tight">1. Your Qualification?</h2>
                        <div class="grid gap-4">
                            <button @click="qualification = '12th'; step = 2" class="p-6 bg-white/5 border border-white/10 rounded-2xl text-left text-white font-bold hover:bg-[#2B57A7] transition-all">🎓 Student (12th/UG)</button>
                            <button @click="qualification = 'graduate'; step = 2" class="p-6 bg-white/5 border border-white/10 rounded-2xl text-left text-white font-bold hover:bg-[#2B57A7] transition-all">📜 Graduate / MCA / BTech</button>
                            <button @click="qualification = 'pro'; step = 2" class="p-6 bg-white/5 border border-white/10 rounded-2xl text-left text-white font-bold hover:bg-[#2B57A7] transition-all">💼 Working Professional</button>
                        </div>
                    </div>
                    <div x-show="step === 2" x-transition x-cloak>
                        <h2 class="text-4xl md:text-5xl font-black text-white mb-12 tracking-tight">2. Primary Goal?</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <button @click="goal = 'Skills'; step = 3" class="p-6 bg-white rounded-2xl text-[#1C2738] font-black">🛠️ Job Skills</button>
                            <button @click="goal = 'Job'; step = 3" class="p-6 bg-white rounded-2xl text-[#1C2738] font-black">👩‍💻 India Job</button>
                        </div>
                    </div>
                    <div x-show="step === 3" x-transition x-cloak>
                        <h2 class="text-4xl md:text-5xl font-black text-white mb-6">🎉 Path Found!</h2>
                        <p class="text-slate-400 text-lg mb-10 font-medium">Rahul, get your specialized career roadmap instantly on WhatsApp.</p>
                        <form class="space-y-4">
                            <input type="text" placeholder="Full Name" class="w-full px-6 py-4 rounded-xl bg-white/10 border border-white/20 text-white outline-none focus:ring-2 focus:ring-[#F4CA4A]">
                            <input type="text" placeholder="WhatsApp Number" class="w-full px-6 py-4 rounded-xl bg-white/10 border border-white/20 text-white outline-none focus:ring-2 focus:ring-[#F4CA4A]">
                            <button type="button" class="w-full py-5 bg-[#F4CA4A] text-[#1C2738] font-black rounded-xl hover:scale-105 transition-all shadow-xl shadow-amber-500/20">Get Roadmap on WhatsApp</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- !!! FIX !!! 7. GLOBAL CAREER SECTION (The "Faadu" Globe Edition) --}}
    <section class="py-28 bg-[#FDFDFD] relative overflow-hidden group">
        
        <div class="absolute -inset-20 bg-gradient-to-tr from-indigo-500/10 to-amber-500/10 rounded-full blur-[100px] animate-spin-slow opacity-60"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                
                {{-- RIGHT SIDE (Illustration first on Mobile) --}}
                <div class="relative order-1 md:order-2 flex justify-center items-center">
                    
                    <div class="relative w-full h-[350px] md:h-[500px] flex items-center justify-center p-8 bg-white rounded-[3rem] border-8 border-slate-50 shadow-inner group-hover:scale-[1.03] transition-transform duration-700">
                        <svg viewBox="0 0 200 200" class="w-full h-full p-4">
                            <defs>
                                <filter id="globeGlow">
                                    <feGaussianBlur stdDeviation="4" result="coloredBlur"/>
                                    <feMerge><feMergeNode in="coloredBlur"/><feMergeNode in="SourceGraphic"/></feMerge>
                                </filter>
                                <linearGradient id="orbitGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#6366f1;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#F4CA4A;stop-opacity:1" />
                                </linearGradient>
                            </defs>

                            <circle cx="100" cy="100" r="85" fill="none" stroke="url(#orbitGrad)" stroke-width="1.5" stroke-dasharray="10 6" class="animate-spin-slowOpacity" />
                            <circle cx="100" cy="100" r="70" fill="none" stroke="#2B57A7" stroke-width="0.5" opacity="0.3" />

                            <g class="animate-earth-rotate" style="transform-origin: center center;">
                                <circle cx="100" cy="100" r="50" fill="#2B57A7" />
                                <ellipse cx="100" cy="100" rx="50" ry="20" fill="none" stroke="white" stroke-opacity="0.2" stroke-width="1" />
                                <path d="M100 50 L100 150 M50 100 L150 100" stroke="white" stroke-opacity="0.2" stroke-width="1" />
                            </g>

                            <g x-data="{ orbit: 0 }" x-init="setInterval(() => { orbit += 1 }, 20)" style="transform-origin: center center;" :style="'transform: rotate(' + orbit + 'deg)'">
                                <circle cx="100" cy="30" r="15" fill="white" stroke="#6366f1" stroke-width="3" filter="url(#globeGlow)" />
                                <text x="100" y="34" text-anchor="middle" font-size="10" font-weight="900" fill="#6366f1">USA</text>
                            </g>
                        </svg>

                        <div class="absolute top-10 right-10 bg-amber-400 p-4 rounded-3xl animate-bounce-slow shadow-xl">
                            <span class="text-3xl">⭐</span>
                        </div>
                    </div>
                </div>

                {{-- LEFT SIDE (Content second on Mobile) --}}
                <div class="order-2 md:order-1 relative">
                    <div class="inline-flex items-center gap-2 px-3 py-1 mb-6 bg-indigo-50 border border-indigo-100 rounded-lg">
                        <span class="w-2.5 h-2.5 bg-green-500 rounded-full animate-pulse"></span>
                        <span class="text-[10px] font-black uppercase tracking-widest text-[#1C2738]">Global System Online</span>
                    </div>
                    
                    <h2 class="text-4xl md:text-6xl font-black text-[#1C2738] mb-8 tracking-tighter leading-none">
                        Dreaming of a <span class="text-[#2B57A7] block md:inline border-b-4 md:border-b-8 border-[#F4CA4A]/30">Global Career?</span>
                    </h2>
                    
                    <p class="text-lg md:text-xl text-slate-500 mb-12 font-medium leading-relaxed max-w-lg">
                        LGCC bridges the gap between your local skills and global standards. Let’s talk 1:1 with our experts to map your roadmap.
                    </p>
                    
                    <a href="{{ route('global.career') }}" class="inline-flex items-center gap-3 px-10 py-5 bg-[#2B57A7] text-white font-black rounded-xl hover:scale-105 transition-all shadow-xl shadow-indigo-500/20 group">
                        Explore Global Career 
                        <span class="group-hover:translate-x-1.5 transition-transform">→</span>
                    </a>
                </div>

            </div>
        </div>
    </section>

    {{-- 8. TESTIMONIALS SECTION --}}
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="bg-[#F0F4FA] p-12 rounded-[3rem] border border-blue-50 relative overflow-hidden group">
                    <p class="text-2xl font-bold text-[#1C2738] leading-relaxed mb-8 italic opacity-90 transition-opacity group-hover:opacity-100">"I was an MCA graduate but still felt lost. LGCC gave me the roadmap I needed."</p>
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 bg-[#2B57A7] rounded-2xl shadow-lg transition-transform group-hover:scale-110"></div>
                        <div><p class="font-black text-lg">Prince Paswan</p><p class="text-xs font-bold text-[#2B57A7] uppercase tracking-widest leading-none mt-1">Successful Career</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<style>
    @keyframes draw { from { stroke-dashoffset: 1000; } to { stroke-dashoffset: 0; } }
    .animate-draw { stroke-dasharray: 1000; stroke-dashoffset: 1000; animation: draw 8s linear infinite; }
    @keyframes marquee { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
    .animate-marquee { display: inline-flex; animation: marquee 40s linear infinite; }
    .animate-marquee:hover { animation-play-state: paused; }
    @keyframes spin-slow { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }
    .animate-spin-slow { animation: spin-slow 15s linear infinite; }
    @keyframes spin-slowOpacity { 0%, 100% { transform: rotate(0deg); opacity: 1; } 50% { transform: rotate(180deg); opacity: 0.5; } }
    .animate-spin-slowOpacity { animation: spin-slowOpacity 20s linear infinite; }
    @keyframes float { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-15px); } }
    .animate-float { animation: float 5s ease-in-out infinite; }
    @keyframes bounce-slow { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }
    .animate-bounce-slow { animation: bounce-slow 4s ease-in-out infinite; }
    @keyframes rocket { 0%, 100% { transform: translateY(0) rotate(0deg); } 50% { transform: translateY(-10px) rotate(5deg); } }
    .animate-rocket { animation: rocket 2s ease-in-out infinite; }
    @keyframes earth-rotate { 0%, 100% { transform: scaleX(1); } 50% { transform: scaleX(0.9); } }
    .animate-earth-rotate { animation: earth-rotate 8s ease-in-out infinite; }
    [x-cloak] { display: none !important; }
</style>
@endsection