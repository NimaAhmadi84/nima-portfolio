<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ url('/') }}" style="color: var(--primary-color);">
            نیما احمدی
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">خانه</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#about') }}">درباره من</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/projects') }}">پروژه‌ها</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/blog') }}">بلاگ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#contact') }}">تماس</a>
                </li>
            </ul>
            
            <!-- Theme Toggle Button -->
            <button class="btn btn-outline-secondary" onclick="toggleTheme()" title="تغییر تم">
                🌓
            </button>
        </div>
    </div>
</nav>