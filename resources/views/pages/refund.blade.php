@extends('layouts.app')

@section('content')
<div class="py-20 bg-slate-50 font-['Lexend']">
    <div class="max-w-4xl mx-auto px-6">
        <div class="bg-white p-10 md:p-16 rounded-[2.5rem] shadow-xl border border-slate-100">
            <h1 class="text-4xl font-black text-slate-900 mb-8 tracking-tighter italic">Refund & <span class="text-red-500">Cancellation</span></h1>
            <div class="prose prose-slate max-w-none text-slate-600 leading-relaxed space-y-6 font-medium">
                <div class="p-6 bg-red-50 rounded-2xl border border-red-100 mb-8">
                    <p class="text-red-800 font-bold italic text-sm md:text-base">"Transparent and Honest Refund Policies for our Students."</p>
                </div>

                <h3 class="text-xl font-bold text-slate-800 mt-8">1. No Questions Asked (Before Counseling)</h3>
                <p>If you have paid for a package but haven't started your first counseling session, you are eligible for a **100% refund** within 7 days of payment.</p>

                <h3 class="text-xl font-bold text-slate-800 mt-8">2. Partial Refunds</h3>
                <p>Once the skill development or counseling has started, refunds will be calculated based on the services consumed. Transaction fees from Razorpay may be non-refundable.</p>

                <h3 class="text-xl font-bold text-slate-800 mt-8">3. How to Request a Refund?</h3>
                <p>Simply email us at **support@lgcc.in** with your Transaction ID and Registered WhatsApp Number.</p>

                <div class="mt-12 pt-8 border-t border-slate-100">
                    <p class="text-xs text-slate-400">Processing Time: 5-7 Business Days</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection