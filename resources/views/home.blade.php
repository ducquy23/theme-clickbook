@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-[0.03] dark:opacity-[0.15] pointer-events-none bg-grid-pattern bg-grid"></div>
        <div class="absolute top-1/4 left-1/2 -translate-x-1/2 w-[800px] h-[500px] bg-primary/20 blur-[120px] rounded-full pointer-events-none"></div>
        <div class="relative z-10 max-w-6xl mx-auto px-4 text-center mt-[120px]">
            <a class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-gray-100 dark:bg-gray-800/80 border border-gray-200 dark:border-gray-700 text-sm font-medium text-[#F5F6FA] hover:border-primary/50 transition-colors mb-8 backdrop-blur-sm" href="#">
                <img src="{{ asset('assets/images/logo-removebg.png') }}" alt="Clipbook logo" class="w-8 h-7 object-contain"/>
                Clipbook announces <span class="text-green-600 dark:text-green-400" style="background-image: linear-gradient(505deg, rgb(121, 228, 255) 0%, rgb(193, 255, 86) 75.1784%, rgb(255, 195, 86) 100%); -webkit-background-clip: text; background-clip: text; color: transparent;">$3.3 million</span> seed round
                <span class="material-icons text-sm">arrow_forward</span>
            </a>
            <h1 class="text-7xl md:text-5xl font-bold tracking-tight text-gray-900 dark:text-white mb-6 leading-[1.1]">
                AI research and analysis for <br/>
                <span class="text-white">public relations</span>
            </h1>
            <p class="text-[rgb(220,220,220)] mb-10 mx-auto leading-relaxed">
                Clipbook monitors, aggregates, and analyzes data from over 1 million media and policy sources, surfacing the most actionable intelligence
            </p>
            <div class="max-w-md mx-auto flex flex-col sm:flex-row gap-3 mb-16">
                <input class="flex-1 bg-white dark:bg-surface-dark border border-gray-300 dark:border-gray-700 rounded-lg px-4 py-3 text-gray-900 dark:text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="What's your work email?" type="email" style="width: 440px;"/>
                <a class="block rounded-lg p-3 pl-5 pr-5 text-white font-semibold bg-[linear-gradient(90deg,rgb(70,110,255)_0%,rgb(40,60,200)_100%)] hover:opacity-90 transition-all text-sm" href="#">
                    Start Monitoring
                </a>
            </div>
            <div class="framer-xp41rj" data-framer-appear-id="xp41rj" data-framer-name="Hero-image" id="hero-video" style="will-change: transform; opacity: 1; transform: scale(1.03228);">
                <div class="ssr-variant hidden-f6bbzy">
                    <div class="framer-13qwumg-container">
                        <div class="framer-FBK81 framer-2w75lq framer-v-2w75lq hover" style="height: 100%; width: 100%; border-radius: 10px; opacity: 1;">
                            <div class="framer-6jkvxi-container" style="opacity: 1;">
                                <video
                                    src="https://framerusercontent.com/assets/FrobVqucBfLyIYdCwmeBzxWPk.mp4"
                                    loop
                                    preload="metadata"
                                    poster="https://framerusercontent.com/images/UokH1Igxry9vYbJrvEsqJpGOv0.png?width=4056&amp;height=2281"
                                    controls
                                    playsinline
                                    style="cursor:auto;width:100%;height:100%;border-radius:0px;display:block;object-fit:cover;background-color:rgba(0, 0, 0, 0);object-position:50% 50%">
                                </video>
                            </div>
                            <div class="framer-66a32j-container" style="opacity: 1; transform: translate(-50%, -50%) scale(0.923534, 0.923534); will-change: transform; transform-origin: 50% 50% 0px;">
                                <div class="framer-JjNbp framer-1aailqk framer-v-1aailqk" data-border="true" data-framer-name="Play" data-highlight="true" tabindex="0" style="--border-bottom-width: 1px; --border-color: rgb(64, 64, 64); --border-left-width: 1px; --border-right-width: 1px; --border-style: solid; --border-top-width: 1px; backdrop-filter: blur(8px); background-color: rgba(255, 255, 255, 0.32); height: 100%; width: 100%; border-radius: 49.9752% / 49.9752%; transform: scale(1.0828, 1.0828) scale(0.923534, 0.923534); transform-origin: 50% 50% 0px;">
                                    <div class="framer-58avS framer-1c6ph31" style="--1df8v9o: rgb(255, 255, 255); transform: translate(-50%, -50%) scale(1.0828, 1.0828) scale(1, 1); transform-origin: 50% 50% 0px;"></div>
                    </div>
                </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trusted By Section -->
    <section class="py-12 border-y border-gray-200 dark:border-gray-800 bg-white dark:bg-black/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="flex flex-col md:flex-row justify-between items-center mb-10 px-4 text-base">
                <p class="font-medium" style="color: rgb(220, 220, 220);">
                    Trusted by the world's leading communications and public affairs teams.
                </p>
                <a class="font-medium flex items-center hover:underline" style="color: rgb(220, 220, 220);" href="#">
                    See case studies <span class="material-icons text-base ml-1">arrow_forward</span>
                </a>
            </div>

            <div class="overflow-hidden">
                <div class="flex gap-8 items-center animate-scroll opacity-60 grayscale dark:invert">
                    <img src="{{ asset('assets/images/see-case-studies/bypnn6W9rQGsruIFK5ZVgdtUtEY.webp') }}" alt="Logo" class="h-12 w-auto object-contain flex-shrink-0"/>
                    <img src="{{ asset('assets/images/see-case-studies/UagVdWviKsnDlXpOz5w3qi1S4.png') }}" alt="Logo" class="h-12 w-auto object-contain flex-shrink-0"/>
                    <img src="{{ asset('assets/images/see-case-studies/pk63BRZbtdugOY5u2IFm7dtRHv4.png') }}" alt="Logo" class="h-12 w-auto object-contain flex-shrink-0"/>
                    <img src="{{ asset('assets/images/see-case-studies/S0Sra2gqdC5Dnmjmk4xM86wLwH0.png') }}" alt="Logo" class="h-12 w-auto object-contain flex-shrink-0"/>
                    <img src="{{ asset('assets/images/see-case-studies/lfbn10zpkbuteY1CtQxOyirZfWs.png') }}" alt="Logo" class="h-12 w-auto object-contain flex-shrink-0"/>
                    <img src="{{ asset('assets/images/see-case-studies/DlldzajeXBSx7E3wU3tHD3iVp5I.webp') }}" alt="Logo" class="h-12 w-auto object-contain flex-shrink-0"/>
                    <!-- Duplicate for seamless loop -->
                    <img src="{{ asset('assets/images/see-case-studies/bypnn6W9rQGsruIFK5ZVgdtUtEY.webp') }}" alt="Logo" class="h-12 w-auto object-contain flex-shrink-0"/>
                    <img src="{{ asset('assets/images/see-case-studies/UagVdWviKsnDlXpOz5w3qi1S4.png') }}" alt="Logo" class="h-12 w-auto object-contain flex-shrink-0"/>
                    <img src="{{ asset('assets/images/see-case-studies/pk63BRZbtdugOY5u2IFm7dtRHv4.png') }}" alt="Logo" class="h-12 w-auto object-contain flex-shrink-0"/>
                    <img src="{{ asset('assets/images/see-case-studies/S0Sra2gqdC5Dnmjmk4xM86wLwH0.png') }}" alt="Logo" class="h-12 w-auto object-contain flex-shrink-0"/>
                    <img src="{{ asset('assets/images/see-case-studies/lfbn10zpkbuteY1CtQxOyirZfWs.png') }}" alt="Logo" class="h-12 w-auto object-contain flex-shrink-0"/>
                    <img src="{{ asset('assets/images/see-case-studies/DlldzajeXBSx7E3wU3tHD3iVp5I.webp') }}" alt="Logo" class="h-12 w-auto object-contain flex-shrink-0"/>
                </div>
            </div>
        </div>
    </section>

    <!-- Media Intelligence Section -->
    <section id="mediaintelligence" class="py-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gray-100 dark:bg-surface-dark border border-gray-200 dark:border-gray-800 rounded-3xl p-8 md:p-12 lg:p-16 flex flex-col lg:flex-row gap-12 lg:gap-20 items-center overflow-hidden relative">
                <div class="flex-1 relative z-10">
                    <span class="text-lime-600 dark:text-lime-400 font-medium mb-4 block">Media Intelligence</span>
                    <h2 class="text-2xl md:text-3xl font-bold text-[#D7D7D7] mb-6">
                        Automate Research. <br/> Accelerate Growth.
                    </h2>
                    <p class="text-[#D7D7D7] text-lg mb-6 leading-relaxed">
                        Monitor over 1 million sources across news, TV, radio, social media, podcasts, and policy - all in one platform.
                    </p>
                    <p class="text-[#D7D7D7] text-lg mb-8 leading-relaxed">
                        Clipbook's agentic AI goes beyond simple keyword tracking to predictively surface the most relevant, actionable moments, delivering a precise, relevant, and context-rich briefing tailored to your team's needs.
                    </p>

                    <a class="inline-block px-6 py-3 rounded-lg border border-[rgb(53,40,255)] text-[#D7D7D7]   hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors font-medium" href="#">
                        Learn More
                    </a>
                </div>
                <div class="flex-1 w-full relative">
                    <div class="absolute -inset-10 bg-gradient-to-tr from-blue-500/10 to-purple-500/10 rounded-full blur-3xl"></div>
                    <div class="relative rounded-xl">
                        <div class="space-y-4 relative">
                            <div class="flex justify-center relative">
                                <img id="media-image" src="https://framerusercontent.com/images/5XE6Em1yp20CQamkzQEcwb1DFzU.png?scale-down-to=1024" alt="Main Image" class="max-w-full h-auto transition-opacity duration-300" />
                                <button id="media-prev-btn" class="absolute left-4 top-1/2 -translate-y-1/2 w-12 h-12 rounded-full backdrop-filter backdrop-blur-md bg-black/20 hover:bg-black/30 transition-all flex items-center justify-center cursor-pointer z-10 hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="rgb(255, 255, 255)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="15 18 9 12 15 6"></polyline>
                                    </svg>
                                </button>
                                <button id="media-next-btn" class="absolute right-4 top-1/2 -translate-y-1/2 w-12 h-12 rounded-full backdrop-filter backdrop-blur-md bg-black/20 hover:bg-black/30 transition-all flex items-center justify-center cursor-pointer z-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="rgb(255, 255, 255)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="mt-6 flex gap-2 overflow-x-auto p-2 scrollbar-hide bg-[rgb(34,36,52)] rounded-[21px] opacity-100">
                            <span data-category="news" class="category-pill active px-3 py-1 rounded-full cursor-pointer bg-gray-800 text-white text-xs font-medium flex items-center gap-1">
                                <span class="material-icons text-[10px]">article</span> News
                            </span>
                            <span data-category="social" class="category-pill px-3 py-1 rounded-full cursor-pointer bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-400 text-xs font-medium border border-gray-200 dark:border-gray-700 flex items-center gap-1">
                                <span class="material-icons text-[10px]">share</span> Social
                            </span>
                            <span data-category="policy" class="category-pill px-3 py-1 rounded-full cursor-pointer bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-400 text-xs font-medium border border-gray-200 dark:border-gray-700 flex items-center gap-1">
                                <span class="material-icons text-[10px]">gavel</span> Policy
                            </span>
                            <span data-category="broadcasts" class="category-pill px-3 py-1 rounded-full cursor-pointer bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-400 text-xs font-medium border border-gray-200 dark:border-gray-700 flex items-center gap-1">
                                <span class="material-icons text-[10px]">tv</span> Broadcasts
                            </span>
                            <span data-category="podcasts" class="category-pill px-3 py-1 rounded-full cursor-pointer bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-400 text-xs font-medium border border-gray-200 dark:border-gray-700 flex items-center gap-1">
                                <span class="material-icons text-[10px]">podcasts</span> Podcasts
                            </span>
                            <span data-category="newsletters" class="category-pill px-3 py-1 rounded-full cursor-pointer bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-400 text-xs font-medium border border-gray-200 dark:border-gray-700 flex items-center gap-1">
                                <span class="material-icons text-[10px]">email</span> Newsletters
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reporting Section -->
    <section id="reporting" class="py-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gray-100 dark:bg-surface-dark border border-gray-200 dark:border-gray-800 rounded-3xl p-8 md:p-12 lg:p-16 flex flex-col lg:flex-row-reverse gap-12 lg:gap-20 items-center overflow-hidden">
                <div class="flex-1 relative z-10">
                    <span class="text-lime-600 dark:text-lime-400 font-medium mb-4 block">Reporting</span>
                    <h2 class="text-3xl md:text-3xl font-bold text-[#D7D7D7] mb-6">
                        Track Comprehensively. <br/> Get Customized Intelligence.
                    </h2>
                    <p class="text-[#D7D7D7] text-lg mb-6 leading-relaxed">
                        Track any stakeholder, topic, or geography. Get tailored, noise-free reports built for your team's goals.
                    </p>

                    <p class="text-[#D7D7D7] text-lg mb-8 leading-relaxed">
                        Our platform automatically filters out irrelevant content, ranks insights by importance, and formats reports visually to align perfectly with your team's objectives.
                    </p>

                    <a class="inline-block px-6 py-3 rounded-lg border border-[rgb(53,40,255)] text-[#D7D7D7]hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors font-medium" href="#">
                        Learn More
                    </a>
                </div>
                <div class="flex-1 w-full relative">
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-3/4 h-3/4 bg-blue-500/20 blur-[80px] rounded-full"></div>
                    <div class="relative dark:border-gray-800 rounded-xl p-1 pt-6 shadow-2xl overflow-hidden">
                        <div class="">
                            <div class="space-y-4 relative">
                                <div class="flex justify-center relative">
                                    <img id="reporting-image" src="https://framerusercontent.com/images/oEFlkGZtdOMSevaNvE0TaVBjSUI.png?scale-down-to=2048&width=2144&height=2056" alt="Reporting Image" class="max-w-full h-auto transition-opacity duration-300" />
                                    <button id="reporting-prev-btn" class="absolute left-4 top-1/2 -translate-y-1/2 w-12 h-12 rounded-full backdrop-filter backdrop-blur-md bg-black/20 hover:bg-black/30 transition-all flex items-center justify-center cursor-pointer z-10 hidden">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="rgb(255, 255, 255)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="15 18 9 12 15 6"></polyline>
                                        </svg>
                                    </button>
                                    <button id="reporting-next-btn" class="absolute right-4 top-1/2 -translate-y-1/2 w-12 h-12 rounded-full backdrop-filter backdrop-blur-md bg-black/20 hover:bg-black/30 transition-all flex items-center justify-center cursor-pointer z-10">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="rgb(255, 255, 255)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Analysis Section -->
    <section id="analysis" class="py-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gray-100 dark:bg-surface-dark border border-gray-200 dark:border-gray-800 rounded-3xl p-8 md:p-12 lg:p-16 flex flex-col lg:flex-row gap-12 lg:gap-20 items-center overflow-hidden">
                <div class="flex-1 relative z-10">
                    <span class="text-lime-600 dark:text-lime-400 font-medium mb-4 block">Analysis</span>
                    <h2 class="text-3xl md:text-3xl font-bold text-[#D7D7D7] mb-6">
                        Unlock Insights. Understand Impact.
                    </h2>

                    <p class="text-[#D7D7D7] text-lg mb-6 leading-relaxed">
                        Generate detailed analytics on readership, share of voice, sentiment, earned media value, engagement metrics, and more.
                    </p>

                    <p class="text-[#D7D7D7] text-lg mb-8 leading-relaxed">
                        Our natural language prompts and AI data visualization engine makes it effortless to surface the key metrics that matter most to your team or clients.
                    </p>

                    <a class="inline-block px-6 py-3 rounded-lg border border-[rgb(53,40,255)] text-[#D7D7D7]hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors font-medium" href="#">
                        Learn More
                    </a>
                </div>
                <div class="flex-1 w-full relative">
                    <div class="absolute -inset-10 bg-gradient-to-tr from-blue-500/10 to-purple-500/10 rounded-full blur-3xl"></div>
                    <div class="relative rounded-3xl">
                        <div class="space-y-4 relative">
                            <div class="flex justify-center relative">
                                <img id="analysis-image" src="https://framerusercontent.com/images/U7Nv6cBvFakhRL3beiq5Ziwno0I.png?width=2564&height=2120" alt="Analysis Image" class="max-w-full h-auto transition-opacity duration-300" />
                                <button id="analysis-prev-btn" class="absolute -left-6 top-1/2 -translate-y-1/2 w-10 h-10 sm:w-11 sm:h-11 rounded-full bg-[#181c2f] border border-[#2c3250] text-[#F5F6FA] shadow-lg hover:bg-[#20263b] transition-all flex items-center justify-center cursor-pointer z-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="15 18 9 12 15 6"></polyline>
                                    </svg>
                                </button>
                                <button id="analysis-next-btn" class="absolute -right-6 top-1/2 -translate-y-1/2 w-10 h-10 sm:w-11 sm:h-11 rounded-full bg-[#181c2f] border border-[#2c3250] text-[#F5F6FA] shadow-lg hover:bg-[#20263b] transition-all flex items-center justify-center cursor-pointer z-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Database Section -->
    <section id="database" class="py-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gray-100 dark:bg-surface-dark border border-gray-200 dark:border-gray-800 rounded-3xl p-8 md:p-12 lg:p-16 flex flex-col lg:flex-row-reverse gap-12 lg:gap-20 items-center overflow-hidden">
                <div class="flex-1 relative z-10">
                    <span class="text-lime-600 dark:text-lime-400 font-medium mb-4 block">Database</span>
                    <h2 class="text-3xl md:text-3xl font-bold text-[#D7D7D7] mb-6">
                        Centralize Content. <br/> Search with Precision.
                    </h2>
                    <p class="text-[#D7D7D7] text-lg mb-6 leading-relaxed">
                        Access a dynamic, searchable archive of all your media, policy, and social content. Your custom media database automatically tags and organizes content by stakeholder, topic, or region - to surface exactly what you need, when you need it.
                    </p>

                    <a class="inline-block px-6 py-3 rounded-lg border border-[rgb(53,40,255)] text-[#D7D7D7]hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors font-medium" href="#">
                        Learn More
                    </a>
                </div>
                <div class="flex-1 w-full relative">
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-3/4 h-3/4 bg-blue-500/20 blur-[80px] rounded-full"></div>
                    <div class="relative rounded-xl overflow-hidden shadow-2xl">
                        <img
                            src="https://framerusercontent.com/images/DEIQaC2ZLch4dnMtJAhKd1mAjHI.png?scale-down-to=1024&width=2764&height=1880"
                            alt="Database preview"
                            class="w-full h-full object-cover"
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Section -->
    @include('partials.booking-section')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const categories = ['news', 'social', 'policy', 'broadcasts', 'podcasts', 'newsletters'];
            const images = {
                'news': 'https://framerusercontent.com/images/5XE6Em1yp20CQamkzQEcwb1DFzU.png?scale-down-to=1024',
                'social': 'https://framerusercontent.com/images/yXqiDPeFWT2cIwkbhKylcuVaX0.png?scale-down-to=1024',
                'policy': 'https://framerusercontent.com/images/Gq520mpoLjGbAXHWrH5Bpfs7s.png?scale-down-to=1024',
                'broadcasts': 'https://framerusercontent.com/images/A8C6UEwecpNQopvPRUDKWEqV08c.png?scale-down-to=1024',
                'podcasts': 'https://framerusercontent.com/images/47PaIaQJPmkfuEXD6AF8HtEwtw.png?scale-down-to=1024',
                'newsletters': 'https://framerusercontent.com/images/zLdXAsoqcFKwSzysvEogJVXWyVo.png?scale-down-to=1024'
            };

            let currentIndex = 0;
            const imageElement = document.getElementById('media-image');
            const nextButton = document.getElementById('media-next-btn');
            const prevButton = document.getElementById('media-prev-btn');
            const pills = document.querySelectorAll('.category-pill');

            function updateButtonVisibility(index) {
                const totalCategories = categories.length;

                // Ẩn/hiện nút previous
                if (index === 0) {
                    // Category đầu tiên: ẩn previous
                    prevButton.classList.add('hidden');
                } else {
                    // Các category khác: hiện previous
                    prevButton.classList.remove('hidden');
                }

                // Ẩn/hiện nút next
                if (index === totalCategories - 1) {
                    // Category cuối: ẩn next
                    nextButton.classList.add('hidden');
                } else {
                    // Các category khác: hiện next
                    nextButton.classList.remove('hidden');
                }
            }

            function updateActiveCategory(index) {
                // Remove active class from all pills
                pills.forEach(pill => {
                    pill.classList.remove('active');
                    pill.classList.add('bg-gray-100', 'dark:bg-gray-800', 'text-gray-600', 'dark:text-gray-400', 'border', 'border-gray-200', 'dark:border-gray-700');
                    pill.classList.remove('bg-gray-800', 'text-white');
                });

                // Add active class to current pill
                const currentPill = pills[index];
                currentPill.classList.add('active', 'bg-gray-800', 'text-white');
                currentPill.classList.remove('bg-gray-100', 'dark:bg-gray-800', 'text-gray-600', 'dark:text-gray-400', 'border', 'border-gray-200', 'dark:border-gray-700');

                // Update image
                const currentCategory = categories[index];
                imageElement.style.opacity = '0';
                setTimeout(() => {
                    imageElement.src = images[currentCategory];
                    imageElement.style.opacity = '1';
                }, 150);

                // Update button visibility
                updateButtonVisibility(index);
            }

            nextButton.addEventListener('click', function() {
                if (currentIndex < categories.length - 1) {
                    currentIndex++;
                    updateActiveCategory(currentIndex);
                }
            });

            prevButton.addEventListener('click', function() {
                if (currentIndex > 0) {
                    currentIndex--;
                    updateActiveCategory(currentIndex);
                }
            });

            // Allow clicking on pills directly
            pills.forEach((pill, index) => {
                pill.addEventListener('click', function() {
                    currentIndex = index;
                    updateActiveCategory(currentIndex);
                });
            });

            // Initialize button visibility
            updateButtonVisibility(0);
        });

        // Reporting Section Carousel
        document.addEventListener('DOMContentLoaded', function() {
            const reportingImages = [
                'https://framerusercontent.com/images/oEFlkGZtdOMSevaNvE0TaVBjSUI.png?scale-down-to=2048&width=2144&height=2056',
                'https://framerusercontent.com/images/oEFlkGZtdOMSevaNvE0TaVBjSUI.png?scale-down-to=2048&width=2144&height=2056',
                'https://framerusercontent.com/images/oEFlkGZtdOMSevaNvE0TaVBjSUI.png?scale-down-to=2048&width=2144&height=2056'
            ];

            let reportingCurrentIndex = 0;
            const reportingImageElement = document.getElementById('reporting-image');
            const reportingNextButton = document.getElementById('reporting-next-btn');
            const reportingPrevButton = document.getElementById('reporting-prev-btn');

            function updateReportingButtonVisibility(index) {
                const totalImages = reportingImages.length;

                // Ẩn/hiện nút previous
                if (index === 0) {
                    reportingPrevButton.classList.add('hidden');
                } else {
                    reportingPrevButton.classList.remove('hidden');
                }

                // Ẩn/hiện nút next
                if (index === totalImages - 1) {
                    reportingNextButton.classList.add('hidden');
                } else {
                    reportingNextButton.classList.remove('hidden');
                }
            }

            function updateReportingImage(index) {
                reportingImageElement.style.opacity = '0';
                setTimeout(() => {
                    reportingImageElement.src = reportingImages[index];
                    reportingImageElement.style.opacity = '1';
                }, 150);
                updateReportingButtonVisibility(index);
            }

            reportingNextButton.addEventListener('click', function() {
                if (reportingCurrentIndex < reportingImages.length - 1) {
                    reportingCurrentIndex++;
                    updateReportingImage(reportingCurrentIndex);
                }
            });

            reportingPrevButton.addEventListener('click', function() {
                if (reportingCurrentIndex > 0) {
                    reportingCurrentIndex--;
                    updateReportingImage(reportingCurrentIndex);
                }
            });

            // Initialize button visibility
            updateReportingButtonVisibility(0);
        });

        // Analysis Section Carousel
        document.addEventListener('DOMContentLoaded', function() {
            const analysisImages = [
                'https://framerusercontent.com/images/U7Nv6cBvFakhRL3beiq5Ziwno0I.png?width=2564&height=2120',
                'https://framerusercontent.com/images/U7Nv6cBvFakhRL3beiq5Ziwno0I.png?width=2564&height=2120',
                'https://framerusercontent.com/images/U7Nv6cBvFakhRL3beiq5Ziwno0I.png?width=2564&height=2120',
                'https://framerusercontent.com/images/U7Nv6cBvFakhRL3beiq5Ziwno0I.png?width=2564&height=2120',
                'https://framerusercontent.com/images/U7Nv6cBvFakhRL3beiq5Ziwno0I.png?width=2564&height=2120'
            ];

            let analysisCurrentIndex = 0;
            const analysisImageElement = document.getElementById('analysis-image');
            const analysisNextButton = document.getElementById('analysis-next-btn');
            const analysisPrevButton = document.getElementById('analysis-prev-btn');

            function updateAnalysisImage(index) {
                analysisImageElement.style.opacity = '0';
                setTimeout(() => {
                    analysisImageElement.src = analysisImages[index];
                    analysisImageElement.style.opacity = '1';
                }, 150);
            }

            // Luôn hiển thị cả 2 nút
            analysisPrevButton.classList.remove('hidden');
            analysisNextButton.classList.remove('hidden');

            analysisNextButton.addEventListener('click', function() {
                analysisCurrentIndex = (analysisCurrentIndex + 1) % analysisImages.length;
                updateAnalysisImage(analysisCurrentIndex);
            });

            analysisPrevButton.addEventListener('click', function() {
                analysisCurrentIndex = (analysisCurrentIndex - 1 + analysisImages.length) % analysisImages.length;
                updateAnalysisImage(analysisCurrentIndex);
            });
        });
    </script>

@endsection

