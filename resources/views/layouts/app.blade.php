<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Clipbook - AI Research for Public Relations</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#3b49df", // Indigo/Blue from the button
                        "primary-hover": "#2f3ab2",
                        "accent-purple": "#7c3aed",
                        "background-light": "#ffffff",
                        "background-dark": "#0B0C15", // Very dark navy/black
                        "surface-light": "#f3f4f6",
                        "surface-dark": "#151725", // Slightly lighter dark
                        "card-dark": "#1E2030",
                        "text-light": "#1f2937",
                        "text-dark": "#e5e7eb",
                        "muted-light": "#6b7280",
                        "muted-dark": "#9ca3af",
                    },
                    fontFamily: {
                        display: ["Inter", "sans-serif"],
                        body: ["Inter", "sans-serif"],
                    },
                    borderRadius: {
                        DEFAULT: "0.5rem",
                        "xl": "1rem",
                        "2xl": "1.5rem",
                    },
                    backgroundImage: {
                        'grid-pattern': "radial-gradient(circle, #3b49df 1px, transparent 1px)",
                    }
                },
            },
        };
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }::-webkit-scrollbar {
             width: 8px;
         }
        ::-webkit-scrollbar-track {
            background: transparent;
        }
        ::-webkit-scrollbar-thumb {
            background: #4b5563;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #6b7280;
        }
        .bg-grid {
            background-size: 40px 40px;
            mask-image: linear-gradient(to bottom, transparent, 10%, black, 90%, transparent);
            -webkit-mask-image: linear-gradient(to bottom, transparent, 5%, black, 90%, transparent);
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark transition-colors duration-300">
<!-- Navigation -->
<nav class="fixed w-full z-50 bg-background-light/90 dark:bg-background-dark/90 backdrop-blur-md border-b border-gray-200 dark:border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-white text-black font-bold flex items-center justify-center rounded text-xl">
                    <span class="transform -skew-x-12">C</span>
                </div>
                <span class="font-bold text-xl tracking-tight text-gray-900 dark:text-white">Clipbook</span>
            </div>
            <div class="hidden md:flex items-center space-x-8">
                <a class="text-sm font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-white transition-colors" href="#">Products</a>
                <a class="text-sm font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-white transition-colors" href="#">Customers</a>
                <a class="text-sm font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-white transition-colors" href="#">Resources</a>
                <a class="text-sm font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-white transition-colors" href="#">Company &amp; Careers</a>
            </div>
            <div class="flex items-center space-x-6">
                <a class="hidden md:block text-sm font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-white transition-colors" href="#">Sign In</a>
                <a class="bg-primary hover:bg-primary-hover text-white px-5 py-2.5 rounded-lg text-sm font-medium transition-all shadow-lg hover:shadow-primary/50" href="#">
                    Schedule a Demo
                </a>
                <button class="p-2 text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white" onclick="document.documentElement.classList.toggle('dark')">
                    <span class="material-icons text-xl">brightness_4</span>
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Main Content -->
@yield('content')

<!-- Footer -->
<footer class="bg-background-dark text-white pt-16 pb-8 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
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
                    <li><a class="text-gray-400 hover:text-white transition-colors text-sm" href="#">Company &amp; Careers</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6">Resources</h4>
                <ul class="space-y-4">
                    <li><a class="text-gray-400 hover:text-white transition-colors text-sm" href="#">Webinars</a></li>
                    <li><a class="text-gray-400 hover:text-white transition-colors text-sm" href="#">Customer Stories</a></li>
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
</body>
</html>

