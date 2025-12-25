@extends('layouts.app')

@section('content')
    @include('partials.hero-section')
    @include('partials.trusted-by-section')

    <!-- Media Intelligence Section -->
    @include('partials.product-section', [
        'id' => 'mediaintelligence',
        'badge' => 'Media Intelligence',
        'title' => 'Automate Research. <br/> Accelerate Growth.',
        'description' => 'Monitor over 1 million sources across news, TV, radio, social media, podcasts, and policy - all in one platform.',
        'description2' => "Clipbook's agentic AI goes beyond simple keyword tracking to predictively surface the most relevant, actionable moments, delivering a precise, relevant, and context-rich briefing tailored to your team's needs.",
        'imageId' => 'media-image',
        'imageSrc' => 'https://framerusercontent.com/images/5XE6Em1yp20CQamkzQEcwb1DFzU.png?scale-down-to=1024',
        'imageAlt' => 'Main Image',
        'prevButtonId' => 'media-prev-btn',
        'nextButtonId' => 'media-next-btn',
        'showPills' => true,
        'pills' => [
            ['category' => 'news', 'icon' => 'article', 'label' => 'News'],
            ['category' => 'social', 'icon' => 'share', 'label' => 'Social'],
            ['category' => 'policy', 'icon' => 'gavel', 'label' => 'Policy'],
            ['category' => 'broadcasts', 'icon' => 'tv', 'label' => 'Broadcasts'],
            ['category' => 'podcasts', 'icon' => 'podcasts', 'label' => 'Podcasts'],
            ['category' => 'newsletters', 'icon' => 'email', 'label' => 'Newsletters'],
        ],
        'reverse' => false,
        'buttonStyle' => 'default'
    ])

    <!-- Reporting Section -->
    @include('partials.product-section', [
        'id' => 'reporting',
        'badge' => 'Reporting',
        'title' => 'Track Comprehensively. <br/> Get Customized Intelligence.',
        'description' => "Track any stakeholder, topic, or geography. Get tailored, noise-free reports built for your team's goals.",
        'description2' => 'Our platform automatically filters out irrelevant content, ranks insights by importance, and formats reports visually to align perfectly with your team\'s objectives.',
        'imageId' => 'reporting-image',
        'imageSrc' => 'https://framerusercontent.com/images/oEFlkGZtdOMSevaNvE0TaVBjSUI.png?scale-down-to=2048&width=2144&height=2056',
        'imageAlt' => 'Reporting Image',
        'prevButtonId' => 'reporting-prev-btn',
        'nextButtonId' => 'reporting-next-btn',
        'showPills' => false,
        'pills' => [],
        'reverse' => true,
        'buttonStyle' => 'default'
    ])

    <!-- Analysis Section -->
    @include('partials.product-section', [
        'id' => 'analysis',
        'badge' => 'Analysis',
        'title' => 'Unlock Insights. Understand Impact.',
        'description' => 'Generate detailed analytics on readership, share of voice, sentiment, earned media value, engagement metrics, and more.',
        'description2' => 'Our natural language prompts and AI data visualization engine makes it effortless to surface the key metrics that matter most to your team or clients.',
        'imageId' => 'analysis-image',
        'imageSrc' => 'https://framerusercontent.com/images/U7Nv6cBvFakhRL3beiq5Ziwno0I.png?width=2564&height=2120',
        'imageAlt' => 'Analysis Image',
        'prevButtonId' => 'analysis-prev-btn',
        'nextButtonId' => 'analysis-next-btn',
        'showPills' => false,
        'pills' => [],
        'reverse' => false,
        'buttonStyle' => 'dark'
    ])

    <!-- Database Section -->
    <section id="database" class="relative overflow-x-hidden" style="padding-top: 6rem; padding-bottom: 2rem;">
        <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="bg-gray-100 dark:bg-surface-dark border border-gray-200 dark:border-gray-800 rounded-3xl p-8 md:p-12 lg:p-16 flex flex-col lg:flex-row-reverse gap-12 lg:gap-20 items-center overflow-hidden">
                <div class="flex-1 relative z-10">
                    <span class="text-lime-600 dark:text-lime-400 font-medium mb-4 block" style="background-image: linear-gradient(505deg, rgb(121, 228, 255) 0%, rgb(193, 255, 86) 75.1784%, rgb(255, 195, 86) 100%); -webkit-background-clip: text; background-clip: text; color: transparent;">Database</span>
                    <h2 class="text-3xl md:text-3xl font-bold text-[#D7D7D7] mb-6">
                        Centralize Content. <br/> Search with Precision.
                    </h2>
                    <p class="text-[#D7D7D7] text-lg mb-6 leading-relaxed">
                        Access a dynamic, searchable archive of all your media, policy, and social content. Your custom
                        media database automatically tags and organizes content by stakeholder, topic, or region - to
                        surface exactly what you need, when you need it.
                    </p>

                    <a class="inline-block px-6 py-3 rounded-lg border border-[rgb(53,40,255)] text-[#D7D7D7] hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors font-medium"
                       href="#">
                        Learn More
                    </a>
                </div>
                <div class="flex-1 w-full relative">
                    <div
                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-3/4 h-3/4 bg-blue-500/20 blur-[80px] rounded-full"></div>
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

    @include('partials.customer-section')

    @php
        $testimonials = [
            [
                'company' => 'CAO',
                'company_subtitle' => 'Center for Audit Quality',
                'quote' => 'Clipbook has been an indispensable partner for CAQ! The insights we gather are unmatched in speed and accuracy.',
                'name' => 'Julia Germain',
                'title' => 'Senior Communications Manager'
            ],
            [
                'company' => 'CAO',
                'company_subtitle' => 'Center for Audit Quality',
                'quote' => 'Clipbook has been an indispensable partner for CAQ! The insights we gather are unmatched in speed and accuracy.',
                'name' => 'Julia Germain',
                'title' => 'Senior Communications Manager'
            ],
            [
                'company' => 'CAO',
                'company_subtitle' => 'Center for Audit Quality',
                'quote' => 'Clipbook has been an indispensable partner for CAQ! The insights we gather are unmatched in speed and accuracy.',
                'name' => 'Julia Germain',
                'title' => 'Senior Communications Manager'
            ],
            [
                'company' => 'CAO',
                'company_subtitle' => 'Center for Audit Quality',
                'quote' => 'Clipbook has been an indispensable partner for CAQ! The insights we gather are unmatched in speed and accuracy.',
                'name' => 'Julia Germain',
                'title' => 'Senior Communications Manager'
            ],
            [
                'company' => 'CAO',
                'company_subtitle' => 'Center for Audit Quality',
                'quote' => 'Clipbook has been an indispensable partner for CAQ! The insights we gather are unmatched in speed and accuracy.',
                'name' => 'Julia Germain',
                'title' => 'Senior Communications Manager'
            ],
            [
                'company' => 'American<br/>Prairie',
                'company_style' => 'font-black uppercase',
                'quote' => 'Clipbook has made monitoring press and mentions easier than ever. I look forward to seeing it in my inbox every morning!',
                'name' => 'Beth Saboe',
                'title' => 'Senior Public Relations Manager'
            ],
            [
                'company' => '<span class="font-serif italic">Frontwood</span> <span class="block text-xs not-italic font-sans text-gray-500 tracking-widest uppercase">Strategies</span>',
                'company_style' => '',
                'quote' => 'Our clients see enterprise-grade media insights from a boutique firm. We\'re able to punch above our weight because of Clipbook.',
                'name' => 'Neil Callahan',
                'title' => 'Founder'
            ],
        ];
    @endphp

    @include('partials.testimonials-section', ['testimonials' => $testimonials])

    @include('partials.booking-section')
@endsection

@push('scripts')
    <script src="{{ asset('js/home.js') }}"></script>
@endpush
