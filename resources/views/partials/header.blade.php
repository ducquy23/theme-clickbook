<!-- Navigation -->
<nav class="fixed w-full z-50 bg-background-light/90 dark:bg-background-dark/90 backdrop-blur-md border-b border-gray-200 dark:border-gray-800">
    @if (!request()->routeIs('home'))
        @include('partials.announcement-bar')
    @endif
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center h-20">
            <div class="flex items-center gap-8 flex-1">
                <a href="{{ route('home') }}">
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('assets/images/logo-removebg.png') }}" alt="Clipbook logo"
                             class="w-8 h-8 object-contain"/>
                        <span class="font-bold text-xl tracking-tight text-[#F5F6FA]">Clipbook</span>

                    </div>
                </a>
                <div class="hidden md:flex items-center space-x-8">
                    <div class="relative group">
                        <a class="text-base font-medium text-[#F5F6FA] hover:text-primary transition-colors cursor-pointer flex items-center gap-1" href="#">
                            Products
                            <span class="material-icons text-sm">keyboard_arrow_down</span>
                        </a>
                        <div class="absolute top-full left-0 mt-2 w-64 bg-white dark:bg-[#151725] border border-gray-200 dark:border-gray-700 rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                            <div class="py-2">
                                <a href="#mediaintelligence" class="flex items-center gap-3 px-4 py-3 text-sm text-gray-700 dark:text-[#F5F6FA] hover:bg-gray-50 dark:hover:bg-[#1E2030] transition-colors">
                                    <span class="material-icons text-lg">psychology</span>
                                    <span>Media Intelligence</span>
                                </a>
                                <a href="#reporting" class="flex items-center gap-3 px-4 py-3 text-sm text-gray-700 dark:text-[#F5F6FA] hover:bg-gray-50 dark:hover:bg-[#1E2030] transition-colors">
                                    <span class="material-icons text-lg">description</span>
                                    <span>Reporting</span>
                                </a>
                                <a href="#analysis" class="flex items-center gap-3 px-4 py-3 text-sm text-gray-700 dark:text-[#F5F6FA] hover:bg-gray-50 dark:hover:bg-[#1E2030] transition-colors">
                                    <span class="material-icons text-lg">show_chart</span>
                                    <span>Analysis</span>
                                </a>
                                <a href="#database" class="flex items-center gap-3 px-4 py-3 text-sm text-gray-700 dark:text-[#F5F6FA] hover:bg-gray-50 dark:hover:bg-[#1E2030] transition-colors">
                                    <span class="material-icons text-lg">search</span>
                                    <span>Database</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <a class="text-base font-medium text-[#F5F6FA] hover:text-primary transition-colors" href="{{ route('customer-stories') }}">Customers</a>
                    <div class="relative group">
                        <a class="text-base font-medium text-[#F5F6FA] hover:text-primary transition-colors cursor-pointer flex items-center gap-1" href="{{ route('resources') }}">
                            Resources
                            <span class="material-icons text-sm">keyboard_arrow_down</span>
                        </a>
                        <div class="absolute top-full left-0 mt-2 w-64 bg-white dark:bg-[#151725] border border-gray-200 dark:border-gray-700 rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                            <div class="py-2">
                                <a href="{{ route('webinars') }}" class="flex items-center gap-3 px-4 py-3 text-sm text-gray-700 dark:text-[#F5F6FA] hover:bg-gray-50 dark:hover:bg-[#1E2030] transition-colors">
                                    <span class="material-icons text-lg">cast</span>
                                    <span>Webinars</span>
                                </a>
                                <a href="{{ route('resources') }}" class="flex items-center gap-3 px-4 py-3 text-sm text-gray-700 dark:text-[#F5F6FA] hover:bg-gray-50 dark:hover:bg-[#1E2030] transition-colors">
                                    <span class="material-icons text-lg">article</span>
                                    <span>Blog</span>
                                </a>
                                <a href="{{ route('customer-stories') }}" class="flex items-center gap-3 px-4 py-3 text-sm text-gray-700 dark:text-[#F5F6FA] hover:bg-gray-50 dark:hover:bg-[#1E2030] transition-colors">
                                    <span class="material-icons text-lg">book</span>
                                    <span>Customer Stories</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <a class="text-base font-medium text-[#F5F6FA] hover:text-primary transition-colors" href="{{ route('company-careers') }}">Company &amp; Careers</a>
                </div>
            </div>
            <div class="flex items-center space-x-6 ml-auto">
                <a class="hidden md:block text-base font-medium text-[#F5F6FA] hover:text-primary transition-colors" href="https://app.clipbook.com" target="_blank">Sign In</a>
                <a class="hidden md:block bg-[linear-gradient(90deg,rgb(70,110,255)_0%,rgb(40,60,200)_100%)] hover:opacity-90 text-[#F5F6FA] px-5 py-2.5 rounded-lg text-sm font-medium transition-all shadow-lg hover:shadow-primary/50" target="_blank" href="https://cal.com/team/clipbook/demo-with-clipbook">
                    Schedule a Demo
                </a>
                <!-- Mobile menu button -->
                <button id="mobile-menu-toggle" class="md:hidden text-[#F5F6FA] p-2 z-[60] relative">
                    <span class="material-icons text-2xl">menu</span>
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Mobile Menu Overlay -->
<div id="mobile-menu-overlay" class="fixed inset-0 bg-black/50 z-[100] hidden md:hidden" style="display: none;">
    <div id="mobile-menu" class="fixed top-0 left-0 h-full w-80 bg-[#151725] shadow-xl transform -translate-x-full transition-transform duration-300 z-[100] overflow-y-auto">
        <div class="p-6">
            <!-- Header with logo and close button -->
            <div class="flex items-center justify-between mb-8">
                <a href="{{ route('home') }}" class="flex items-center gap-2">
                    <img src="{{ asset('assets/images/logo-removebg.png') }}" alt="Clipbook logo"
                         class="w-8 h-8 object-contain"/>
                    <span class="font-bold text-xl tracking-tight text-[#F5F6FA]">Clipbook</span>
                </a>
                <button id="mobile-menu-close" class="text-[#F5F6FA] p-2">
                    <span class="material-icons text-2xl">close</span>
                </button>
            </div>

            <!-- Menu Items -->
            <div class="flex flex-col space-y-1">
                <!-- Products -->
                <div class="mobile-menu-item">
                    <a class="flex items-center justify-between text-base font-medium text-[#F5F6FA] hover:text-primary transition-colors py-3" href="#">
                        <span>Products</span>
                        <span class="material-icons text-sm">keyboard_arrow_down</span>
                    </a>
                    <div class="mobile-submenu hidden pl-4 mt-2 space-y-1">
                        <a href="#mediaintelligence" class="block text-sm text-gray-400 hover:text-[#F5F6FA] py-2">Media Intelligence</a>
                        <a href="#reporting" class="block text-sm text-gray-400 hover:text-[#F5F6FA] py-2">Reporting</a>
                        <a href="#analysis" class="block text-sm text-gray-400 hover:text-[#F5F6FA] py-2">Analysis</a>
                        <a href="#database" class="block text-sm text-gray-400 hover:text-[#F5F6FA] py-2">Database</a>
                    </div>
                </div>

                <!-- Customers -->
                <a class="text-base font-medium text-[#F5F6FA] hover:text-primary transition-colors py-3" href="{{ route('customer-stories') }}">Customers</a>

                <!-- Resources -->
                <div class="mobile-menu-item">
                    <a class="flex items-center justify-between text-base font-medium text-[#F5F6FA] hover:text-primary transition-colors py-3" href="{{ route('resources') }}">
                        <span>Resources</span>
                        <span class="material-icons text-sm">keyboard_arrow_down</span>
                    </a>
                    <div class="mobile-submenu hidden pl-4 mt-2 space-y-1">
                        <a href="{{ route('webinars') }}" class="block text-sm text-gray-400 hover:text-[#F5F6FA] py-2">Webinars</a>
                        <a href="{{ route('resources') }}" class="block text-sm text-gray-400 hover:text-[#F5F6FA] py-2">Blog</a>
                        <a href="{{ route('customer-stories') }}" class="block text-sm text-gray-400 hover:text-[#F5F6FA] py-2">Customer Stories</a>
                    </div>
                </div>

                <!-- Company & Careers -->
                <a class="text-base font-medium text-[#F5F6FA] hover:text-primary transition-colors py-3" href="{{ route('company-careers') }}">Company &amp; Careers</a>
            </div>

            <!-- Sign In -->
            <div class="mt-8 pt-8 border-t border-gray-700">
                <a class="text-base font-medium text-[#F5F6FA] hover:text-primary transition-colors block py-3" href="https://app.clipbook.com" target="_blank">Sign In</a>
            </div>

            <!-- Schedule a Demo Button -->
            <div class="mt-6">
                <a class="block w-full bg-[linear-gradient(90deg,rgb(70,110,255)_0%,rgb(40,60,200)_100%)] hover:opacity-90 text-[#F5F6FA] px-5 py-3 rounded-lg text-sm font-medium text-center transition-all shadow-lg" target="_blank" href="https://cal.com/team/clipbook/demo-with-clipbook">
                    Schedule a Demo
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.getElementById('mobile-menu-toggle');
        const menuClose = document.getElementById('mobile-menu-close');
        const menuOverlay = document.getElementById('mobile-menu-overlay');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuItems = document.querySelectorAll('.mobile-menu-item');

        // Toggle menu
        menuToggle?.addEventListener('click', function(e) {
            e.stopPropagation();
            if (menuOverlay && mobileMenu) {
                menuOverlay.classList.remove('hidden');
                menuOverlay.style.display = 'block';
                setTimeout(() => {
                    mobileMenu.classList.remove('-translate-x-full');
                }, 10);
                document.body.style.overflow = 'hidden';
            }
        });

        // Close menu
        function closeMenu() {
            if (mobileMenu && menuOverlay) {
                mobileMenu.classList.add('-translate-x-full');
                setTimeout(() => {
                    menuOverlay.classList.add('hidden');
                    menuOverlay.style.display = 'none';
                }, 300);
                document.body.style.overflow = '';
            }
        }

        menuClose?.addEventListener('click', closeMenu);
        menuOverlay?.addEventListener('click', function(e) {
            if (e.target === menuOverlay) {
                closeMenu();
            }
        });

        // Toggle submenu
        menuItems.forEach(item => {
            const link = item.querySelector('a');
            const submenu = item.querySelector('.mobile-submenu');
            const arrow = link.querySelector('.material-icons');

            link?.addEventListener('click', function(e) {
                if (submenu) {
                    e.preventDefault();
                    submenu.classList.toggle('hidden');
                    arrow.style.transform = submenu.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';
                }
            });
        });
    });
</script>

