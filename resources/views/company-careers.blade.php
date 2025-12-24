@extends('layouts.app')

@section('content')
    <div class="relative pt-32 pb-20 lg:pt-40 lg:pb-28 overflow-hidden">
        <div class="absolute inset-0 dot-pattern opacity-20 pointer-events-none"></div>
        <div class="absolute top-0 left-0 w-full h-full bg-hero-gradient opacity-60 pointer-events-none"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl">
                <span class="text-sm font-semibold text-lime-400 tracking-wide uppercase mb-4 block">Company &amp; Careers</span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight leading-tight mb-8 text-gray-900 dark:text-white">
                    Clipbook is the lens through which leaders
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-400 to-lime-400">
                    listen to - and engage
                </span>
                    - the world.
                </h1>
                <div class="grid grid-cols-3 gap-8 mt-12 max-w-lg border-t border-gray-200 dark:border-gray-800 pt-8">
                    <div>
                        <p class="text-xs uppercase tracking-wider text-gray-500 dark:text-gray-400 mb-1">Employees</p>
                        <p class="text-3xl font-light text-gray-900 dark:text-white">30</p>
                    </div>
                    <div>
                        <p class="text-xs uppercase tracking-wider text-gray-500 dark:text-gray-400 mb-1">Founded</p>
                        <p class="text-3xl font-light text-gray-900 dark:text-white">2023</p>
                    </div>
                    <div>
                        <p class="text-xs uppercase tracking-wider text-gray-500 dark:text-gray-400 mb-1">Clients</p>
                        <p class="text-3xl font-light text-lime-400">250+</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="py-20 bg-white dark:bg-background-dark border-t border-transparent dark:border-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <div class="lg:col-span-1">
                    <h2 class="text-sm font-semibold text-lime-400 uppercase tracking-wide">Our Vision</h2>
                </div>
                <div class="lg:col-span-3">
                    <p class="text-xl md:text-2xl font-medium leading-relaxed text-gray-700 dark:text-gray-200">
                        Clipbook was born out of the frustration many communications and public affairs teams face: drowning in data without clear, actionable insights.
                        Recognizing the potential of AI to transform
                        <span class="text-gray-900 dark:text-white font-bold">research and analysis</span>,
                        the founders set out to create a platform tailored to these needs. Today, Clipbook is the lens through which leaders listen to - and engage - the world.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-gray-50 dark:bg-background-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900 dark:text-white">Our values</h2>
                <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                    We live and breathe these values to shape how we show up, build product, and push boundaries.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-8 rounded-lg border border-gray-200 dark:border-gray-800 bg-white dark:bg-surface-dark/50 hover:border-gray-300 dark:hover:border-gray-700 transition-colors">
                    <div class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 dark:bg-gray-800 mb-6 text-gray-900 dark:text-white">
                        <span class="material-icons text-xl">bolt</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white">Hunger &amp; Hustle</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                        We execute tasks quickly and effectively and drive outcome and action - with innovation, energy, and resourcefulness;
                        we heavily bias ourselves towards output and outcome.
                    </p>
                </div>
                <div class="p-8 rounded-lg border border-gray-200 dark:border-gray-800 bg-white dark:bg-surface-dark/50 hover:border-gray-300 dark:hover:border-gray-700 transition-colors">
                    <div class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 dark:bg-gray-800 mb-6 text-gray-900 dark:text-white">
                        <span class="material-icons text-xl">favorite_border</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white">Customer Centricity</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                        We have a keen, extensive understanding of our clients (current and future), their ways of working, their org dynamics, and their psychology;
                        we take their success into our hands.
                    </p>
                </div>
                <div class="p-8 rounded-lg border border-gray-200 dark:border-gray-800 bg-white dark:bg-surface-dark/50 hover:border-gray-300 dark:hover:border-gray-700 transition-colors">
                    <div class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 dark:bg-gray-800 mb-6 text-gray-900 dark:text-white">
                        <span class="material-icons text-xl">groups</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white">One Team</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                        We are one team with shared goals and shared objectives; we commit to our team-wide goals.
                    </p>
                </div>
                <div class="p-8 rounded-lg border border-gray-200 dark:border-gray-800 bg-white dark:bg-surface-dark/50 hover:border-gray-300 dark:hover:border-gray-700 transition-colors">
                    <div class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 dark:bg-gray-800 mb-6 text-gray-900 dark:text-white">
                        <span class="material-icons text-xl">trending_up</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white">Ownership &amp; Growth</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                        We believe in the ability of a talented, smart person being able to rise to the occasion and perform at exceptionally high levels;
                        we push each other through empathy and honesty to perform our best; we practice open feedback and performance management.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white dark:bg-background-dark">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-2 text-gray-900 dark:text-white">Open roles</h2>
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    Remote and in-person in San Francisco, Washington DC, or New York
                </p>
                <div class="flex flex-wrap justify-center gap-2 mt-8">
                    <button class="px-4 py-1.5 rounded-full bg-gray-800 text-white text-xs font-medium">All</button>
                    <button class="px-4 py-1.5 rounded-full border border-gray-300 dark:border-gray-700 text-gray-600 dark:text-gray-400 text-xs font-medium hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                        Product and Engineering
                    </button>
                    <button class="px-4 py-1.5 rounded-full border border-gray-300 dark:border-gray-700 text-gray-600 dark:text-gray-400 text-xs font-medium hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                        GTM and Marketing
                    </button>
                    <button class="px-4 py-1.5 rounded-full border border-gray-300 dark:border-gray-700 text-gray-600 dark:text-gray-400 text-xs font-medium hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                        Client Success
                    </button>
                    <button class="px-4 py-1.5 rounded-full border border-gray-300 dark:border-gray-700 text-gray-600 dark:text-gray-400 text-xs font-medium hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                        Operations
                    </button>
                    <button class="px-4 py-1.5 rounded-full border border-gray-300 dark:border-gray-700 text-gray-600 dark:text-gray-400 text-xs font-medium hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                        Sales
                    </button>
                </div>
            </div>
            <div class="space-y-3">
                <a class="group block p-4 border border-gray-200 dark:border-gray-800 rounded-lg hover:border-gray-400 dark:hover:border-gray-600 transition-colors flex items-center justify-between" href="#">
                    <span class="font-bold text-gray-900 dark:text-white text-sm">Founding Full-Stack Software Engineer</span>
                    <div class="flex items-center space-x-4">
                        <span class="text-xs text-gray-500 dark:text-gray-400">San Francisco</span>
                        <span class="material-icons text-gray-400 text-sm group-hover:text-white transition-colors">chevron_right</span>
                    </div>
                </a>
                <a class="group block p-4 border border-gray-200 dark:border-gray-800 rounded-lg hover:border-gray-400 dark:hover:border-gray-600 transition-colors flex items-center justify-between" href="#">
                    <span class="font-bold text-gray-900 dark:text-white text-sm">Founding Enterprise GTM</span>
                    <div class="flex items-center space-x-4">
                        <span class="text-xs text-gray-500 dark:text-gray-400">SF/NYC/DC</span>
                        <span class="material-icons text-gray-400 text-sm group-hover:text-white transition-colors">chevron_right</span>
                    </div>
                </a>
                <a class="group block p-4 border border-gray-200 dark:border-gray-800 rounded-lg hover:border-gray-400 dark:hover:border-gray-600 transition-colors flex items-center justify-between" href="#">
                    <span class="font-bold text-gray-900 dark:text-white text-sm">Founding Backend Engineer - AI &amp; Data</span>
                    <div class="flex items-center space-x-4">
                        <span class="text-xs text-gray-500 dark:text-gray-400">San Francisco</span>
                        <span class="material-icons text-gray-400 text-sm group-hover:text-white transition-colors">chevron_right</span>
                    </div>
                </a>
                <a class="group block p-4 border border-gray-200 dark:border-gray-800 rounded-lg hover:border-gray-400 dark:hover:border-gray-600 transition-colors flex items-center justify-between" href="#">
                    <span class="font-bold text-gray-900 dark:text-white text-sm">Chief of Staff to the CEO</span>
                    <div class="flex items-center space-x-4">
                        <span class="text-xs text-gray-500 dark:text-gray-400">SF</span>
                        <span class="material-icons text-gray-400 text-sm group-hover:text-white transition-colors">chevron_right</span>
                    </div>
                </a>
                <a class="group block p-4 border border-gray-200 dark:border-gray-800 rounded-lg hover:border-gray-400 dark:hover:border-gray-600 transition-colors flex items-center justify-between" href="#">
                    <span class="font-bold text-gray-900 dark:text-white text-sm">Operations Associate / Manager</span>
                    <div class="flex items-center space-x-4">
                        <span class="text-xs text-gray-500 dark:text-gray-400">SF</span>
                        <span class="material-icons text-gray-400 text-sm group-hover:text-white transition-colors">chevron_right</span>
                    </div>
                </a>
                <a class="group block p-4 border border-gray-200 dark:border-gray-800 rounded-lg hover:border-gray-400 dark:hover:border-gray-600 transition-colors flex items-center justify-between" href="#">
                    <span class="font-bold text-gray-900 dark:text-white text-sm">Marketing Lead</span>
                    <div class="flex items-center space-x-4">
                        <span class="text-xs text-gray-500 dark:text-gray-400">DC/NYC</span>
                        <span class="material-icons text-gray-400 text-sm group-hover:text-white transition-colors">chevron_right</span>
                    </div>
                </a>
                <a class="group block p-4 border border-gray-200 dark:border-gray-800 rounded-lg hover:border-gray-400 dark:hover:border-gray-600 transition-colors flex items-center justify-between" href="#">
                    <span class="font-bold text-gray-900 dark:text-white text-sm">Enterprise Intelligence Associate</span>
                    <div class="flex items-center space-x-4">
                        <span class="text-xs text-gray-500 dark:text-gray-400">US</span>
                        <span class="material-icons text-gray-400 text-sm group-hover:text-white transition-colors">chevron_right</span>
                    </div>
                </a>
                <a class="group block p-4 border border-gray-200 dark:border-gray-800 rounded-lg hover:border-gray-400 dark:hover:border-gray-600 transition-colors flex items-center justify-between" href="#">
                    <span class="font-bold text-gray-900 dark:text-white text-sm">Founding Enterprise Client Services Manager</span>
                    <div class="flex items-center space-x-4">
                        <span class="text-xs text-gray-500 dark:text-gray-400">SF/NYC</span>
                        <span class="material-icons text-gray-400 text-sm group-hover:text-white transition-colors">chevron_right</span>
                    </div>
                </a>
                <a class="group block p-4 border border-gray-200 dark:border-gray-800 rounded-lg hover:border-gray-400 dark:hover:border-gray-600 transition-colors flex items-center justify-between" href="#">
                    <span class="font-bold text-gray-900 dark:text-white text-sm">Account Executive</span>
                    <div class="flex items-center space-x-4">
                        <span class="text-xs text-gray-500 dark:text-gray-400">DC/NYC</span>
                        <span class="material-icons text-gray-400 text-sm group-hover:text-white transition-colors">chevron_right</span>
                    </div>
                </a>
                <a class="group block p-4 border border-gray-200 dark:border-gray-800 rounded-lg hover:border-gray-400 dark:hover:border-gray-600 transition-colors flex items-center justify-between" href="#">
                    <span class="font-bold text-gray-900 dark:text-white text-sm">Product Manager / Product Lead</span>
                    <div class="flex items-center space-x-4">
                        <span class="text-xs text-gray-500 dark:text-gray-400">San Francisco</span>
                        <span class="material-icons text-gray-400 text-sm group-hover:text-white transition-colors">chevron_right</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="py-24 bg-gray-50 dark:bg-background-dark border-t border-gray-200 dark:border-gray-900">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold mb-12 text-center text-gray-900 dark:text-white">Articles and press releases</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white dark:bg-surface-dark rounded-xl overflow-hidden border border-gray-200 dark:border-gray-800 hover:border-gray-300 dark:hover:border-gray-700 transition-colors">
                    <div class="h-48 overflow-hidden relative">
                        <img
                            alt="Smiling professional man in white shirt"
                            class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBXgPzjgZgcwdnp4HmMFpC2qa_lpmybesVB9lpJEtl8InUvvv0Nf75JALU2Qpc2Ef9nTrD14M2aQjEddYd-bkhIH1zYsHUDQ-TGB3c2TUgLLuG84M7PBMbkzNFLImaOlRH0q9OI958DFHSEFM9VWy_jwD0DpLdvDt3_rjN-kX-OFWaUZR3UC1ajPxWviD32Yj48id5FeeTQohz0q2XtYDznZPcfvUUPs0cXOn4elSyfZoc3WZ-ZEwPvJOhZl2IF1BcnXhXkVjbzIMw"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-sm font-semibold mb-2 text-gray-900 dark:text-white">
                            How AI PR startup Clipbook won Mark Cuban's investment from a cold email
                        </h3>
                        <div class="mt-6">
                            <a class="inline-block w-full text-center px-4 py-2 border border-gray-300 dark:border-gray-700 rounded text-xs font-medium text-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors" href="#">
                                Read Article
                            </a>
                        </div>
                    </div>
                </div>
                <div class="bg-white dark:bg-surface-dark rounded-xl overflow-hidden border border-gray-200 dark:border-gray-800 hover:border-gray-300 dark:hover:border-gray-700 transition-colors">
                    <div class="h-48 bg-gray-100 dark:bg-gray-200 flex items-center justify-center relative">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-black text-white flex items-center justify-center font-bold text-xl">AP</div>
                            <div class="flex flex-col">
                                <span class="text-black font-bold text-sm tracking-tight uppercase">ASSOCIATED PRESS</span>
                                <div class="h-0.5 w-full bg-black mt-1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-sm font-semibold mb-2 text-gray-900 dark:text-white">
                            Clipbook Raises $3.3 Million Seed Round to Build the Leading Vertical AI Platform for Communications
                        </h3>
                        <div class="mt-6">
                            <a class="inline-block w-full text-center px-4 py-2 border border-gray-300 dark:border-gray-700 rounded text-xs font-medium text-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors" href="#">
                                Read Article
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.book-time')
@endsection


