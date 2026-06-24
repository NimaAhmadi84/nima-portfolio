<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'پورتفولیوی نیما احمدی - توسعه‌دهنده Laravel')">
    
    <title>@yield('title', 'نیما احمدی - توسعه‌دهنده Laravel')</title>
    
    <!-- Bootstrap RTL -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.rtl.min.css') }}">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #2563eb;
            --bg-light: #f8f9fa;
            --bg-dark: #0f172a;
            --text-light: #1f2937;
            --text-dark: #f9fafb;
        }
        
        body {
            background-color: var(--bg-light);
            color: var(--text-light);
            font-family: Tahoma, 'Segoe UI', sans-serif;
            line-height: 1.6;
            overflow-x: hidden;
        }
        
        /* Dark Mode */
        body.dark-mode {
            background-color: var(--bg-dark);
            color: var(--text-dark);
        }
        
        /* Smooth Scroll */
        html {
            scroll-behavior: smooth;
        }
    </style>
    
    @stack('styles')
</head>
<body>
    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    
    <!-- AOS Animation Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Theme Toggle Script -->
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true,
            offset: 100,
            easing: 'ease-out-cubic'
        });
        
        // Check for saved theme preference
        const savedTheme = localStorage.getItem('theme');
        const toggle = document.getElementById('darkModeToggle');
        const icon = document.getElementById('themeIcon');
        
        if (savedTheme === 'dark') {
            document.body.classList.add('dark-mode');
            if (toggle) toggle.checked = true;
            if (icon) {
                icon.classList.remove('bi-moon-stars-fill');
                icon.classList.add('bi-sun-fill');
            }
        }
        
        // Theme toggle function
        function toggleTheme() {
            document.body.classList.toggle('dark-mode');
            const isDark = document.body.classList.contains('dark-mode');
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
            
            // Change icon
            if (icon) {
                if (isDark) {
                    icon.classList.remove('bi-moon-stars-fill');
                    icon.classList.add('bi-sun-fill');
                } else {
                    icon.classList.remove('bi-sun-fill');
                    icon.classList.add('bi-moon-stars-fill');
                }
            }
        }
    </script>
    
    @stack('scripts')
</body>
</html>