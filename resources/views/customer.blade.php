@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/customer.css') }}">
@endpush

@section('content')

<div class="customer-page text-text-dark font-sans text-sm leading-relaxed relative">
    <header class="relative py-12 overflow-hidden hero-sheen hero-section z-10 flex items-center">
        <div class="absolute inset-0 bg-dots opacity-30 pointer-events-none"></div>
        <div class="absolute inset-0 opacity-10 pointer-events-none hero-bg-img"></div>
        <div class="relative z-10 max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="customer-title font-bold mb-4">
                <span data-text-fill="true" class="framer-text" style="background-image: linear-gradient(270deg, rgb(121, 228, 255) 0%, rgb(193, 255, 87) 49.0991%, rgb(255, 196, 87) 100%); -webkit-background-clip: text; background-clip: text; color: transparent;">
                    Customer Stories
                </span>
            </h1>
            <p class="text-base sm:text-lg customer-subtitle mt-2 mb-6 max-w-3xl mx-auto font-normal leading-relaxed">
                See how Clipbook accelerates growth for leading communications teams.
            </p>
            <div class="max-w-3xl mx-auto flex flex-col sm:flex-row gap-3 hero-form">
                <input class="flex-1 bg-white dark:bg-surface-dark border border-gray-300 dark:border-gray-700 rounded-lg px-4 py-3 text-gray-900 dark:text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="What's your work email?" type="email"/>
                <a class="block rounded-lg p-3 text-white font-semibold bg-[linear-gradient(90deg,rgb(70,110,255)_0%,rgb(40,60,200)_100%)] hover:opacity-90 transition-all" href="#">
                    Start Monitoring
                </a>
            </div>
        </div>
    </header>

    <main class="py-16 relative z-10 customer-main">
        <section class="trusted-section relative z-10 text-center mb-10 px-4 sm:px-6 lg:px-8">
            <div class="max-w-screen-2xl mx-auto">
                <p class="text-gray-400 text-xs sm:text-sm mb-4 tracking-[0.18em] uppercase">Trusted by the world's leading public relations, government affairs, and communications teams.</p>
                <div class="logo-marquee mt-4">
                    <div class="logo-track">
                        <div class="logo-pill text-xs font-serif uppercase tracking-[0.35em]">Frontwood&nbsp;Strategies</div>
                        <div class="logo-pill text-lg font-bold">OneMain <span class="font-normal text-xs block leading-tight">Financial.</span></div>
                        <div class="logo-pill flex flex-col items-center gap-2 text-[11px] font-semibold uppercase leading-tight">
                            <div class="w-8 h-8 rounded-full border-2 border-current flex items-center justify-center text-[8px]">DE</div>
                            <span class="leading-tight text-center">State of Delaware</span>
                        </div>
                        <div class="logo-pill font-black text-lg uppercase tracking-tighter">American&nbsp;Prairie</div>
                        <div class="logo-pill font-serif text-xl">ABR</div>
                        <div class="logo-pill text-xs font-semibold uppercase tracking-wide">Weber&nbsp;Shandwick</div>
                        <div class="logo-pill text-xs font-semibold uppercase tracking-wide">CAQ</div>
                        <!-- duplicate set for seamless loop -->
                        <div class="logo-pill text-xs font-serif uppercase tracking-[0.35em]">Frontwood&nbsp;Strategies</div>
                        <div class="logo-pill text-lg font-bold">OneMain <span class="font-normal text-xs block leading-tight">Financial.</span></div>
                        <div class="logo-pill flex flex-col items-center gap-2 text-[11px] font-semibold uppercase leading-tight">
                            <div class="w-8 h-8 rounded-full border-2 border-current flex items-center justify-center text-[8px]">DE</div>
                            <span class="leading-tight text-center">State of Delaware</span>
                        </div>
                        <div class="logo-pill font-black text-lg uppercase tracking-tighter">American&nbsp;Prairie</div>
                        <div class="logo-pill font-serif text-xl">ABR</div>
                        <div class="logo-pill text-xs font-semibold uppercase tracking-wide">Weber&nbsp;Shandwick</div>
                        <div class="logo-pill text-xs font-semibold uppercase tracking-wide">CAQ</div>
                    </div>
                </div>
            </div>
        </section>

        <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch">
                <article class="group bg-card-dark border border-white/10 rounded-lg overflow-hidden shadow-sm hover:shadow-2xl hover:border-white/20 transition-all duration-300 flex flex-col">
                    <div class="flex flex-col h-full">
                        <div class="flex flex-col md:flex-row h-full items-stretch gap-6">
                            <div class="p-6 md:flex-[0_0_55%] flex flex-col justify-start">
                                <div class="flex items-center gap-3 mb-6">
                                    <span class="inline-block border border-gray-700 rounded-full px-4 py-1.5 text-xs font-semibold text-gray-200 bg-transparent">Public Affairs</span>
                                </div>
                                <div class="mb-6">
                                    <div class="w-14 h-14 flex flex-col items-center justify-center">
                                        <img src="https://framerusercontent.com/images/PU0QrXg8HReGwB5eotrefFUxjU.png?width=6004&height=6000" alt="50 State Icon" class="w-14 h-14 object-contain"/>
                                    </div>
                                    <div class="text-[10px] tracking-[0.18em] font-bold uppercase text-gray-400 mt-2 text-center">STATE</div>
                                </div>
                                <h3 class="text-base md:text-lg font-medium text-white leading-tight mb-3">
                                    How 50 State Built a Media and Policy Intelligence Engine for 40+ National Clients with Clipbook
                                </h3>
                            </div>
                            <div class="md:flex-[0_0_45%] relative border-l border-white/5 bg-[#1e1b4b]">
                                <img src="https://framerusercontent.com/images/eJ0Fdf5V6sEs0GpkuDdeVQI46Nk.png?scale-down-to=512&width=840&height=840" alt="50 State" class="w-full h-72 md:h-full object-cover"/>
                            </div>
                        </div>
                        <div class="px-8 py-5 border-t border-white/10 bg-card-dark card-footer">
                            <a href="#" class="inline-flex items-center text-sm font-semibold text-white hover:text-primary transition group-hover:translate-x-1 duration-200">
                                Read Customer Story <span class="material-symbols-outlined text-sm ml-1 align-middle">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </article>

                <article class="group bg-card-dark border border-white/10 rounded-lg overflow-hidden shadow-sm hover:shadow-2xl hover:border-white/20 transition-all duration-300 flex flex-col">
                    <div class="flex flex-col h-full">
                        <div class="flex flex-col md:flex-row h-full items-stretch gap-6">
                            <div class="p-6 md:flex-[0_0_55%] flex flex-col justify-start">
                                <div class="flex items-center gap-3 mb-6">
                                    <span class="inline-block border border-gray-700 rounded-full px-4 py-1.5 text-xs font-semibold text-gray-200 bg-transparent">Public Affairs</span>
                                </div>
                                <div class="mb-6">
                                    <div class="w-14 h-14 flex flex-col items-center justify-center">
                                        <img src="https://framerusercontent.com/images/Vmmd1EhzXl4HcBDeObFyte2HIDA.png?width=563&height=176" alt="Frontwood Icon" class="w-14 h-14 object-contain"/>
                                    </div>
                                    <div class="text-[10px] font-serif text-primary/70 uppercase tracking-widest mt-2 text-center">Frontwood Strategies</div>
                                </div>
                                <h3 class="text-base md:text-lg font-medium text-white leading-tight mb-3">
                                    How Frontwood Strategies Scaled Client Impact 10X by Automating Media Intelligence
                                </h3>
                            </div>
                            <div class="md:flex-[0_0_45%] relative border-l border-white/5 bg-[#0B0C15]">
                                <img src="https://framerusercontent.com/images/nENezD1jn1xxr6D40vgJTGLIYk.png?scale-down-to=512&width=840&height=840" alt="Frontwood Strategies" class="w-full h-72 md:h-full object-cover"/>
                            </div>
                        </div>
                        <div class="px-8 py-5 border-t border-white/10 bg-card-dark card-footer">
                            <a href="#" class="inline-flex items-center text-sm font-semibold text-white hover:text-primary transition group-hover:translate-x-1 duration-200">
                                Read Customer Story <span class="material-symbols-outlined text-sm ml-1 align-middle">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </article>

                <article class="group bg-card-dark border border-white/10 rounded-lg overflow-hidden shadow-sm hover:shadow-2xl hover:border-white/20 transition-all duration-300 flex flex-col">
                    <div class="flex flex-col h-full">
                        <div class="flex flex-col md:flex-row h-full items-stretch gap-6">
                            <div class="p-6 md:flex-[0_0_55%] flex flex-col justify-start">
                                <div class="flex items-center gap-3 mb-6">
                                    <span class="inline-block border border-gray-700 rounded-full px-4 py-1.5 text-xs font-semibold text-gray-200 bg-transparent">Governments &amp; Agencies</span>
                                </div>
                                <div class="mb-6 flex items-center gap-2">
                                    <div class="w-14 h-14 flex flex-col items-center justify-center">
                                        <img src="https://framerusercontent.com/images/DlldzajeXBSx7E3wU3tHD3iVp5I.png?width=645&height=233" alt="Delaware Icon" class="w-14 h-14 object-contain"/>
                                    </div>
                                    <div class="text-[10px] font-semibold uppercase text-gray-400 leading-tight text-center">State of Delaware</div>
                                </div>
                                <h3 class="text-base md:text-lg font-medium text-white leading-tight mb-3">
                                    How the State of Delaware Unified Media Intelligence for 114 Leaders with Clipbook
                                </h3>
                            </div>
                            <div class="md:flex-[0_0_45%] relative border-l border-white/5 bg-[#1e1b4b]">
                                <img src="https://framerusercontent.com/images/AuyACwK5UHjwxseYRp0FgW2Hh4.png?scale-down-to=512&width=840&height=840" alt="State of Delaware" class="w-full h-72 md:h-full object-cover"/>
                            </div>
                        </div>
                        <div class="px-8 py-5 border-t border-white/10 bg-card-dark card-footer">
                            <a href="#" class="inline-flex items-center text-sm font-semibold text-white hover:text-primary transition group-hover:translate-x-1 duration-200">
                                Read Customer Story <span class="material-symbols-outlined text-sm ml-1 align-middle">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </article>

                <div class="hidden md:block"></div>
            </div>
        </div>
    </main>

</div>
@endsection

