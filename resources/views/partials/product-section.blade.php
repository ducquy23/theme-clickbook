@props([
    'id' => '',
    'badge' => '',
    'title' => '',
    'description' => '',
    'description2' => null,
    'imageId' => '',
    'imageSrc' => '',
    'imageAlt' => '',
    'prevButtonId' => '',
    'nextButtonId' => '',
    'showPills' => false,
    'pills' => [],
    'reverse' => false,
    'buttonStyle' => 'default' // 'default' or 'dark'
])

<section id="{{ $id }}" class="relative overflow-x-hidden" style="padding-top: 6rem; padding-bottom: 2rem;">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div
            class="bg-gray-100 dark:bg-surface-dark border border-gray-200 dark:border-gray-800 rounded-3xl p-8 md:p-12 lg:p-16 flex flex-col {{ $reverse ? 'lg:flex-row-reverse' : 'lg:flex-row' }} gap-12 lg:gap-20 items-center overflow-hidden relative">
            <div class="flex-1 relative z-10">
                <span class="text-lime-600 dark:text-lime-400 font-medium mb-4 block" style="background-image: linear-gradient(505deg, rgb(121, 228, 255) 0%, rgb(193, 255, 86) 75.1784%, rgb(255, 195, 86) 100%); -webkit-background-clip: text; background-clip: text; color: transparent;">{{ $badge }}</span>
                <h2 class="text-2xl md:text-3xl font-bold text-[#D7D7D7] mb-6">
                    {!! $title !!}
                </h2>
                <p class="text-[#D7D7D7] text-lg mb-6 leading-relaxed">
                    {{ $description }}
                </p>
                @if($description2)
                    <p class="text-[#D7D7D7] text-lg mb-8 leading-relaxed">
                        {{ $description2 }}
                    </p>
                @endif

                <a class="inline-block px-6 py-3 rounded-lg border border-[rgb(53,40,255)] text-[#D7D7D7] hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors font-medium"
                   href="#">
                    Learn More
                </a>
            </div>
            <div class="flex-1 w-full relative">
                @if($id !== 'database')
                    <div
                        class="absolute -inset-10 bg-gradient-to-tr from-blue-500/10 to-purple-500/10 rounded-full blur-3xl"></div>
                @else
                    <div
                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-3/4 h-3/4 bg-blue-500/20 blur-[80px] rounded-full"></div>
                @endif
                <div class="relative {{ $id === 'analysis' ? 'rounded-3xl' : 'rounded-xl' }}">
                    <div class="space-y-4 relative">
                        <div class="flex justify-center relative">
                            <img id="{{ $imageId }}"
                                 src="{{ $imageSrc }}"
                                 alt="{{ $imageAlt }}" class="max-w-full h-auto transition-opacity duration-300"/>
                            @if($id !== 'database')
                                <button id="{{ $prevButtonId }}"
                                        class="absolute {{ $buttonStyle === 'dark' ? '-left-6' : 'left-4' }} top-1/2 -translate-y-1/2 {{ $buttonStyle === 'dark' ? 'w-10 h-10 sm:w-11 sm:h-11' : 'w-12 h-12' }} rounded-full {{ $buttonStyle === 'dark' ? 'bg-[#181c2f] border border-[#2c3250] text-[#F5F6FA] shadow-lg hover:bg-[#20263b]' : 'backdrop-filter backdrop-blur-md bg-black/20 hover:bg-black/30' }} transition-all flex items-center justify-center cursor-pointer z-10 {{ $id === 'mediaintelligence' ? 'hidden' : '' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="{{ $buttonStyle === 'dark' ? '20' : '24' }}" height="{{ $buttonStyle === 'dark' ? '20' : '24' }}" viewBox="0 0 24 24"
                                         fill="none" stroke="{{ $buttonStyle === 'dark' ? 'currentColor' : 'rgb(255, 255, 255)' }}" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="15 18 9 12 15 6"></polyline>
                                    </svg>
                                </button>
                                <button id="{{ $nextButtonId }}"
                                        class="absolute {{ $buttonStyle === 'dark' ? '-right-6' : 'right-4' }} top-1/2 -translate-y-1/2 {{ $buttonStyle === 'dark' ? 'w-10 h-10 sm:w-11 sm:h-11' : 'w-12 h-12' }} rounded-full {{ $buttonStyle === 'dark' ? 'bg-[#181c2f] border border-[#2c3250] text-[#F5F6FA] shadow-lg hover:bg-[#20263b]' : 'backdrop-filter backdrop-blur-md bg-black/20 hover:bg-black/30' }} transition-all flex items-center justify-center cursor-pointer z-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="{{ $buttonStyle === 'dark' ? '20' : '24' }}" height="{{ $buttonStyle === 'dark' ? '20' : '24' }}" viewBox="0 0 24 24"
                                         fill="none" stroke="{{ $buttonStyle === 'dark' ? 'currentColor' : 'rgb(255, 255, 255)' }}" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </button>
                            @endif
                        </div>
                    </div>
                    @if($showPills && !empty($pills))
                        <div
                            class="mt-6 flex gap-2 overflow-x-auto p-2 scrollbar-hide bg-[rgb(34,36,52)] rounded-[21px] opacity-100">
                            @foreach($pills as $index => $pill)
                                <span data-category="{{ $pill['category'] }}"
                                      class="category-pill {{ $index === 0 ? 'active' : '' }} px-3 py-1 rounded-full cursor-pointer {{ $index === 0 ? 'bg-gray-800 text-white' : 'bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-400 border border-gray-200 dark:border-gray-700' }} text-xs font-medium flex items-center gap-1">
                                    <span class="material-icons text-[10px]">{{ $pill['icon'] }}</span> {{ $pill['label'] }}
                                </span>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

