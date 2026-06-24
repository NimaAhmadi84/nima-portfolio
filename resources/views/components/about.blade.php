<section id="about" class="about-section py-5">
    <div class="container">
        <div class="row g-5 align-items-start">
            <!-- سمت راست: متن درباره من -->
            <div class="col-lg-7 order-lg-1">
                <div class="about-content" data-aos="fade-left">
                    <!-- عنوان بخش -->
                    <div class="section-label mb-3">
                        <span class="line"></span>
                        <span>درباره من</span>
                    </div>
                    
                    <h2 class="display-5 fw-bold mb-4">
                        خودآموز، دقیق و علاقه‌مند به چالش‌های<br>
                        واقعی وب
                    </h2>
                    
                    <div class="about-text">
                        <p class="lead mb-4">
                            من، نیما احمدی، یک جوان ۱۸ ساله با شغل در زمینه توسعه نرم‌افزار و وب هستم.
                            تخصص اصلی من در حوزه بک‌اند وب و توسعه وب‌سایت‌ها با استفاده از فریم‌ورک‌های
                            PHP و Laravel است. از زمان شروع علاقه‌مندی به برنامه‌نویسی، خودآموزی و تلاش
                            برای بهبود مهارت‌هایم، برایم به یک ماجراجویی هیجان‌انگیز تبدیل شده است.
                        </p>
                        
                        <p class="text-muted">
                            به یادگیری فناوری‌های جدید و پیشرفته در زمینه توسعه وب علاقه‌مندم و همیشه
                            دنبال چالش‌هایی هستم که مهارت‌هایم را بهتر کند. با توانایی کار تیمی،
                            روحیه کارآمد و انگیزه بالا، به دنبال فرصت‌های تازه در توسعه نرم‌افزار هستم
                            تا به پروژه‌های جذاب و مفیدی کمک کنم.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- سمت چپ: Timeline -->
            <div class="col-lg-5 order-lg-2">
                <div class="timeline-card" data-aos="fade-right">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4 p-md-5">
                            <!-- آیتم ۱: سوابق تحصیلی -->
                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <div class="timeline-content">
                                    <span class="timeline-label">سوابق تحصیلی</span>
                                    <h4 class="fw-bold mb-2">شبکه و نرم‌افزار، دیپلم</h4>
                                    <p class="text-muted mb-0">
                                        هنرستان مقیمی، از ۱۳۹۹ تاکنون. در کنار تحصیل، به‌صورت خودآموز
                                        روی بک‌اند وب با PHP و Laravel تمرکز کرده‌ام.
                                    </p>
                                </div>
                            </div>
                            
                            <!-- آیتم ۲: سوابق شغلی -->
                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <div class="timeline-content">
                                    <span class="timeline-label">سوابق شغلی</span>
                                    <h4 class="fw-bold mb-2">آماده ثبت تجربه‌های جدید</h4>
                                    <p class="text-muted mb-0">
                                        این بخش برای اضافه شدن پروژه‌ها و همکاری‌های جدید طراحی شده
                                        و به‌راحتی قابل توسعه است.
                                    </p>
                                </div>
                            </div>
                            
                            <!-- آیتم ۳: زبان -->
                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <div class="timeline-content">
                                    <span class="timeline-label">زبان</span>
                                    <h4 class="fw-bold mb-2">انگلیسی</h4>
                                    <p class="text-muted mb-0">
                                        سطح مبتدی، در حال یادگیری و تقویت برای مطالعه منابع تخصصی
                                        برنامه‌نویسی.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* About Section */
.about-section {
    padding: 6rem 0;
    background: var(--bg-light);
}

body.dark-mode .about-section {
    background: var(--bg-dark);
}

/* Section Label */
.section-label {
    display: flex;
    align-items: center;
    gap: 1rem;
    color: var(--primary-color);
    font-weight: 600;
    font-size: 0.95rem;
}

.section-label .line {
    width: 40px;
    height: 2px;
    background: var(--primary-color);
}

/* About Text */
.about-text p {
    line-height: 2;
    font-size: 1.05rem;
}

/* Timeline Card */
.timeline-card .card {
    border-radius: 20px;
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
}

body.dark-mode .timeline-card .card {
    background: rgba(31, 41, 55, 0.95);
}

/* Timeline Items */
.timeline-item {
    position: relative;
    padding-right: 2.5rem;
    padding-bottom: 2rem;
}

.timeline-item:last-child {
    padding-bottom: 0;
}

/* خط عمودی timeline */
.timeline-item:not(:last-child)::before {
    content: '';
    position: absolute;
    right: 8px;
    top: 24px;
    bottom: -8px;
    width: 2px;
    background: linear-gradient(to bottom, var(--primary-color), transparent);
}

/* نقطه timeline */
.timeline-dot {
    position: absolute;
    right: 0;
    top: 6px;
    width: 18px;
    height: 18px;
    border-radius: 50%;
    background: var(--bg-light);
    border: 3px solid var(--primary-color);
    transition: all 0.3s ease;
}

.timeline-item:hover .timeline-dot {
    background: var(--primary-color);
    transform: scale(1.2);
    box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.2);
}

body.dark-mode .timeline-dot {
    background: var(--bg-dark);
}

/* Label */
.timeline-label {
    display: inline-block;
    font-size: 0.85rem;
    color: var(--primary-color);
    font-weight: 600;
    margin-bottom: 0.5rem;
}

/* Content */
.timeline-content h4 {
    font-size: 1.15rem;
    margin-bottom: 0.5rem;
}

.timeline-content p {
    font-size: 0.95rem;
    line-height: 1.8;
}

/* Responsive */
@media (max-width: 991px) {
    .about-section {
        padding: 4rem 0;
    }
    
    .timeline-item {
        padding-right: 2rem;
    }
}
</style>