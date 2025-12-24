@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/customer.css') }}">
<style>
    .webinars-hero-section {
        background: linear-gradient(180deg, rgba(7, 11, 26, 0.98) 0%, rgba(5, 8, 20, 0.96) 45%, rgba(3, 5, 14, 0.94) 100%), radial-gradient(80% 90% at 20% 15%, rgba(77, 122, 255, 0.16) 0%, rgba(7, 10, 24, 0) 60%), radial-gradient(60% 60% at 80% 5%, rgba(111, 167, 255, 0.12) 0%, rgba(6, 9, 22, 0) 50%);
        background-blend-mode: screen, normal, normal;
        position: relative;
        overflow: hidden;
    }
    .webinars-hero-section::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(2, 4, 12, 0.55) 0%, rgba(2, 5, 14, 0.82) 55%, rgba(2, 4, 12, 0.94) 100%);
        z-index: 0;
    }
    .webinars-hero-section .bg-dots {
        background-image: radial-gradient(#1d4ed8 1px, transparent 1px);
        background-size: 22px 22px;
    }
</style>
@endpush

@section('content')
<div class="customer-page text-text-dark font-sans text-sm leading-relaxed relative">
    <header class="relative py-12 overflow-hidden hero-sheen hero-section z-10 flex items-center">
        <div class="absolute inset-0 bg-dots opacity-30 pointer-events-none"></div>
        <div class="absolute inset-0 opacity-10 pointer-events-none hero-bg-img"></div>
        <div class="relative z-20 max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 text-left" style="position: relative !important; z-index: 20 !important;">
            <h1 class="customer-title font-bold mb-4" style="position: relative !important; z-index: 21 !important;">
                <span data-text-fill="true" class="framer-text" style="background-image: linear-gradient(270deg, rgb(121, 228, 255) 0%, rgb(193, 255, 87) 49.0991%, rgb(255, 196, 87) 100%); -webkit-background-clip: text; background-clip: text; color: transparent; position: relative !important; z-index: 21 !important;">
                    Webinars
                </span>
            </h1>
        </div>
    </header>
    <main class="customer-main py-16 relative z-10">
        <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-base sm:text-lg text-gray-300 mb-8 font-normal leading-relaxed relative z-20" style="position: relative !important; z-index: 20 !important;">
                Learn directly from top communications and public affairs leaders.
            </p>
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 mb-24 relative" style="position: relative !important; z-index: 20 !important;">
            <div class="lg:col-span-5 flex flex-col relative" style="position: relative !important; z-index: 20 !important;">
                <h2 class="text-2xl font-bold mb-6 text-white relative" style="position: relative !important; z-index: 21 !important;">Upcoming Events</h2>
                <div class="flex flex-col gap-6">
                    <div class="bg-[#0f0f23] border border-[#1f1f3a] rounded-xl overflow-hidden shadow-xl hover:border-gray-600 transition-all duration-300 group">
                        <div class="relative bg-[#0d0d2b] p-6 pb-0 border-b border-[#1f1f3a]">
                            <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,_var(--tw-gradient-stops))] from-blue-900/30 via-transparent to-transparent opacity-60"></div>
                            <div class="relative z-10">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="flex items-center gap-2">
                                        <div class="bg-transparent border border-gray-500 text-white rounded-[2px] px-1 text-[9px] font-bold h-4 flex items-center justify-center">C</div>
                                        <span class="text-[10px] tracking-widest text-gray-400 font-semibold uppercase">Clipbook</span>
                                    </div>
                                    <span class="text-gray-600">|</span>
                                    <span class="text-white bg-blue-600 px-2 py-0.5 rounded text-[10px] font-bold uppercase tracking-wide">Live Webinar</span>
                                </div>
                                <h3 class="text-xl font-bold mb-2 leading-tight text-white pr-20">
                                    <span class="text-green-400">Modern PR Mastery:</span> Michael Kempner's Blueprint for Building Iconic Brands
                                </h3>
                                <p class="text-gray-400 text-[11px] leading-relaxed mb-6 pr-24">
                                    Join Michael Kempner and Adam Joseph in an exclusive webinar on <span class="text-green-500">building enduring brands</span> using <span class="text-green-500">integrated communications strategies</span> in today's dynamic media landscape.
                                </p>
                                <div class="flex items-center gap-6 pb-6">
                                    <div class="flex items-center gap-2">
                                        <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center border border-white/10">
                                            <span class="material-icons text-gray-300 text-sm">calendar_today</span>
                                        </div>
                                        <div>
                                            <div class="text-[11px] font-bold text-yellow-400 uppercase">Tuesday</div>
                                            <div class="text-[10px] text-gray-400">October 28</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center border border-white/10">
                                            <span class="material-icons text-gray-300 text-sm">schedule</span>
                                        </div>
                                        <div>
                                            <div class="text-[11px] font-bold text-yellow-400 uppercase">Start at</div>
                                            <div class="text-[10px] text-gray-400">2 pm ET</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="absolute top-4 right-0 flex flex-col gap-3">
                                    <div class="text-center relative group/speaker">
                                        <div class="w-14 h-14 rounded-full border-2 border-[#3b28cc] mx-auto overflow-hidden relative z-10">
                                            <img alt="Michael Kempner" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC56EmVCBa6g55-XcZm_TrQzKnzA3tCgSKGC8UN9LkmJpoPZrqDB6epdOp0ovfEtE74DVsWXj0DOW5qi02EqyYQP2QXJ5ZI5A7rQKS_tQ0sysDDNrQv2t8UdEDyMa-WhDLJxt529fV5mhidb8kR_l-tOIfFaA-OY2w4sLwOuM67cJ6r4teelMgS0ZjFJ7_dGl9XpfiAWvx8K-jD1WdjHNyfk0xfwb8TQVCOsBMiTI_SZ0kDa85xPQ__4yk1uWCP3p0nT3G8HmBmS5Ra"/>
                                        </div>
                                        <div class="mt-1">
                                            <div class="text-[9px] font-bold text-white bg-[#3b28cc]/30 px-1.5 py-0.5 rounded inline-block backdrop-blur-md">Michael Kempner</div>
                                            <div class="text-[8px] text-gray-400 mt-0.5 leading-tight">Founder &amp; CEO<br/>MikeWorldWide</div>
                                        </div>
                                    </div>
                                    <div class="text-center relative group/speaker">
                                        <div class="w-14 h-14 rounded-full border-2 border-[#3b28cc] mx-auto overflow-hidden relative z-10">
                                            <img alt="Adam Joseph" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCRUfF1YBo8m2P0opi99NHPBcIsnVowQQbP7QuDgwQd0Xble3MJtnLjRfZV_37qUgRADx55zL2x6y_veCNTVtdWbsgBvVeyoeURJin5yV6apgL82nWf2ndJuJNwCg4VwN0coJGLVQTk6G6p37iyiryvgpmvS0KpswH0DHvkh15MkLGns6wi0irTtGqs24FRJOwuNpwSBnWwrvUfHBmUc73swXeTZFrpFxZseIwV1f7HBQkuIw_iODiJdYCbI1ZjwSq0rkskJO6tlvTh"/>
                                        </div>
                                        <div class="mt-1">
                                            <div class="text-[9px] font-bold text-white bg-[#3b28cc]/30 px-1.5 py-0.5 rounded inline-block backdrop-blur-md">Adam Joseph</div>
                                            <div class="text-[8px] text-gray-400 mt-0.5 leading-tight">Founder &amp; CEO<br/>Clipbook</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 pt-5">
                            <div class="inline-block px-3 py-1 rounded bg-white/5 text-gray-300 text-[10px] font-medium mb-3 border border-white/10">
                                PR/Communications 101
                            </div>
                            <h3 class="text-lg font-bold mb-3 text-white">
                                Modern PR Mastery: Michael Kempner's Blueprint for Building Iconic Brands
                            </h3>
                            <button class="w-full py-2.5 rounded border border-[#3b28cc] text-white bg-[#3b28cc]/10 hover:bg-[#3b28cc] hover:text-white text-sm font-semibold transition-all duration-200">
                                Register now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-7 flex flex-col">
                <h2 class="text-2xl font-bold mb-6 text-white">Previous Events</h2>
                <div class="flex flex-col gap-5">
                    <div class="bg-[#0f0f23] border border-[#1f1f3a] rounded-xl p-0 hover:border-gray-600 transition-colors flex overflow-hidden">
                        <div class="w-full md:w-80 lg:w-96 relative flex-shrink-0">
                            <img src="https://framerusercontent.com/images/hwbablNkI2hdcs6XCDeopq081g.png?scale-down-to=512&width=3840&height=2160" alt="Navigating Reputation" class="w-full h-full object-cover min-h-[200px]">
                        </div>
                        <div class="p-6 flex-grow">
                            <div class="inline-block px-3 py-1 rounded bg-white/5 text-gray-300 text-[10px] font-medium mb-3 border border-white/10">
                                Public Affairs 101
                            </div>
                            <h3 class="text-lg font-bold mb-2 text-white leading-snug">Navigating Reputation Under Fire: Ken Spain's Playbook for Leading Through Regulatory...</h3>
                            <p class="text-gray-400 text-xs mb-5 line-clamp-2 leading-relaxed">
                               Join Ken Spain and Adam Joseph in an exclusive webinar on safeguarding organizational reputation in today's turbulent environment.
                            </p>
                            <button class="w-full py-2 rounded border border-gray-700 hover:bg-white/5 text-white text-xs font-medium transition-colors">
                                Watch now
                            </button>
                        </div>
                    </div>
                    <div class="bg-[#0f0f23] border border-[#1f1f3a] rounded-xl p-0 hover:border-gray-600 transition-colors flex overflow-hidden">
                        <div class="w-full md:w-80 lg:w-96 relative flex-shrink-0">
                            <img src="https://framerusercontent.com/images/RZni2oSnZnDpDPCGnUZPGVCTTY.png?scale-down-to=512&width=1083&height=738" alt="Crisis Navigation 360" class="w-full h-full object-cover min-h-[200px]">
                        </div>
                        <div class="p-6 flex-grow">
                            <div class="inline-block px-3 py-1 rounded bg-white/5 text-gray-300 text-[10px] font-medium mb-3 border border-white/10">
                                PR/Communications 101
                            </div>
                            <h3 class="text-lg font-bold mb-2 text-white leading-snug">Crisis Navigation 360: Mastering High-Stakes Communications with Judy...</h3>
                            <p class="text-gray-400 text-xs mb-5 line-clamp-2 leading-relaxed">
                                Join Judy Smith and Adam Joseph in this exclusive webinar to learn how to anticipate, manage, and resolve crisis in the digital age.
                            </p>
                            <button class="w-full py-2 rounded border border-gray-700 hover:bg-white/5 text-white text-xs font-medium transition-colors">
                                Watch now
                            </button>
                        </div>
                    </div>
                    <div class="bg-[#0f0f23] border border-[#1f1f3a] rounded-xl p-0 hover:border-gray-600 transition-colors flex overflow-hidden">
                        <div class="w-full md:w-80 lg:w-96 relative flex-shrink-0">
                            <img src="https://framerusercontent.com/images/pxmzXzEk8mePCOVdoAaMZaayFSs.png?scale-down-to=512&width=1083&height=738" alt="Carta's Peter Walker" class="w-full h-full object-cover min-h-[200px]">
                        </div>
                        <div class="p-6 flex-grow">
                            <div class="inline-block px-3 py-1 rounded bg-white/5 text-gray-300 text-[10px] font-medium mb-3 border border-white/10">
                                Expert Media Insights
                            </div>
                            <h3 class="text-lg font-bold mb-2 text-white leading-snug">Carta's Peter Walker on Mastering Business Storytelling for...</h3>
                            <p class="text-gray-400 text-xs mb-5 line-clamp-2 leading-relaxed">
                                Learn how to weave data into your brand storytelling to drive engagement, shape public perception.
                            </p>
                            <button class="w-full py-2 rounded border border-gray-700 hover:bg-white/5 text-white text-xs font-medium transition-colors">
                                Watch now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold mb-10 text-white">Webinars</h2>
            <div class="flex flex-col items-center gap-4 mb-12">
                <div class="flex flex-wrap justify-center gap-3">
                    <button class="px-6 py-2 rounded bg-[#3b28cc]/20 text-[#3b28cc] border border-[#3b28cc] font-medium text-xs shadow-[0_0_10px_rgba(59,40,204,0.3)]">All Posts</button>
                    <button class="px-6 py-2 rounded bg-transparent border border-gray-700 hover:border-gray-500 text-gray-300 hover:text-white text-xs transition-colors">Expert Media Insights</button>
                    <button class="px-6 py-2 rounded bg-transparent border border-gray-700 hover:border-gray-500 text-gray-300 hover:text-white text-xs transition-colors">Industry Trends</button>
                    <button class="px-6 py-2 rounded bg-transparent border border-gray-700 hover:border-gray-500 text-gray-300 hover:text-white text-xs transition-colors">AI Impact Deep Dives</button>
                </div>
                <div class="flex flex-wrap justify-center gap-3">
                    <button class="px-6 py-2 rounded bg-transparent border border-gray-700 hover:border-gray-500 text-gray-300 hover:text-white text-xs transition-colors">PR/Communications/Public Affairs 101</button>
                    <button class="px-6 py-2 rounded bg-transparent border border-gray-700 hover:border-gray-500 text-gray-300 hover:text-white text-xs transition-colors">Omni-Channel Playbooks</button>
                    <button class="px-6 py-2 rounded bg-transparent border border-gray-700 hover:border-gray-500 text-gray-300 hover:text-white text-xs transition-colors">Measurement &amp; Analytics</button>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-20">
                <div class="bg-[#0f0f23] border border-[#1f1f3a] rounded-xl p-6 flex flex-col h-full hover:border-gray-600 transition-colors text-left group">
                    <div class="flex items-center gap-3 mb-5">
                        <div class="w-8 h-8 rounded-full bg-white/5 border border-white/10 flex items-center justify-center">
                            <span class="material-icons text-gray-400 text-sm">public</span>
                        </div>
                        <span class="text-[10px] text-gray-400 border border-gray-700 rounded px-2 py-0.5">PR/Communicati...</span>
                    </div>
                    <h3 class="text-lg font-bold mb-3 text-white leading-snug">Modern PR Mastery: Michael Kempner's Blueprint for...</h3>
                    <p class="text-gray-400 text-xs mb-8 leading-relaxed flex-grow">
                        Unlock Michael Kempner's playbook for building iconic brands in the modern media landscape.
                    </p>
                    <button class="w-full py-2.5 rounded border border-gray-700 hover:bg-white/5 text-white text-xs font-medium transition-colors mt-auto group-hover:border-gray-500">
                        Watch now
                    </button>
                </div>
                <div class="bg-[#0f0f23] border border-[#1f1f3a] rounded-xl p-6 flex flex-col h-full hover:border-gray-600 transition-colors text-left group">
                    <div class="flex items-center gap-3 mb-5">
                        <div class="w-8 h-8 rounded-full bg-white/5 border border-white/10 flex items-center justify-center">
                            <span class="material-icons text-gray-400 text-sm">public</span>
                        </div>
                        <span class="text-[10px] text-gray-400 border border-gray-700 rounded px-2 py-0.5">Public Affairs 101</span>
                    </div>
                    <h3 class="text-lg font-bold mb-3 text-white leading-snug">Navigating Reputation Under Fire: Ken Spain's Playbook for...</h3>
                    <p class="text-gray-400 text-xs mb-8 leading-relaxed flex-grow">
                        Master strategic communication to protect your organization in turbulent times.
                    </p>
                    <button class="w-full py-2.5 rounded border border-gray-700 hover:bg-white/5 text-white text-xs font-medium transition-colors mt-auto group-hover:border-gray-500">
                        Watch now
                    </button>
                </div>
                <div class="bg-[#0f0f23] border border-[#1f1f3a] rounded-xl p-6 flex flex-col h-full hover:border-gray-600 transition-colors text-left group">
                    <div class="flex items-center gap-3 mb-5">
                        <div class="w-8 h-8 rounded-full bg-white/5 border border-white/10 flex items-center justify-center">
                            <span class="material-icons text-gray-400 text-sm">public</span>
                        </div>
                        <span class="text-[10px] text-gray-400 border border-gray-700 rounded px-2 py-0.5">PR/Communicati...</span>
                    </div>
                    <h3 class="text-lg font-bold mb-3 text-white leading-snug">Crisis Navigation 360: Mastering High-Stakes...</h3>
                    <p class="text-gray-400 text-xs mb-8 leading-relaxed flex-grow">
                        Learn how to anticipate, navigate, and manage challenging crises.
                    </p>
                    <button class="w-full py-2.5 rounded border border-gray-700 hover:bg-white/5 text-white text-xs font-medium transition-colors mt-auto group-hover:border-gray-500">
                        Watch now
                    </button>
                </div>
                <div class="bg-[#0f0f23] border border-[#1f1f3a] rounded-xl p-6 flex flex-col h-full hover:border-gray-600 transition-colors text-left group">
                    <div class="flex items-center gap-3 mb-5">
                        <div class="w-8 h-8 rounded-full bg-white/5 border border-white/10 flex items-center justify-center">
                            <span class="material-icons text-gray-400 text-sm">public</span>
                        </div>
                        <span class="text-[10px] text-gray-400 border border-gray-700 rounded px-2 py-0.5">Expert Media Insights</span>
                    </div>
                    <h3 class="text-lg font-bold mb-3 text-white leading-snug">Carta's Peter Walker on Mastering Business...</h3>
                    <p class="text-gray-400 text-xs mb-8 leading-relaxed flex-grow">
                        Learn how to weave data into your brand storytelling to drive engagement.
                    </p>
                    <button class="w-full py-2.5 rounded border border-gray-700 hover:bg-white/5 text-white text-xs font-medium transition-colors mt-auto group-hover:border-gray-500">
                        Watch now
                    </button>
                </div>
                <div class="bg-[#0f0f23] border border-[#1f1f3a] rounded-xl p-6 flex flex-col h-full hover:border-gray-600 transition-colors text-left group">
                    <div class="flex items-center gap-3 mb-5">
                        <div class="w-8 h-8 rounded-full bg-white/5 border border-white/10 flex items-center justify-center">
                            <span class="material-icons text-gray-400 text-sm">public</span>
                        </div>
                        <span class="text-[10px] text-gray-400 border border-gray-700 rounded px-2 py-0.5">Expert Media Insights</span>
                    </div>
                    <h3 class="text-lg font-bold mb-3 text-white leading-snug">The Communications and Government Affairs Playbook...</h3>
                    <p class="text-gray-400 text-xs mb-8 leading-relaxed flex-grow">
                        Learn how to future-proof your communications and government affairs strategy.
                    </p>
                    <button class="w-full py-2.5 rounded border border-gray-700 hover:bg-white/5 text-white text-xs font-medium transition-colors mt-auto group-hover:border-gray-500">
                        Watch now
                    </button>
                </div>
                <div class="bg-[#0f0f23] border border-[#1f1f3a] rounded-xl p-6 flex flex-col h-full hover:border-gray-600 transition-colors text-left group">
                    <div class="flex items-center gap-3 mb-5">
                        <div class="w-8 h-8 rounded-full bg-white/5 border border-white/10 flex items-center justify-center">
                            <span class="material-icons text-gray-400 text-sm">public</span>
                        </div>
                        <span class="text-[10px] text-gray-400 border border-gray-700 rounded px-2 py-0.5">Expert Media Insights</span>
                    </div>
                    <h3 class="text-lg font-bold mb-3 text-white leading-snug">From the West Wing to Hollywood: How Top PR...</h3>
                    <p class="text-gray-400 text-xs mb-8 leading-relaxed flex-grow">
                        Explore the playbook used by political leaders and corporate giants.
                    </p>
                    <button class="w-full py-2.5 rounded border border-gray-700 hover:bg-white/5 text-white text-xs font-medium transition-colors mt-auto group-hover:border-gray-500">
                        Watch now
                    </button>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection

