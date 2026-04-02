<footer class="bg-white border-t border-slate-100 pt-20 pb-10 font-['Lexend']">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 mb-16">
            
            {{-- BRAND SECTION --}}
            <div class="col-span-1 md:col-span-4">
                {{-- Updated Logo Part: Using Official Image --}}
                <div class="flex items-center gap-4 mb-6">
                    <img src="{{ asset('images/logo.png') }}" alt="LGCC Official Logo" class="h-16 md:h-20 w-auto object-contain drop-shadow-sm transition-transform hover:scale-105">
                    <div class="border-l-2 border-indigo-100 h-10 ml-2"></div>
                    <span class="text-2xl font-black text-slate-900 tracking-tighter italic leading-none">LGCC <br><span class="text-indigo-600">Portal</span></span>
                </div>
                
                <p class="text-slate-500 max-w-sm leading-relaxed font-medium text-sm md:text-base">
                    Little Genius Children's Care Pvt. Ltd. is India's leading career-focused ecosystem, dedicated to turning academic confusion into professional success.
                </p>
                {{-- Social Icons --}}
                <div class="flex gap-4 mt-8">
                    @foreach(['FB', 'IG', 'LN'] as $social)
                        <a href="#" class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center text-slate-400 hover:bg-indigo-600 hover:text-white transition-all shadow-sm font-black text-[10px]">{{ $social }}</a>
                    @endforeach
                </div>
            </div>

            {{-- QUICK LINKS --}}
            <div class="col-span-1 md:col-span-2">
                <h4 class="font-black text-slate-900 uppercase tracking-widest text-xs mb-6 border-b-2 border-indigo-600 w-fit pb-1">Quick Links</h4>
                <ul class="space-y-4 text-slate-500 text-sm font-bold">
                    <li><a href="{{ route('packages') }}" class="hover:text-indigo-600 transition-colors">Career Packages</a></li>
                    <li><a href="{{ route('mission') }}" class="hover:text-indigo-600 transition-colors">Our Mission</a></li>
                    <li><a href="{{ route('global.career') }}" class="hover:text-indigo-600 transition-colors">Global Career</a></li>
                </ul>
            </div>

            {{-- LEGAL SECTION --}}
            <div class="col-span-1 md:col-span-2">
                <h4 class="font-black text-slate-900 uppercase tracking-widest text-xs mb-6 border-b-2 border-amber-400 w-fit pb-1">Legal</h4>
                <ul class="space-y-4 text-slate-500 text-sm font-bold">
                    <li><a href="{{ route('privacy') }}" class="hover:text-indigo-600 transition-colors flex items-center gap-2"><span class="w-1 h-1 bg-slate-300 rounded-full"></span> Privacy Policy</a></li>
                    <li><a href="{{ route('terms') }}" class="hover:text-indigo-600 transition-colors flex items-center gap-2"><span class="w-1 h-1 bg-slate-300 rounded-full"></span> Terms & Conditions</a></li>
                    <li><a href="{{ route('refund') }}" class="hover:text-indigo-600 transition-colors flex items-center gap-2"><span class="w-1 h-1 bg-slate-300 rounded-full"></span> Refund Policy</a></li>
                </ul>
            </div>
            
            {{-- SUPPORT & ADDRESS SECTION --}}
            <div class="col-span-1 md:col-span-4">
                <h4 class="font-black text-slate-900 uppercase tracking-widest text-xs mb-6 border-b-2 border-indigo-600 w-fit pb-1">Support & Offices</h4>
                
                <div class="space-y-4">
                    {{-- Head Office Card --}}
                    <div class="bg-slate-50 p-5 rounded-2xl border border-slate-100 transition-all hover:bg-white hover:shadow-lg">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="w-2 h-2 bg-indigo-600 rounded-full animate-pulse"></span>
                            <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest leading-none">Head Office</p>
                        </div>
                        <p class="text-xs md:text-sm font-bold text-slate-700 leading-snug">
                            Vibhuti Khand, Gomti Nagar, <br>
                            Lucknow, Uttar Pradesh (226010)
                        </p>
                    </div>

                    {{-- Branch Office Card --}}
                    <div class="bg-slate-50 p-5 rounded-2xl border border-slate-100 transition-all hover:bg-white hover:shadow-lg border-dashed">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="w-2 h-2 bg-amber-500 rounded-full"></span>
                            <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest leading-none">Branch Office</p>
                        </div>
                        <p class="text-xs md:text-sm font-bold text-slate-700 leading-snug">
                            Vikash Kunj, Near Sundarpur Electricity Office, <br>
                            Etawah, Uttar Pradesh (206001)
                        </p>
                    </div>

                    {{-- Official Site Link --}}
                    <a href="http://www.lgcc.in" target="_blank" class="flex items-center justify-between p-4 bg-indigo-50 rounded-xl group transition-all hover:bg-indigo-600">
                        <span class="text-[10px] font-black text-indigo-600 group-hover:text-white uppercase tracking-widest">Visit Official Site</span>
                        <span class="text-indigo-600 group-hover:text-white group-hover:translate-x-1 transition-transform">↗</span>
                    </a>
                </div>
            </div>

        </div>

        {{-- BOTTOM BAR --}}
        <div class="pt-8 border-t border-slate-100 flex flex-col md:flex-row justify-between items-center gap-4 text-center">
            <p class="text-slate-400 text-[10px] md:text-xs font-medium">
                © 2026 Little Genius Children's Care Pvt. Ltd. All Rights Reserved. <span class="hidden md:inline">| Built with ❤️ in India.</span>
            </p>
            <div class="flex items-center gap-2">
                <div class="h-1.5 w-1.5 bg-green-500 rounded-full animate-pulse"></div>
                <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Server Secure</span>
            </div>
        </div>

    </div>
</footer>