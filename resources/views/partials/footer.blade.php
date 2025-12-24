<!-- Shared CTA -->
@if (!request()->routeIs('home'))
    <div class="relative z-20">
        @include('partials.book-time')
    </div>
@endif

<!-- Footer -->
<footer class="bg-background-dark text-white pt-16 pb-8 border-t border-gray-800 relative z-20">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
            <div class="md:col-span-1 space-y-6">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-white text-black font-bold flex items-center justify-center rounded text-xl">
                        <span class="transform -skew-x-12">C</span>
                    </div>
                    <span class="font-bold text-2xl tracking-tight text-white">Clipbook</span>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed">
                    AI research and analysis for public relations. Monitor, aggregate, and analyze data from over 1 million sources.
                </p>
                <a class="inline-block bg-primary hover:bg-primary-hover text-white px-5 py-2.5 rounded-lg text-sm font-medium transition-all shadow-lg hover:shadow-primary/50" href="#">
                    Schedule a Demo
                </a>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6">Company</h4>
                <ul class="space-y-4">
                    <li><a class="text-gray-400 hover:text-white transition-colors text-sm" href="#">Products</a></li>
                    <li><a class="text-gray-400 hover:text-white transition-colors text-sm" href="/company-careers">Company &amp; Careers</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6">Resources</h4>
                <ul class="space-y-4">
                    <li><a class="text-gray-400 hover:text-white transition-colors text-sm" href="#">Webinars</a></li>
                    <li><a class="text-gray-400 hover:text-white transition-colors text-sm" href="{{ route('customer-stories') }}">Customer Stories</a></li>
                    <li><a class="text-gray-400 hover:text-white transition-colors text-sm" href="#">Blogs</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6">Community</h4>
                <ul class="space-y-4">
                    <li><a class="text-gray-400 hover:text-white transition-colors text-sm" href="#">LinkedIn</a></li>
                    <li><a class="text-gray-400 hover:text-white transition-colors text-sm" href="#">YouTube</a></li>
                    <li><a class="text-gray-400 hover:text-white transition-colors text-sm" href="#">X</a></li>
                    <li><a class="text-gray-400 hover:text-white transition-colors text-sm" href="#">Bluesky</a></li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-sm text-gray-500">© 2025 Clipbook. All rights reserved.</p>
            <div class="flex gap-6">
                <a class="text-sm text-gray-500 hover:text-gray-300 transition-colors" href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>

