@extends('layouts.app')

@push('styles')
<style>
    .resource-filter-btn.active {
        background: #3b36db;
        color: white;
        border-color: #3b36db;
    }
</style>
@endpush

@section('content')
<div class="bg-background-light dark:bg-background-dark text-gray-900 dark:text-white min-h-screen">
    <!-- Hero Section -->
    <section class="relative pt-24 pb-12 overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-20 dark:opacity-10 pointer-events-none" style="background-image: radial-gradient(#4f46e5 1px, transparent 1px); background-size: 24px 24px;"></div>
        <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="text-green-600 dark:text-[#b4ff99] text-sm font-medium tracking-wide uppercase mb-4 block">Resources</span>
                <h1 class="text-4xl md:text-5xl font-bold tracking-tight mb-4 text-gray-900 dark:text-white">
                    Resource Library
                </h1>
                <p class="text-lg text-gray-600 dark:text-gray-400 mb-8 max-w-lg">
                    Explore hundreds of resources to level up your media game.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 max-w-lg">
                    <input class="flex-grow bg-white dark:bg-[#1a1c2e] border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-white rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary placeholder-gray-500 dark:placeholder-gray-500 text-sm" placeholder="What's your work email?" type="email"/>
                    <button class="bg-primary hover:bg-primary-hover text-white font-medium px-6 py-3 rounded-lg transition-colors whitespace-nowrap text-sm">
                        Unlock Media Insights
                    </button>
                </div>
            </div>
            <div class="relative hidden lg:block h-[400px]">
                <div class="absolute top-0 right-10 w-72 bg-white dark:bg-surface-dark border border-gray-200 dark:border-surface-border p-5 rounded-xl shadow-lg transform translate-y-4 opacity-60 scale-90">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="material-icons text-gray-400">article</span>
                        <span class="text-sm font-medium text-gray-500">Customer Stories</span>
                    </div>
                    <div class="h-3 bg-gray-200 dark:bg-gray-700 rounded w-full mb-2"></div>
                    <div class="h-3 bg-gray-200 dark:bg-gray-700 rounded w-2/3"></div>
                </div>
                <div class="absolute top-20 right-24 w-80 bg-white dark:bg-surface-dark border border-gray-200 dark:border-surface-border p-6 rounded-xl shadow-2xl z-10">
                    <div class="flex items-center gap-2 mb-5">
                        <span class="material-icons text-gray-400">book</span>
                        <span class="text-sm font-medium text-gray-300">Guides</span>
                    </div>
                    <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded w-full mb-3"></div>
                    <div class="h-4 bg-gray-200 dark:bg-gray-700 rounded w-3/4"></div>
                </div>
                <div class="absolute top-52 right-10 w-72 bg-white dark:bg-surface-dark border border-gray-200 dark:border-surface-border p-5 rounded-xl shadow-lg transform translate-y-4 opacity-60 scale-90">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="material-icons text-gray-400">rss_feed</span>
                        <span class="text-sm font-medium text-gray-500">Blog</span>
                    </div>
                    <div class="h-3 bg-gray-200 dark:bg-gray-700 rounded w-full mb-2"></div>
                    <div class="h-3 bg-gray-200 dark:bg-gray-700 rounded w-2/3"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="pb-8 pt-4 sticky top-20 z-40 bg-background-light/95 dark:bg-background-dark/95 backdrop-blur-sm border-b border-gray-200 dark:border-gray-800">
        <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-center gap-8">
                <div class="flex flex-wrap items-center gap-4 justify-center">
                    <button class="resource-filter-btn px-6 py-3 rounded-lg text-base font-medium bg-primary text-white border border-primary shadow-lg shadow-primary/20 hover:bg-primary-hover transition-all" data-filter="all">
                        All Resources
                    </button>
                    <button class="resource-filter-btn px-6 py-3 rounded-lg text-base font-medium text-gray-600 dark:text-gray-300 bg-transparent border border-gray-300 dark:border-surface-border hover:border-gray-400 dark:hover:border-gray-500 hover:bg-white/5 transition-all" data-filter="customer-stories">
                        Customer Stories
                    </button>
                    <button class="resource-filter-btn px-6 py-3 rounded-lg text-base font-medium text-gray-600 dark:text-gray-300 bg-transparent border border-gray-300 dark:border-surface-border hover:border-gray-400 dark:hover:border-gray-500 hover:bg-white/5 transition-all" data-filter="webinars">
                        Webinars
                    </button>
                    <button class="resource-filter-btn px-6 py-3 rounded-lg text-base font-medium text-gray-600 dark:text-gray-300 bg-transparent border border-gray-300 dark:border-surface-border hover:border-gray-400 dark:hover:border-gray-500 hover:bg-white/5 transition-all" data-filter="blogs">
                        Blogs
                    </button>
                </div>
                <div class="relative w-full max-w-lg mx-auto">
                    <input id="search-input" class="w-full bg-white dark:bg-[#1a1c2e] border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-white text-base rounded-lg pl-5 pr-14 py-3 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent placeholder-gray-500 transition-shadow" placeholder="Search Related Topics" type="text"/>
                    <button class="absolute right-1.5 top-1.5 bottom-1.5 bg-primary hover:bg-primary-hover text-white rounded-md w-10 flex items-center justify-center transition-colors">
                        <span class="material-icons text-lg">search</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources Content -->
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 pb-16 space-y-20">
        <!-- Customer Stories Section -->
        <section class="resource-section" data-type="customer-stories">
            <h2 class="text-xl font-medium text-green-600 dark:text-[#b4ff99] mb-8">Customer Stories</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-surface-dark border border-gray-200 dark:border-surface-border rounded-xl overflow-hidden hover:shadow-xl hover:border-primary/30 transition-all duration-300 group flex flex-col h-full">
                    <div class="bg-gradient-to-b from-blue-600 to-blue-900 h-56 flex items-center justify-center p-8 relative overflow-hidden">
                        <div class="absolute inset-0 bg-blue-900 opacity-50 mix-blend-overlay"></div>
                        <div class="relative z-10 bg-white p-4">
                            <h3 class="text-5xl font-bold text-blue-900 tracking-tighter">50</h3>
                            <div class="text-xs uppercase tracking-[0.3em] text-blue-900 mt-1 text-center font-bold">State</div>
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-grow">
                        <div class="mb-4">
                            <span class="inline-block px-3 py-1 text-xs font-medium rounded-full bg-gray-100 dark:bg-white/10 text-gray-600 dark:text-gray-300 border border-gray-200 dark:border-white/10">Public Affairs</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 line-clamp-3">
                            How 50 State Built a Media and Policy Intelligence Engine for 40+ National Clients with Clipbook
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-6 line-clamp-3 flex-grow">
                            See how Clipbook helped 50 State build a robust media intelligence engine.
                        </p>
                        <a class="block w-full text-center py-3 rounded-lg border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-white font-medium hover:bg-gray-50 dark:hover:bg-white/5 transition-colors text-sm" href="{{ route('customer-stories') }}">
                            Read customer story
                        </a>
                    </div>
                </div>

                <div class="bg-white dark:bg-surface-dark border border-gray-200 dark:border-surface-border rounded-xl overflow-hidden hover:shadow-xl hover:border-primary/30 transition-all duration-300 group flex flex-col h-full">
                    <div class="bg-gradient-to-br from-cyan-600 to-blue-800 h-56 flex items-center justify-center p-8 relative">
                        <div class="text-center text-white">
                            <div class="text-2xl font-light tracking-widest uppercase border-b border-white/30 pb-1 mb-1">Frontwood</div>
                            <div class="text-lg font-light tracking-widest uppercase">Strategies</div>
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-grow">
                        <div class="mb-4">
                            <span class="inline-block px-3 py-1 text-xs font-medium rounded-full bg-gray-100 dark:bg-white/10 text-gray-600 dark:text-gray-300 border border-gray-200 dark:border-white/10">Public Affairs</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 line-clamp-3">
                            How Frontwood Strategies Scaled Client Impact 10X by Automating Media Intelligence
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-6 line-clamp-3 flex-grow">
                            See how Clipbook helped Frontwood Strategies deliver greater client impact, at scale.
                        </p>
                        <a class="block w-full text-center py-3 rounded-lg border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-white font-medium hover:bg-gray-50 dark:hover:bg-white/5 transition-colors text-sm" href="{{ route('customer-stories') }}">
                            Read customer story
                        </a>
                    </div>
                </div>

                <div class="bg-white dark:bg-surface-dark border border-gray-200 dark:border-surface-border rounded-xl overflow-hidden hover:shadow-xl hover:border-primary/30 transition-all duration-300 group flex flex-col h-full">
                    <div class="bg-gradient-to-tr from-blue-700 to-indigo-900 h-56 flex items-center justify-center p-8 relative">
                        <div class="flex items-center gap-3">
                            <div class="w-16 h-16 rounded-full bg-white border-4 border-yellow-500 flex items-center justify-center">
                                <div class="text-[8px] text-center font-serif leading-none text-gray-800">STATE<br/>OF<br/>DELAWARE</div>
                            </div>
                            <div class="text-white text-xl font-serif leading-tight">
                                State of<br/>Delaware
                            </div>
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-grow">
                        <div class="mb-4">
                            <span class="inline-block px-3 py-1 text-xs font-medium rounded-full bg-gray-100 dark:bg-white/10 text-gray-600 dark:text-gray-300 border border-gray-200 dark:border-white/10">Governments &amp; Agencies</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 line-clamp-3">
                            How the State of Delaware Unified Media Intelligence for 114 Leaders with Clipbook
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-6 line-clamp-3 flex-grow">
                            See how Clipbook helped The State of Delaware elevate their strategic communications by unifying media intelligence for 114 leaders across the state's 20 agencies.
                        </p>
                        <a class="block w-full text-center py-3 rounded-lg border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-white font-medium hover:bg-gray-50 dark:hover:bg-white/5 transition-colors text-sm" href="{{ route('customer-stories') }}">
                            Read customer story
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Webinars Section -->
        <section class="resource-section" data-type="webinars">
            <h2 class="text-xl font-medium text-green-600 dark:text-[#b4ff99] mb-8">Webinars</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-surface-dark border border-gray-200 dark:border-surface-border rounded-xl overflow-hidden hover:shadow-xl hover:border-primary/30 transition-all duration-300 group flex flex-col h-full">
                    <div class="bg-[#0b0c2a] h-56 relative overflow-hidden p-6 flex flex-col justify-between">
                        <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(#3b36db 1px, transparent 1px); background-size: 8px 8px;"></div>
                        <div class="relative z-10 flex justify-between items-start">
                            <div class="text-[10px] text-blue-400 font-bold tracking-wider uppercase">Live Webinar</div>
                        </div>
                        <div class="relative z-10 flex justify-end mt-2">
                            <div class="flex -space-x-3">
                                <img alt="Speaker" class="w-12 h-12 rounded-full border-2 border-[#0b0c2a]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCR4LzadRkRaXvey5k5SSMjmvP831umEXvX3Ci0RaOa8RtEys12yHwZOEPrGRKx9X9xknhIpYBNewljpMXQRABPa_xYmxBXFkSp5o-K44VGe1KkdbAvzOWaH1Puq8NiTSvUp87RmGmdLDfMd3NZLQmWOgZDrO2QHsc5gieHdPwn3FMlLHZxTOW6aPqGhJZ7_cOh0ssqwV04jUStc95j8j4SZstQv2-B1zWEml53AOpOV-2QbNiLayQSgGwZCSwIm1M3geOrH9TFDTxo"/>
                                <img alt="Speaker" class="w-12 h-12 rounded-full border-2 border-[#0b0c2a]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAc-mT7nS9Wkr7ClFJjFDlp4DiwbE3rLP6WUW8V-wXPmKpONgX0pKE9PlBL7vH3VaeWT00mqHiUlmHIkn-8qxl9YL92KpCxarjH0xaDaJ18XZ0Ak58Zjg04ZrEYXpQOETc-5K5H8ARu0G80JCnks93NiAWrciUIMgamUN_639QYKt1-f2ft9kax7KoQWwZm2Yuo4WP07IobwIS6NrmxdOTVziLls1BLpnh9heuShBDPXQa6ci_HKG7-vXFnPRYZsKuu76j5O-5MVHkH"/>
                            </div>
                        </div>
                        <div class="relative z-10 text-white mt-auto">
                            <div class="text-xs text-blue-200 mb-1 flex items-center gap-2">
                                <span class="material-icons text-sm">calendar_today</span> Oct 28
                                <span class="material-icons text-sm ml-2">schedule</span> 2 pm ET
                            </div>
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-grow">
                        <div class="mb-4">
                            <span class="inline-block px-3 py-1 text-xs font-medium rounded-full bg-gray-100 dark:bg-white/10 text-gray-600 dark:text-gray-300 border border-gray-200 dark:border-white/10">PR/Communications 101</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">
                            Modern PR Mastery: Michael Kempner's Blueprint for Building Iconic Brands
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-6 flex-grow">
                            Unlock Michael Kempner's playbook for building iconic brands in the modern media landscape.
                        </p>
                        <a class="block w-full text-center py-3 rounded-lg border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-white font-medium hover:bg-gray-50 dark:hover:bg-white/5 transition-colors text-sm" href="#">
                            Watch now
                        </a>
                    </div>
                </div>

                <div class="bg-white dark:bg-surface-dark border border-gray-200 dark:border-surface-border rounded-xl overflow-hidden hover:shadow-xl hover:border-primary/30 transition-all duration-300 group flex flex-col h-full">
                    <div class="bg-[#0f113a] h-56 relative overflow-hidden p-6 flex flex-col justify-between">
                        <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(#4f46e5 1px, transparent 1px); background-size: 8px 8px;"></div>
                        <div class="relative z-10 flex justify-between items-start">
                            <div class="text-[10px] text-blue-400 font-bold tracking-wider uppercase">Live Webinar</div>
                        </div>
                        <div class="relative z-10 flex justify-end mt-2">
                            <div class="flex -space-x-3">
                                <img alt="Speaker" class="w-12 h-12 rounded-full border-2 border-[#0f113a]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDWnefiobzpjmRlJ6RL8xlQ5Mm5B7XMrFRlYUFNR9PsA5yns-Zy4uP2_OnnCUqgF_sujiVxQAErajt78UWwRC_pPqbjL5iTIWFFSJ7EEyYKc-TsjX0yv-MKx9B8evmM-s8Mgb5ugya8LgOPjD5936qUNvOB9XyKh7Aia1eL2yepOXETyo_4xEvPZLO2QqiuIqaLqsMj2suf1RfKPs6HrZNdqg4jB0YxYa1H26SHiRGD4mCLBMvUwWcnZa45sZ4kc1R5CNa4cKkhB-wh"/>
                                <img alt="Speaker" class="w-12 h-12 rounded-full border-2 border-[#0f113a]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAfrltj0Oyev1p5irRmbD83uh9i_ZknLTQ1qpGRoN22teBAWWxDJdygOomYtOv42CmusYZDlT6xA64XCP6pe6qo-uvGsIyACScm9tdqR_peJ2WzbQcY-lRO9D50M74n0eC78zUHsAyww1NYKqpzx-MHzRGlg64XQ4ZLdQzPB3hwXLVuXqECnNBlWpDbJhxLISWksW0Q331FSgZpDFORCC6xMUSKJtWjmvkHvvk3ClKRY-DQFmdtYKsfGsXtuaCTqgjdIsM2zKAbCIZf"/>
                            </div>
                        </div>
                        <div class="relative z-10 text-white mt-auto">
                            <div class="text-xs text-blue-200 mb-1 flex items-center gap-2">
                                <span class="material-icons text-sm">calendar_today</span> Sept 23
                                <span class="material-icons text-sm ml-2">schedule</span> 2 pm ET
                            </div>
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-grow">
                        <div class="mb-4">
                            <span class="inline-block px-3 py-1 text-xs font-medium rounded-full bg-gray-100 dark:bg-white/10 text-gray-600 dark:text-gray-300 border border-gray-200 dark:border-white/10">Public Affairs 101</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">
                            Navigating Reputation Under Fire: Ken Spain's Playbook for Leading Through Regulatory Turbulence
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-6 flex-grow">
                            Master strategic communication to protect your organization in turbulent times.
                        </p>
                        <a class="block w-full text-center py-3 rounded-lg border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-white font-medium hover:bg-gray-50 dark:hover:bg-white/5 transition-colors text-sm" href="#">
                            Watch now
                        </a>
                    </div>
                </div>

                <div class="bg-white dark:bg-surface-dark border border-gray-200 dark:border-surface-border rounded-xl overflow-hidden hover:shadow-xl hover:border-primary/30 transition-all duration-300 group flex flex-col h-full">
                    <div class="bg-[#050614] h-56 relative overflow-hidden p-6 flex flex-col justify-between">
                        <div class="absolute inset-0 opacity-30" style="background-image: radial-gradient(#3b82f6 1px, transparent 1px); background-size: 6px 6px;"></div>
                        <div class="relative z-10 flex justify-between items-start">
                            <div class="text-[10px] text-blue-400 font-bold tracking-wider uppercase">Live Webinar</div>
                        </div>
                        <div class="relative z-10 flex justify-end mt-2">
                            <div class="flex -space-x-3">
                                <img alt="Speaker" class="w-12 h-12 rounded-full border-2 border-[#050614]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA587lFQ6fAYwvhd3doZWlnVRp2pVCuSGQlSQIiVbBrOoU53Mi-sNsrG9S7tCLn55d5dDiejo0_gz7yfxxslO_C9aLyjmwattCQpOZgNgtuQ1zas7dABt6MPM1j5znVF3SEMXLYAoQDk8c5kuz-JRUIXsXudvxfuf4dk5rIm4DiebwNvRRWCCRiymympGyHV3FDrawPSVyjTropOjexNKU7zTsLi86_YBFj98D_Yt_i55oB9X9B52acR-AZcIax32L04sivhodi7M3v"/>
                                <img alt="Speaker" class="w-12 h-12 rounded-full border-2 border-[#050614]" src="https://lh3.googleusercontent.com/aida-public/AB6AXuATEM67dpjQWx96zPBI-rb8t42kDFVqOzqTEqR2uPl89l_rr4wRimSG6nxGjT6bm86YiAYh0RqQuPn4qKvt_IQIFnhvoDlUwfkKnjIYmSyqBkMPG1rT6BkcESYYM6pjVg_V3Bw_c6DphroESsHcD3_xvAehtCnviz6x4QMNdWpHdU6Zj2UuElgyLVSbIsROTya5dPqZ04M33Uo8AYeIytcrYJxGUstbmdJN9tRpFyFSvVDgCWmcXQC4xc5-knefqUlqiBJgIYpfQxuO"/>
                            </div>
                        </div>
                        <div class="relative z-10 text-white mt-auto">
                            <div class="text-xs text-blue-200 mb-1 flex items-center gap-2">
                                <span class="material-icons text-sm">calendar_today</span> July 15
                                <span class="material-icons text-sm ml-2">schedule</span> 2 pm ET
                            </div>
                        </div>
                    </div>
                    <div class="p-8 flex flex-col flex-grow">
                        <div class="mb-4">
                            <span class="inline-block px-3 py-1 text-xs font-medium rounded-full bg-gray-100 dark:bg-white/10 text-gray-600 dark:text-gray-300 border border-gray-200 dark:border-white/10">PR/Communications 101</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3">
                            Crisis Navigation 360: Mastering High-Stakes Communications with Judy Smith
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-6 flex-grow">
                            Learn how to anticipate, navigate, and manage challenging crises.
                        </p>
                        <a class="block w-full text-center py-3 rounded-lg border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-white font-medium hover:bg-gray-50 dark:hover:bg-white/5 transition-colors text-sm" href="#">
                            Watch now
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blogs Section -->
        <section class="resource-section" data-type="blogs">
            <h2 class="text-xl font-medium text-green-600 dark:text-[#b4ff99] mb-8">Blogs</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-surface-dark border border-gray-200 dark:border-surface-border rounded-xl overflow-hidden hover:shadow-xl hover:border-primary/30 transition-all duration-300 group flex flex-col h-full">
                    <div class="bg-gradient-to-br from-purple-600 to-indigo-800 h-48 flex items-center justify-center p-6">
                        <span class="material-icons text-6xl text-white opacity-50">article</span>
                    </div>
                    <div class="p-8 flex flex-col flex-grow">
                        <div class="mb-4">
                            <span class="inline-block px-3 py-1 text-xs font-medium rounded-full bg-gray-100 dark:bg-white/10 text-gray-600 dark:text-gray-300 border border-gray-200 dark:border-white/10">Public Affairs 101</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 line-clamp-2">
                            Navigating Public Affairs in a Digital Era: Inside Danny Werfel's IRS Communication Strategy
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-6 line-clamp-3 flex-grow">
                            Learn how two-time IRS Commissioner Danny Werfel branded the IRS to build trust and engage communities in a digital age.
                        </p>
                        <a class="block w-full text-center py-3 rounded-lg border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-white font-medium hover:bg-gray-50 dark:hover:bg-white/5 transition-colors text-sm" href="#">
                            Read Blog
                        </a>
                    </div>
                </div>

                <div class="bg-white dark:bg-surface-dark border border-gray-200 dark:border-surface-border rounded-xl overflow-hidden hover:shadow-xl hover:border-primary/30 transition-all duration-300 group flex flex-col h-full">
                    <div class="bg-gradient-to-br from-blue-600 to-cyan-800 h-48 flex items-center justify-center p-6">
                        <span class="material-icons text-6xl text-white opacity-50">trending_up</span>
                    </div>
                    <div class="p-8 flex flex-col flex-grow">
                        <div class="mb-4">
                            <span class="inline-block px-3 py-1 text-xs font-medium rounded-full bg-gray-100 dark:bg-white/10 text-gray-600 dark:text-gray-300 border border-gray-200 dark:border-white/10">Expert Media Insights</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 line-clamp-2">
                            The 2025 LinkedIn Content Playbook: A Step-by-Step Guide for Executives and Communications Leaders
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-6 line-clamp-3 flex-grow">
                            Learn to develop quality content and leverage proven growth tactics to build a strong brand presence on LinkedIn.
                        </p>
                        <a class="block w-full text-center py-3 rounded-lg border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-white font-medium hover:bg-gray-50 dark:hover:bg-white/5 transition-colors text-sm" href="#">
                            Read Blog
                        </a>
                    </div>
                </div>

                <div class="bg-white dark:bg-surface-dark border border-gray-200 dark:border-surface-border rounded-xl overflow-hidden hover:shadow-xl hover:border-primary/30 transition-all duration-300 group flex flex-col h-full">
                    <div class="bg-gradient-to-br from-green-600 to-emerald-800 h-48 flex items-center justify-center p-6">
                        <span class="material-icons text-6xl text-white opacity-50">library_books</span>
                    </div>
                    <div class="p-8 flex flex-col flex-grow">
                        <div class="mb-4">
                            <span class="inline-block px-3 py-1 text-xs font-medium rounded-full bg-gray-100 dark:bg-white/10 text-gray-600 dark:text-gray-300 border border-gray-200 dark:border-white/10">PR/Communications 101</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 line-clamp-2">
                            The Top 15 PR and Communications Newsletters for 2025
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-6 line-clamp-3 flex-grow">
                            Here are 15 top newsletters that leading comms professionals rely on.
                        </p>
                        <a class="block w-full text-center py-3 rounded-lg border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-white font-medium hover:bg-gray-50 dark:hover:bg-white/5 transition-colors text-sm" href="#">
                            Read Blog
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Book Time Section -->
    @include('partials.book-time')
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.resource-filter-btn');
        const resourceSections = document.querySelectorAll('.resource-section');
        const searchInput = document.getElementById('search-input');

        function filterResources(filter) {
            resourceSections.forEach(section => {
                if (filter === 'all' || section.dataset.type === filter) {
                    section.style.display = 'block';
                } else {
                    section.style.display = 'none';
                }
            });

            filterButtons.forEach(btn => {
                if (btn.dataset.filter === filter) {
                    btn.classList.add('active');
                    btn.classList.remove('text-gray-600', 'dark:text-gray-300', 'bg-transparent');
                    btn.classList.add('bg-primary', 'text-white', 'border-primary');
                } else {
                    btn.classList.remove('active', 'bg-primary', 'text-white', 'border-primary');
                    btn.classList.add('text-gray-600', 'dark:text-gray-300', 'bg-transparent');
                }
            });
        }

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                filterResources(this.dataset.filter);
            });
        });

        searchInput.addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            resourceSections.forEach(section => {
                const cards = section.querySelectorAll('.bg-white, .dark\\:bg-surface-dark');
                cards.forEach(card => {
                    const text = card.textContent.toLowerCase();
                    if (text.includes(searchTerm)) {
                        card.style.display = '';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    });
</script>
@endpush
@endsection

