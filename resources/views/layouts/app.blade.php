<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'پورتفولیوی نیما احمدی - توسعه‌دهنده Laravel')">
    
    <title>@yield('title', 'نیما احمدی - توسعه‌دهنده Laravel')</title>
    
    <!-- Bootstrap RTL -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.rtl.min.css') }}">
    
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #2563eb;
            --bg-light: #f3f4f6;
            --bg-dark: #111827;
            --text-light: #1f2937;
            --text-dark: #f9fafb;
        }
        
        body {
            background-color: var(--bg-light);
            color: var(--text-light);
            font-family: Tahoma, sans-serif;
            line-height: 1.6;
        }
        
        /* Dark Mode */
        body.dark-mode {
            background-color: var(--bg-dark);
            color: var(--text-dark);
        }
    </style>
    
    @stack('styles')
</head>
<body>
    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Main Content -->
    <main class="container my-5">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    
    <!-- Theme Toggle Script -->
    <script>
        // Check for saved theme preference
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme === 'dark') {
            document.body.classList.add('dark-mode');
        }
        
        // Theme toggle function
        function toggleTheme() {
            document.body.classList.toggle('dark-mode');
            const theme = document.body.classList.contains('dark-mode') ? 'dark' : 'light';
            localStorage.setItem('theme', theme);
        }
    </script>
    
    @stack('scripts')
</body>
</html>