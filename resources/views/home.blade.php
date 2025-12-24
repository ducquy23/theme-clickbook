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
                    <div class="relative bg-white dark:bg-[#0f111a] border border-gray-200 dark:border-gray-800 rounded-xl p-6 shadow-2xl">
                        <div class="space-y-4 relative">
                            <div class="flex justify-center relative">
                                <img id="media-image" src="https://framerusercontent.com/images/5XE6Em1yp20CQamkzQEcwb1DFzU.png?scale-down-to=1024" alt="Main Image" class="max-w-full h-auto transition-opacity duration-300" />
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
                    <div class="relative bg-white dark:bg-[#0f111a] border border-gray-200 dark:border-gray-800 rounded-xl p-1 pt-6 shadow-2xl overflow-hidden">
                        <div class="absolute top-0 left-10 right-10 h-2 bg-gray-200 dark:bg-gray-700 rounded-t-lg opacity-50"></div>
                        <div class="absolute top-2 left-6 right-6 h-2 bg-gray-300 dark:bg-gray-600 rounded-t-lg opacity-70"></div>
                        <div class="bg-white dark:bg-[#151725] rounded-t-lg p-6 min-h-[400px]">
                            <div class="flex items-center gap-2 mb-4 text-gray-500 dark:text-gray-400 text-sm">
                                <span>Sent from Clipbook</span>
                            </div>
                            <div class="flex flex-wrap gap-2 mb-6">
                                <span class="text-gray-400 text-sm py-1">Sent to:</span>
                                <div class="flex items-center gap-1 bg-gray-100 dark:bg-gray-800 px-2 py-1 rounded-full border border-gray-200 dark:border-gray-700">
                                    <img alt="User" class="w-5 h-5 rounded-full" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAKQyL5Q3skVGmRUgRce9tMVM48EZgQ9f6HAIv-gq5wz5ne0-PiF6rbNJi3J9V5dmZ9eV7o9K3QaS1hMfDTd-Oe5XFQb-c4u9SoXWOCk2zmgr8OiigoxZuYZfDkrXDcIUDJwuRDt2uWBhsGZ6Dn277af4uklfoQzp25zyvPe9YnYF1upS7cjHCYhMSXauWvLhxkjdo8vmKN4LVL8n6mSWJuch3dXC1VsOYLnbz8rAv002TwKL3Wxo1RFgpOy5iyV318QKYDhyV0tx0"/>
                                    <span class="text-xs text-gray-700 dark:text-gray-200 font-medium">Kara CEO</span>
                                </div>
                                <div class="flex items-center gap-1 bg-gray-100 dark:bg-gray-800 px-2 py-1 rounded-full border border-gray-200 dark:border-gray-700">
                                    <img alt="User" class="w-5 h-5 rounded-full" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBnv-SxDWmlRY6kndOqr_h67IHPquUzeW9tprfT1MWMIDdOiGD2oo_O4Z-hUkjC7h6I2KRNyDwdQgPichKrXG8UlEc-YaKhCQ1VZgq2JKYQ9KoFwEGi5blDCzfgyhhIhPAf7c-Oewlf8xa3mlsRnsSTik5cACuMJ895BA5Ebv7QerAucRbduB_y1UVwtUn1F07yGfwrG2E7AHJYMAEqVrGP2gFHvJaF8Jn_1kQnNqHwhpkod57xVdS37e6_5ovRB3Ez4PVPeLVc4XY"/>
                                    <span class="text-xs text-gray-700 dark:text-gray-200 font-medium">Amy VP</span>
                                </div>
                                <div class="flex items-center gap-1 bg-gray-100 dark:bg-gray-800 px-2 py-1 rounded-full border border-gray-200 dark:border-gray-700">
                                    <img alt="User" class="w-5 h-5 rounded-full" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDPX3XnEAhu9VJLWSilTzz86kEAHHAJLMs2Br-sAo__IbW9ATsAVdc8er-aPgIyWIsLfvZHvPE696CQCAMVQahnT1Lpr_ukDE94c2SrJakjZZNt9KREDyXPfCdPlZm3AyhHGAtQHgMo-aivtwGesssON5y_SMQjAQd2MR0JnE4i5QxDhv1yIjMTf8Y7-SDfiskD_iYEbCea6EQJ3M083w6KfjE4o3qcWsJp-uvxw8ITvYUy44alrlOJIYHdrMo2azzJ1YYqMnc6laM"/>
                                    <span class="text-xs text-gray-700 dark:text-gray-200 font-medium">Devin COO</span>
                                </div>
                            </div>
                            <hr class="border-gray-200 dark:border-gray-700 mb-6"/>
                            <div class="flex items-center gap-2 mb-4">
                                <div class="w-8 h-8 bg-blue-600 text-white rounded flex items-center justify-center font-bold text-sm">C</div>
                                <span class="font-bold text-lg text-gray-900 dark:text-white">Clipbook</span>
                            </div>
                            <div class="bg-gray-100 dark:bg-gray-800/50 rounded p-3 mb-6 flex justify-between items-center">
                                <span class="text-xs font-bold uppercase tracking-wider text-gray-700 dark:text-gray-300">Today's Report</span>
                                <span class="text-xs text-gray-500">7:22 AM</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Good Morning,</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mb-6">Here is your intelligence report for today</p>
                            <div class="bg-gray-50 dark:bg-[#1e2030] rounded-lg p-4 border border-gray-200 dark:border-gray-700">
                                <div class="flex justify-between items-center mb-3">
                                    <span class="font-serif font-bold text-gray-800 dark:text-gray-200 text-xs">Liberty Tribune</span>
                                    <span class="text-[10px] text-gray-400">Monday, Oct 16</span>
                                </div>
                                <h4 class="text-sm font-semibold text-gray-900 dark:text-white mb-2">Venture Capital Surges as AI Startups Secure Record Funding</h4>
                                <p class="text-xs text-gray-500 dark:text-gray-400 leading-snug">Investors poured over $30 billion into AI startups in the first quarter of 2025 alone...</p>
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
                    <div class="relative bg-white dark:bg-[#0f111a] border border-gray-200 dark:border-gray-800 rounded-xl p-6 shadow-2xl">
                        <div class="flex items-center justify-between mb-6">
                            <div class="w-6 h-6 bg-blue-600 rounded text-white flex items-center justify-center font-bold text-xs">C</div>
                            <div class="flex gap-2">
                                <button class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-800 flex items-center justify-center text-gray-500 hover:text-gray-900 dark:hover:text-white"><span class="material-icons text-sm">chevron_left</span></button>
                                <button class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-800 flex items-center justify-center text-gray-500 hover:text-gray-900 dark:hover:text-white"><span class="material-icons text-sm">chevron_right</span></button>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <div class="bg-gray-50 dark:bg-[#151725] rounded p-4 border border-gray-100 dark:border-gray-800">
                                <div class="flex justify-between text-[10px] text-gray-400 mb-4 uppercase tracking-wider font-semibold">
                                    <span>Readership</span>
                                    <span>Past 30D</span>
                                </div>
                                <div class="h-24 flex items-end justify-between gap-1 px-1">
                                    <div class="w-1 bg-indigo-500 h-1/3 rounded-t-sm"></div>
                                    <div class="w-1 bg-indigo-500 h-1/2 rounded-t-sm"></div>
                                    <div class="w-1 bg-indigo-500 h-2/5 rounded-t-sm"></div>
                                    <div class="w-1 bg-indigo-500 h-3/4 rounded-t-sm"></div>
                                    <div class="w-1 bg-indigo-500 h-1/4 rounded-t-sm"></div>
                                    <div class="w-1 bg-indigo-500 h-full rounded-t-sm"></div>
                                    <div class="w-1 bg-indigo-500 h-2/3 rounded-t-sm"></div>
                                    <div class="w-1 bg-indigo-500 h-1/2 rounded-t-sm"></div>
                                    <div class="w-1 bg-indigo-500 h-1/3 rounded-t-sm"></div>
                                    <div class="w-1 bg-indigo-500 h-2/5 rounded-t-sm"></div>
                                </div>
                            </div>
                            <div class="bg-gray-50 dark:bg-[#151725] rounded p-4 border border-gray-100 dark:border-gray-800 relative">
                                <div class="flex justify-between text-[10px] text-gray-400 mb-4 uppercase tracking-wider font-semibold">
                                    <span>Breakdown</span>
                                    <span>4 Sources</span>
                                </div>
                                <div class="flex items-center justify-center h-24">
                                    <div class="w-20 h-20 rounded-full border-[6px] border-indigo-600 border-l-blue-800 border-b-blue-900 transform rotate-45 flex items-center justify-center relative">
                                        <div class="absolute inset-0 flex flex-col items-center justify-center transform -rotate-45">
                                            <span class="text-sm font-bold text-gray-900 dark:text-white leading-none">55%</span>
                                            <span class="text-[8px] text-gray-500">Print</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div class="flex gap-4 text-[10px] font-bold text-gray-400 uppercase tracking-wide border-b border-gray-100 dark:border-gray-800 pb-2 mb-2">
                                <span class="text-white bg-gray-800 px-2 py-0.5 rounded">Positive Sentiment</span>
                                <span>Neutral</span>
                                <span>Negative</span>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-24 bg-gray-900 rounded px-2 py-1.5 flex items-center gap-2">
                                    <div class="w-2 h-2 rounded-full bg-blue-500"></div>
                                    <span class="text-xs text-white font-medium">83% Positive</span>
                                </div>
                                <div class="flex-1">
                                    <h5 class="text-xs font-bold text-gray-900 dark:text-white">The Future of AI with Mark Cuban</h5>
                                    <p class="text-[10px] text-gray-500">354k impressions • 6 articles</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="w-24 bg-gray-900 rounded px-2 py-1.5 flex items-center gap-2">
                                    <div class="w-2 h-2 rounded-full bg-blue-500"></div>
                                    <span class="text-xs text-white font-medium">77% Positive</span>
                                </div>
                                <div class="flex-1">
                                    <h5 class="text-xs font-bold text-gray-900 dark:text-white">Recent comments on NBA</h5>
                                    <p class="text-[10px] text-gray-500">120k impressions • 2 articles</p>
                                </div>
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
                    <div class="relative bg-white dark:bg-[#0f111a] border border-gray-200 dark:border-gray-800 rounded-xl p-1 pt-6 shadow-2xl overflow-hidden">
                        <div class="absolute top-0 left-10 right-10 h-2 bg-gray-200 dark:bg-gray-700 rounded-t-lg opacity-50"></div>
                        <div class="absolute top-2 left-6 right-6 h-2 bg-gray-300 dark:bg-gray-600 rounded-t-lg opacity-70"></div>
                        <div class="bg-white dark:bg-[#151725] rounded-t-lg p-6 min-h-[400px]">
                            <div class="flex items-center gap-2 mb-4 text-gray-500 dark:text-gray-400 text-sm">
                                <span>Sent from Clipbook</span>
                            </div>
                            <div class="flex flex-wrap gap-2 mb-6">
                                <span class="text-gray-400 text-sm py-1">Sent to:</span>
                                <div class="flex items-center gap-1 bg-gray-100 dark:bg-gray-800 px-2 py-1 rounded-full border border-gray-200 dark:border-gray-700">
                                    <img alt="User" class="w-5 h-5 rounded-full" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAKQyL5Q3skVGmRUgRce9tMVM48EZgQ9f6HAIv-gq5wz5ne0-PiF6rbNJi3J9V5dmZ9eV7o9K3QaS1hMfDTd-Oe5XFQb-c4u9SoXWOCk2zmgr8OiigoxZuYZfDkrXDcIUDJwuRDt2uWBhsGZ6Dn277af4uklfoQzp25zyvPe9YnYF1upS7cjHCYhMSXauWvLhxkjdo8vmKN4LVL8n6mSWJuch3dXC1VsOYLnbz8rAv002TwKL3Wxo1RFgpOy5iyV318QKYDhyV0tx0"/>
                                    <span class="text-xs text-gray-700 dark:text-gray-200 font-medium">Kara CEO</span>
                                </div>
                                <div class="flex items-center gap-1 bg-gray-100 dark:bg-gray-800 px-2 py-1 rounded-full border border-gray-200 dark:border-gray-700">
                                    <img alt="User" class="w-5 h-5 rounded-full" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBnv-SxDWmlRY6kndOqr_h67IHPquUzeW9tprfT1MWMIDdOiGD2oo_O4Z-hUkjC7h6I2KRNyDwdQgPichKrXG8UlEc-YaKhCQ1VZgq2JKYQ9KoFwEGi5blDCzfgyhhIhPAf7c-Oewlf8xa3mlsRnsSTik5cACuMJ895BA5Ebv7QerAucRbduB_y1UVwtUn1F07yGfwrG2E7AHJYMAEqVrGP2gFHvJaF8Jn_1kQnNqHwhpkod57xVdS37e6_5ovRB3Ez4PVPeLVc4XY"/>
                                    <span class="text-xs text-gray-700 dark:text-gray-200 font-medium">Amy VP</span>
                                </div>
                                <div class="flex items-center gap-1 bg-gray-100 dark:bg-gray-800 px-2 py-1 rounded-full border border-gray-200 dark:border-gray-700">
                                    <img alt="User" class="w-5 h-5 rounded-full" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDPX3XnEAhu9VJLWSilTzz86kEAHHAJLMs2Br-sAo__IbW9ATsAVdc8er-aPgIyWIsLfvZHvPE696CQCAMVQahnT1Lpr_ukDE94c2SrJakjZZNt9KREDyXPfCdPlZm3AyhHGAtQHgMo-aivtwGesssON5y_SMQjAQd2MR0JnE4i5QxDhv1yIjMTf8Y7-SDfiskD_iYEbCea6EQJ3M083w6KfjE4o3qcWsJp-uvxw8ITvYUy44alrlOJIYHdrMo2azzJ1YYqMnc6laM"/>
                                    <span class="text-xs text-gray-700 dark:text-gray-200 font-medium">Devin COO</span>
                                </div>
                            </div>
                            <hr class="border-gray-200 dark:border-gray-700 mb-6"/>
                            <div class="flex items-center gap-2 mb-4">
                                <div class="w-8 h-8 bg-blue-600 text-white rounded flex items-center justify-center font-bold text-sm">C</div>
                                <span class="font-bold text-lg text-gray-900 dark:text-white">Clipbook</span>
                            </div>
                            <div class="bg-gray-100 dark:bg-gray-800/50 rounded p-3 mb-6 flex justify-between items-center">
                                <span class="text-xs font-bold uppercase tracking-wider text-gray-700 dark:text-gray-300">Today's Report</span>
                                <span class="text-xs text-gray-500">7:22 AM</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Good Morning,</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mb-6">Here is your intelligence report for today</p>
                            <div class="bg-gray-50 dark:bg-[#1e2030] rounded-lg p-4 border border-gray-200 dark:border-gray-700">
                                <div class="flex justify-between items-center mb-3">
                                    <span class="font-serif font-bold text-gray-800 dark:text-gray-200 text-xs">Liberty Tribune</span>
                                    <span class="text-[10px] text-gray-400">Monday, Oct 16</span>
                                </div>
                                <h4 class="text-sm font-semibold text-gray-900 dark:text-white mb-2">Venture Capital Surges as AI Startups Secure Record Funding</h4>
                                <p class="text-xs text-gray-500 dark:text-gray-400 leading-snug">Investors poured over $30 billion into AI startups in the first quarter of 2025 alone...</p>
                            </div>
                        </div>
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
            const pills = document.querySelectorAll('.category-pill');
            
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
            }
            
            nextButton.addEventListener('click', function() {
                currentIndex = (currentIndex + 1) % categories.length;
                updateActiveCategory(currentIndex);
            });
            
            // Allow clicking on pills directly
            pills.forEach((pill, index) => {
                pill.addEventListener('click', function() {
                    currentIndex = index;
                    updateActiveCategory(currentIndex);
                });
            });
        });
    </script>

@endsection

