@extends('layouts.app')

@section('content')
<div class="font-['Lexend'] overflow-hidden bg-white">

    {{-- 1. PREMIUM HERO SECTION --}}
    <section class="relative min-h-[70vh] flex items-center pt-20 bg-[#1C2738]">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-[#2B57A7] rounded-full blur-[180px] opacity-20 -mr-64 -mt-64"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-[#F4CA4A] rounded-full blur-[180px] opacity-10 -ml-64 -mb-64"></div>
        
        <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 mb-8 animate-bounce">
                <span class="text-xs font-black uppercase tracking-[0.3em] text-[#F4CA4A]">Your Global Journey Starts Here</span>
            </div>
            
            <h1 class="text-5xl md:text-8xl font-black text-white mb-8 tracking-tighter leading-none">
                Go Beyond <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#2B57A7] to-[#F4CA4A]">Geographical Borders.</span>
            </h1>
            
            <p class="text-xl text-slate-400 max-w-3xl mx-auto mb-12 font-medium leading-relaxed">
                LGCC presents a specialized gateway for students dreaming of <span class="text-white">International Degrees</span> and <span class="text-white">Global Tech Careers</span>. Expert mentorship for USA, UK, Canada, and Europe.
            </p>

            <div class="flex flex-wrap justify-center gap-6">
                <a href="#consultation-form" class="px-10 py-5 bg-[#F4CA4A] text-[#1C2738] font-black rounded-2xl hover:scale-105 transition-all shadow-2xl shadow-[#F4CA4A]/20">
                    Book 1:1 Global Counseling
                </a>
                <a href="#explore-destinations" class="px-10 py-5 bg-white/5 text-white border border-white/10 font-black rounded-2xl hover:bg-white/10 transition-all">
                    Explore Destinations
                </a>
            </div>
        </div>
    </section>

    {{-- 2. THE THREE PILLARS (SERVICES) --}}
    <section id="explore-destinations" class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-10 rounded-[2.5rem] shadow-xl border border-slate-100 group hover:-translate-y-4 transition-all duration-500">
                    <div class="text-4xl mb-6">🎓</div>
                    <h3 class="text-2xl font-black text-[#1C2738] mb-4">Study Abroad</h3>
                    <p class="text-slate-500 mb-6 font-medium text-sm">Direct admissions in top-tier universities. We handle your SOP, LOR, and Visa processing with 100% transparency.</p>
                    <ul class="space-y-3 text-xs font-bold text-[#2B57A7] uppercase tracking-wider">
                        <li>• USA & Canada Experts</li>
                        <li>• UK Post-Study Work Visa</li>
                        <li>• European Public Unis</li>
                    </ul>
                </div>

                <div class="bg-white p-10 rounded-[2.5rem] shadow-xl border border-slate-100 group hover:-translate-y-4 transition-all duration-500 md:translate-y-8">
                    <div class="text-4xl mb-6">🌍</div>
                    <h3 class="text-2xl font-black text-[#1C2738] mb-4">Global Internships</h3>
                    <p class="text-slate-500 mb-6 font-medium text-sm">Gain work experience in international startups and MNCs. Remote and On-site opportunities available.</p>
                    <ul class="space-y-3 text-xs font-bold text-[#2B57A7] uppercase tracking-wider">
                        <li>• Paid Tech Internships</li>
                        <li>• Cultural Exchange Programs</li>
                        <li>• Global Networking</li>
                    </ul>
                </div>

                <div class="bg-[#2B57A7] p-10 rounded-[2.5rem] shadow-2xl shadow-[#2B57A7]/30 text-white group hover:-translate-y-4 transition-all duration-500 md:translate-y-16">
                    <div class="text-4xl mb-6">🚀</div>
                    <h3 class="text-2xl font-black mb-4">World-Wide Jobs</h3>
                    <p class="text-blue-100 mb-6 font-medium text-sm">Direct placement drives for skilled professionals in Germany, Japan, and UAE. Your skill, global pay.</p>
                    <ul class="space-y-3 text-xs font-bold text-[#F4CA4A] uppercase tracking-wider">
                        <li>• Tech & Healthcare Roles</li>
                        <li>• Relocation Support</li>
                        <li>• Salary Negotiation Help</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- 3. PRIORITY LEAD CAPTURE FORM --}}
    <section id="consultation-form" class="py-32 bg-white">
        <div class="max-w-4xl mx-auto px-6 bg-[#F0F4FA] p-12 rounded-[3rem] border border-blue-100 relative">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-black text-[#1C2738] mb-4">Request a Global Call-back</h2>
                <p class="text-slate-500 font-medium">Fill in your details and our Global Mentor will contact you.</p>
            </div>

            <form action="#" class="grid md:grid-cols-2 gap-6">
                <input type="text" placeholder="Your Full Name" class="px-6 py-4 rounded-xl border-none ring-1 ring-slate-200 focus:ring-2 focus:ring-[#2B57A7] outline-none font-medium">
                <input type="text" placeholder="WhatsApp Number" class="px-6 py-4 rounded-xl border-none ring-1 ring-slate-200 focus:ring-2 focus:ring-[#2B57A7] outline-none font-medium">
                
                <select class="px-6 py-4 rounded-xl border-none ring-1 ring-slate-200 focus:ring-2 focus:ring-[#2B57A7] outline-none font-medium bg-white">
                    <option>Select Interest</option>
                    <option>Study Abroad</option>
                    <option>International Job</option>
                    <option>Global Internship</option>
                </select>

                <select class="px-6 py-4 rounded-xl border-none ring-1 ring-slate-200 focus:ring-2 focus:ring-[#2B57A7] outline-none font-medium bg-white">
                    <option>Preferred Country</option>
                    <option>USA / Canada</option>
                    <option>UK / Ireland</option>
                    <option>Germany / Europe</option>
                    <option>Middle East</option>
                </select>

                <button class="md:col-span-2 py-5 bg-[#1C2738] text-white font-black rounded-xl hover:bg-[#2B57A7] transition-all shadow-xl shadow-slate-200">
                    Confirm My Consultation
                </button>
            </form>
        </div>
    </section>

</div>
@endsection