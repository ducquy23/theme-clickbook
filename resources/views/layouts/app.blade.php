<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Clipbook - AI Research for Public Relations</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/images/logo.svg') }}"/>
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
                        'hero-gradient': 'radial-gradient(circle at top left, #1a1b3b 0%, transparent 40%)',
                        'card-gradient': 'linear-gradient(to bottom right, rgba(255,255,255,0.05), rgba(255,255,255,0.01))',
                        'blue-glow': 'radial-gradient(circle at center, rgba(59, 59, 255, 0.4) 0%, transparent 70%)',
                    }
                },
            },
        };
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        ::-webkit-scrollbar {
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
        .dot-pattern {
            background-image: radial-gradient(#2d3042 1px, transparent 1px);
            background-size: 20px 20px;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark transition-colors duration-300">
@include('partials.header')

<!-- Main Content -->
@yield('content')

@include('partials.footer')
</body>
</html>

