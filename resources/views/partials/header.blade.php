<!-- Navigation -->
<nav class="fixed w-full z-50 bg-background-light/90 dark:bg-background-dark/90 backdrop-blur-md border-b border-gray-200 dark:border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center h-20">
            <div class="flex items-center gap-8">
                <div class="flex items-center gap-2">
                    <img src="{{ asset('assets/images/logo-removebg.png') }}" alt="Clipbook logo" class="w-8 h-8 object-contain"/>
                    <span class="font-bold text-xl tracking-tight text-[#F5F6FA]">Clipbook</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a class="text-base font-medium text-[#F5F6FA] hover:text-primary transition-colors" href="#">Products</a>
                    <a class="text-base font-medium text-[#F5F6FA] hover:text-primary transition-colors" href="#">Customers</a>
                    <a class="text-base font-medium text-[#F5F6FA] hover:text-primary transition-colors" href="#">Resources</a>
                    <a class="text-base font-medium text-[#F5F6FA] hover:text-primary transition-colors" href="{{ route('company-careers') }}">Company &amp; Careers</a>
                </div>
            </div>
            <div class="flex items-center space-x-6 ml-auto">
                <a class="hidden md:block text-base font-medium text-[#F5F6FA] hover:text-primary transition-colors" href="https://app.clipbook.com" target="_blank">Sign In</a>
                <a class="bg-primary hover:bg-primary-hover text-[#F5F6FA] px-5 py-2.5 rounded-lg text-base font-medium transition-all shadow-lg hover:shadow-primary/50" target="_blank" href="https://cal.com/team/clipbook/demo-with-clipbook">
                    Schedule a Demo
                </a>
            </div>
        </div>
    </div>
</nav>

