<!-- What our customers are saying Section -->
<section class="py-24 bg-background-dark border-t border-gray-900 overflow-x-hidden">
    <div class="w-full px-4 sm:px-8 lg:px-16">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-white mb-4">What our customers are saying</h2>
            <p class="text-gray-400">The world's leading organizations rely on Clipbook as their team's intelligence
                foundation.</p>
        </div>
        <div id="testimonial-grid" class="grid grid-cols-1 md:grid-cols-3 xl:grid-cols-5 gap-8">
            @foreach($testimonials ?? [] as $testimonial)
                <div
                    class="testimonial-card bg-surface-dark border border-gray-800 p-8 rounded-2xl flex flex-col justify-between hover:border-gray-600 transition-colors">
                    <div>
                        <div class="h-8 mb-6 text-gray-200 text-lg {!! isset($testimonial['company_style']) ? $testimonial['company_style'] : 'font-bold tracking-widest uppercase' !!}">
                            {!! $testimonial['company'] ?? 'CAO' !!}
                            @if(isset($testimonial['company_subtitle']))
                                <span class="text-xs normal-case text-gray-500 block">{{ $testimonial['company_subtitle'] }}</span>
                            @endif
                        </div>
                        <p class="text-gray-300 italic mb-6">"{{ $testimonial['quote'] ?? '' }}"</p>
                    </div>
                    <div>
                        <div class="font-semibold text-white text-sm">{{ $testimonial['name'] ?? '' }}</div>
                        <div class="text-gray-500 text-xs">{{ $testimonial['title'] ?? '' }}</div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="flex justify-center gap-4 mt-8">
            <button
                id="testimonial-prev"
                class="w-10 h-10 rounded-full border border-gray-700 flex items-center justify-center text-gray-400 hover:text-white hover:border-gray-500 bg-black/40 backdrop-blur">
                <span class="material-icons text-sm">arrow_back</span>
            </button>
            <button
                id="testimonial-next"
                class="w-10 h-10 rounded-full border border-gray-700 flex items-center justify-center text-gray-400 hover:text-white hover:border-gray-500 bg-black/40 backdrop-blur">
                <span class="material-icons text-sm">arrow_forward</span>
            </button>
        </div>
    </div>
</section>

