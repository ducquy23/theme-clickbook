<!-- Navigation -->
<nav class="fixed w-full z-50 bg-background-light/90 dark:bg-background-dark/90 backdrop-blur-md border-b border-gray-200 dark:border-gray-800">
    @if (!request()->routeIs('home'))
        @include('partials.announcement-bar')
    @endif
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center h-20">
            <div class="flex items-center gap-8">
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
                    <a class="text-base font-medium text-[#F5F6FA] hover:text-primary transition-colors" href="{{ route('resources') }}">Resources</a>
                    <a class="text-base font-medium text-[#F5F6FA] hover:text-primary transition-colors" href="{{ route('company-careers') }}">Company &amp; Careers</a>
                </div>
            </div>
            <div class="flex items-center space-x-6 ml-auto">
                <a class="hidden md:block text-base font-medium text-[#F5F6FA] hover:text-primary transition-colors" href="https://app.clipbook.com" target="_blank">Sign In</a>
                <a class="bg-[linear-gradient(90deg,rgb(70,110,255)_0%,rgb(40,60,200)_100%)] hover:opacity-90 text-[#F5F6FA] px-5 py-2.5 rounded-lg text-sm font-medium transition-all shadow-lg hover:shadow-primary/50" target="_blank" href="https://cal.com/team/clipbook/demo-with-clipbook">
                    Schedule a Demo
                </a>
            </div>
        </div>
    </div>
</nav>

