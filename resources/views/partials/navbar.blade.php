<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
        <!-- برند -->
        <a class="navbar-brand fw-bold" href="{{ url('/') }}" style="color: var(--primary-color); font-size: 1.3rem;">
            نیما احمدی
        </a>
        
        <!-- Toggle Button برای موبایل -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- منو -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link px-3" href="{{ url('/') }}">خانه</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="#about">درباره من</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="#skills">مهارت‌ها</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="#portfolio">نمونه‌کارها</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="#contact">درخواست همکاری</a>
                </li>
            </ul>
            
            <!-- Dark Mode Toggle Switch -->
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="darkModeToggle" onclick="toggleTheme()">
                <label class="form-check-label" for="darkModeToggle">
                    <i class="bi bi-moon-stars-fill" id="themeIcon" style="font-size: 1.2rem;"></i>
                </label>
            </div>
        </div>
    </div>
</nav>

<style>
/* استایل Toggle Switch */
.form-switch .form-check-input {
    width: 3em;
    height: 1.5em;
    cursor: pointer;
    border-radius: 2em;
    transition: all 0.3s ease;
}

.form-switch .form-check-input:checked {
    background-color: var(--primary-color);
    border-color: var(--primary-color);
}

.form-switch .form-check-label {
    cursor: pointer;
    transition: all 0.3s ease;
}

/* Hover effects برای منو */
.nav-link {
    position: relative;
    transition: color 0.3s ease;
    font-weight: 500;
}

.nav-link::after {
    content: '';
    position: absolute;
    bottom: 0;
    right: 50%;
    width: 0;
    height: 2px;
    background: var(--primary-color);
    transition: all 0.3s ease;
    transform: translateX(50%);
}

.nav-link:hover::after {
    width: 80%;
}

.nav-link:hover {
    color: var(--primary-color) !important;
}

/* Navbar Dark Mode */
body.dark-mode .navbar {
    background-color: #1f2937 !important;
}

body.dark-mode .navbar-brand {
    color: #60a5fa !important;
}
</style>