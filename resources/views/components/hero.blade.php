<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <!-- سمت راست: محتوا -->
            <div class="col-lg-7 order-lg-1">
                <div class="hero-content" data-aos="fade-left" data-aos-duration="1000">
                    <h1 class="display-5 fw-bold mb-4">
                        طراحی و توسعه وب‌سایت‌های حرفه‌ای<br>
                        <span class="text-gradient">
                            با تمرکز روی بک‌اند تمیز و قابل توسعه
                        </span>
                    </h1>

                    <p class="lead text-muted mb-5" style="font-size: 1.15rem; line-height: 2;">
                        من نیما احمدی هستم؛ توسعه‌دهنده نرم‌افزار و وب، مسلط به PHP و Laravel،
                        علاقه‌مند به ساخت پروژه‌های کاربردی و یادگیری فناوری‌های جدید.
                    </p>

                    <!-- دکمه‌ها -->
                    <div class="d-flex gap-3">
                        <a href="{{ route('projects.index') }}" class="btn btn-primary btn-lg px-5">
                            <i class="bi bi-grid-3x3-gap me-2"></i>
                            مشاهده نمونه‌کارها
                        </a>
                        <a href="{{ url('/#contact') }}" class="btn btn-outline-secondary btn-lg px-5">
                            <i class="bi bi-send me-2"></i>
                            درخواست همکاری
                        </a>
                    </div>
                </div>
            </div>

            <!-- سمت چپ: کارت پروفایل -->
            <div class="col-lg-5 order-lg-2 mb-4 mb-lg-0">
                <div class="profile-card" data-aos="fade-right" data-aos-duration="1000">
                    <div class="card border-0 shadow-lg">
                        <div class="card-body text-center p-5">
                            <!-- عکس پروفایل -->
                            <div class="profile-image-container mb-4">
                                <div class="profile-image-placeholder">
                                    <i class="bi bi-person-fill"></i>
                                </div>
                            </div>

                            <!-- اسم -->
                            <h3 class="fw-bold mb-3 fs-2">نیما احمدی</h3>

                            <!-- تگ‌ها -->
                            <div class="d-flex justify-content-center gap-2 mb-4 flex-wrap">
                                <span class="badge badge-custom">
                                    <i class="bi bi-code-slash me-1"></i>
                                    PHP Backend
                                </span>
                                <span class="badge badge-custom">
                                    <i class="bi bi-laravel me-1"></i>
                                    Laravel
                                </span>
                                <span class="badge badge-custom">
                                    <i class="bi bi-calendar me-1"></i>
                                    ۱۸ ساله
                                </span>
                            </div>

                            <!-- توضیحات -->
                            <p class="text-muted mb-0" style="line-height: 1.8; font-size: 0.95rem;">
                                برنامه‌نویس بک‌اند وب، آماده برای همکاری روی پروژه‌های سفارشی،
                                پنل‌های مدیریتی، وب‌سایت‌های شرکتی و ربات‌های تلگرام.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Hero Section - فاصله بیشتر از نوبار */
    .hero-section {
        padding-top: 5rem;
        padding-bottom: 6rem;
        min-height: 85vh;
        display: flex;
        align-items: center;
    }

    /* Gradient Text */
    .text-gradient {
        background: linear-gradient(135deg, var(--primary-color), #60a5fa);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* Profile Card */
    .profile-card {
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .profile-card:hover {
        transform: translateY(-10px);
    }

    .profile-card .card {
        border-radius: 20px;
        overflow: hidden;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
    }

    body.dark-mode .profile-card .card {
        background: rgba(31, 41, 55, 0.95);
    }

    /* Profile Image */
    .profile-image-placeholder {
        width: 130px;
        height: 130px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--primary-color), #60a5fa);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 4rem;
        margin: 0 auto;
        box-shadow: 0 15px 35px rgba(37, 99, 235, 0.4);
        transition: all 0.4s ease;
    }

    .profile-image-placeholder:hover {
        transform: scale(1.05) rotate(5deg);
        box-shadow: 0 20px 45px rgba(37, 99, 235, 0.5);
    }

    /* Badge Custom */
    .badge-custom {
        background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        color: var(--text-light);
        padding: 0.5rem 1rem;
        border-radius: 50px;
        font-weight: 500;
        font-size: 0.9rem;
        transition: all 0.3s ease;
    }

    .badge-custom:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(37, 99, 235, 0.2);
    }

    body.dark-mode .badge-custom {
        background: linear-gradient(135deg, #374151, #1f2937);
        color: var(--text-dark);
    }

    /* Buttons */
    .btn-primary {
        background: var(--primary-color);
        border: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background: #1d4ed8;
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(37, 99, 235, 0.4);
    }

    .btn-outline-secondary {
        border: 2px solid #6c757d;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-outline-secondary:hover {
        background: #6c757d;
        border-color: #6c757d;
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(108, 117, 125, 0.3);
    }

    /* Dark Mode */
    body.dark-mode .hero-section {
        background: transparent;
    }

    body.dark-mode .text-muted {
        color: #9ca3af !important;
    }

    /* Responsive */
    @media (max-width: 991px) {
        .hero-section {
            padding-top: 4rem;
            padding-bottom: 4rem;
            text-align: center;
        }

        .d-flex.gap-3 {
            justify-content: center;
        }
    }
</style>