<!-- Navigation -->
<nav class="fixed w-full z-50 bg-background-light/90 dark:bg-background-dark/90 backdrop-blur-md border-b border-gray-200 dark:border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <div class="flex items-center gap-2">
                <img src="{{ asset('assets/images/logo-removebg.png') }}" alt="Clipbook logo" class="w-8 h-8 object-contain"/>
                <span class="font-bold text-xl tracking-tight text-gray-900 dark:text-white">Clipbook</span>
            </div>
            <div class="hidden md:flex items-center space-x-8">
                <a class="text-base font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-white transition-colors" href="#">Products</a>
                <a class="text-base font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-white transition-colors" href="#">Customers</a>
                <a class="text-base font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-white transition-colors" href="#">Resources</a>
                <a class="text-base font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-white transition-colors" href="{{ route('company-careers') }}">Company &amp; Careers</a>
            </div>
            <div class="flex items-center space-x-6">
                <a class="hidden md:block text-base font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-white transition-colors" href="#">Sign In</a>
                <a class="bg-primary hover:bg-primary-hover text-white px-5 py-2.5 rounded-lg text-base font-medium transition-all shadow-lg hover:shadow-primary/50" href="#">
                    Schedule a Demo
                </a>
            </div>
        </div>
    </div>
</nav>

