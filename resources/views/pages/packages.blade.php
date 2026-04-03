@extends('layouts.app')

@section('content')
<script src="https://unpkg.com/alpinejs" defer></script>

<div class="font-['Lexend'] overflow-hidden bg-[#F8FAFC] min-h-screen" 
     x-data="{ activePackage: 'default' }">

    {{-- 1. DYNAMIC HERO SECTION --}}
    <section class="pt-32 pb-20 transition-all duration-1000 relative"
             :class="{
                'bg-[#EEF2FF]': activePackage === 'pkg_0',
                'bg-[#E0E7FF]': activePackage === 'pkg_1',
                'bg-[#1C2738]': activePackage === 'pkg_2',
                'bg-white': activePackage === 'default'
             }">
        
        <div class="absolute top-0 left-0 w-96 h-96 bg-blue-100 rounded-full blur-[120px] opacity-50 animate-pulse"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-indigo-100 rounded-full blur-[120px] opacity-50 animate-pulse" style="animation-delay: 2s"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
            <h1 class="text-5xl md:text-7xl font-black mb-10 tracking-tighter leading-none"
                :class="activePackage === 'pkg_2' ? 'text-white' : 'text-[#1C2738]'">
                <template x-if="activePackage === 'default'"><span>Level Up Your <span class="text-[#2B57A7]">Career</span></span></template>
                <template x-if="activePackage === 'pkg_0'"><span>The <span class="text-[#60A5FA]">Skill</span> Foundation</span></template>
                <template x-if="activePackage === 'pkg_1'"><span>Professional <span class="text-[#2B57A7]">Growth</span></span></template>
                <template x-if="activePackage === 'pkg_2'"><span>The <span class="text-[#F4CA4A]">Elite</span> League</span></template>
            </h1>
            
            <div class="relative max-w-md mx-auto h-[250px] flex items-center justify-center">
                <div x-show="activePackage === 'default'" x-transition:enter="duration-500" class="absolute">
                    <div class="w-32 h-32 border-4 border-dashed border-slate-200 rounded-full animate-spin-slow flex items-center justify-center">
                        <div class="w-16 h-16 bg-[#2B57A7] rounded-2xl rotate-45 animate-bounce"></div>
                    </div>
                </div>

                <div x-show="activePackage === 'pkg_0'" x-transition:enter="duration-500" class="absolute">
                    <div class="relative flex items-center justify-center">
                        <div class="absolute w-40 h-40 bg-[#60A5FA]/20 rounded-full animate-ping"></div>
                        <svg viewBox="0 0 100 100" class="w-48 h-48 relative drop-shadow-2xl">
                            <path d="M30 50 Q 50 10 70 50 T 30 50" fill="none" stroke="#60A5FA" stroke-width="3" class="animate-draw-path" />
                            <circle cx="50" cy="50" r="12" fill="#60A5FA" />
                        </svg>
                    </div>
                </div>

                <div x-show="activePackage === 'pkg_1'" x-transition:enter="duration-500" class="absolute">
                    <div class="flex items-end gap-3 h-32">
                        <div class="w-6 bg-[#2B57A7] rounded-t-lg animate-grow-up" style="height: 40%;"></div>
                        <div class="w-6 bg-[#2B57A7] rounded-t-lg animate-grow-up" style="height: 70%; animation-delay: 0.3s"></div>
                        <div class="w-6 bg-[#F4CA4A] rounded-t-lg animate-grow-up" style="height: 100%; animation-delay: 0.5s"></div>
                    </div>
                </div>

                <div x-show="activePackage === 'pkg_2'" x-transition:enter="duration-500" class="absolute">
                    <div class="relative flex items-center justify-center">
                        <svg viewBox="0 0 100 100" class="w-48 h-48 relative drop-shadow-[0_0_30px_rgba(244,202,74,0.5)]">
                            <polygon points="50,15 85,40 85,75 50,95 15,75 15,40" fill="#F4CA4A" class="animate-pulse" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 2. CARDS SECTION --}}
    <div class="max-w-7xl mx-auto px-6 py-20">
        <div class="grid md:grid-cols-3 gap-10">
            @foreach($packages as $index => $package)
                @php
                    $packageId = 'pkg_' . $index;
                    // String features ko array mein badalne ke liye explode use kiya hai
                    $featureList = is_string($package->features) ? explode(',', $package->features) : [];
                    
                    $variants = [
                        999 => ['main' => '#60A5FA', 'bg' => 'bg-[#60A5FA]', 'hover' => 'hover:border-[#60A5FA]'],
                        1499 => ['main' => '#2B57A7', 'bg' => 'bg-[#2B57A7]', 'hover' => 'hover:border-[#2B57A7]'],
                        1999 => ['main' => '#1C2738', 'bg' => 'bg-[#1C2738]', 'hover' => 'hover:border-[#1C2738]'],
                    ];
                    $theme = $variants[$package->price] ?? $variants[999];
                @endphp

                <div @click="activePackage = '{{ $packageId }}'"
                     class="group relative rounded-[3.5rem] p-12 border-2 transition-all duration-700 flex flex-col h-full cursor-pointer overflow-hidden shadow-sm"
                     :class="activePackage === '{{ $packageId }}' ? '{{ $theme['bg'] }} text-white scale-105 shadow-2xl z-20 border-transparent' : 'bg-white border-slate-100 {{ $theme['hover'] }}'">
                    
                    <div class="mb-10 relative z-10">
                        <div class="flex justify-between items-start mb-6">
                            <span class="px-5 py-2 rounded-2xl text-[10px] font-black uppercase tracking-[0.2em]"
                                  :class="activePackage === '{{ $packageId }}' ? 'bg-white/20' : 'bg-slate-50 text-slate-400'">
                                {{ $package->validity }}
                            </span>
                        </div>
                        
                        <h3 class="text-4xl font-black leading-tight tracking-tighter">
                            {{ $package->name }}
                        </h3>
                        
                        <div class="mt-6">
                            <span class="text-6xl font-black tracking-tighter"
                                  :class="activePackage === '{{ $packageId }}' ? 'text-[#F4CA4A]' : 'text-[{{ $theme['main'] }}]'">
                                ₹{{ $package->price }}
                            </span>
                        </div>
                    </div>

                    <div class="flex-grow relative z-10 space-y-6">
                        <ul class="space-y-4">
                            @foreach($featureList as $feature)
                            <li class="flex items-center gap-4 text-sm font-bold">
                                <div class="w-2 h-2 rounded-full" :class="activePackage === '{{ $packageId }}' ? 'bg-[#F4CA4A]' : 'bg-[{{ $theme['main'] }}]'"></div>
                                <span>{{ trim($feature) }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="mt-12 relative z-10">
                        <a href="{{ route('purchase', $package->id) }}" 
                           class="block w-full text-center font-black py-6 rounded-[2rem] shadow-2xl transition-all active:scale-95 text-lg border-b-4"
                           :class="activePackage === '{{ $packageId }}' ? 'bg-white text-[#1C2738] border-[#F4CA4A]' : 'bg-[{{ $theme['main'] }}] text-white border-black/20'">
                            Get Started Now
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<style>
    @keyframes grow-up { from { transform: scaleY(0); } to { transform: scaleY(1); } }
    .animate-grow-up { transform-origin: bottom; animation: grow-up 1s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards; }
    .animate-spin-slow { animation: spin 15s linear infinite; }
    @keyframes draw-path { from { stroke-dashoffset: 200; } to { stroke-dashoffset: 0; } }
    .animate-draw-path { stroke-dasharray: 200; stroke-dashoffset: 200; animation: draw-path 3s ease-in-out infinite; }
</style>
@endsection