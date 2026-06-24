<!-- About Section Styles -->
<link rel="stylesheet" href="{{ asset('css/about.css') }}">

<section id="about" class="about-section py-5">
    <div class="container">
        <!-- کادر اصلی -->
        <div class="about-wrapper" data-aos="fade-up" data-aos-duration="800">
            <div class="row g-4">
                <!-- سمت راست: متن درباره من -->
                <div class="col-lg-7">
                    <div class="about-content p-4 p-md-5">
                        <!-- عنوان بخش -->
                        <div class="section-header mb-4">
                            <div class="section-label-wrapper">
                                <span class="section-label">درباره من</span>
                                <span class="section-line"></span>
                            </div>
                            <h2 class="display-5 fw-bold mt-3">
                                خودآموز، دقیق و علاقه‌مند به چالش‌های<br>
                                <span class="text-primary">واقعی وب</span>
                            </h2>
                        </div>
                        
                        <!-- متن -->
                        <div class="about-text">
                            <p class="lead mb-4" style="line-height: 2; font-size: 1.1rem;">
                                من، نیما احمدی، یک جوان ۱۸ ساله با شغل در زمینه توسعه نرم‌افزار و وب هستم.
                                تخصص اصلی من در حوزه بک‌اند وب و توسعه وب‌سایت‌ها با استفاده از فریم‌ورک‌های
                                <strong>PHP</strong> و <strong>Laravel</strong> است. از زمان شروع علاقه‌مندی به برنامه‌نویسی،
                                خودآموزی و تلاش برای بهبود مهارت‌هایم، برایم به یک ماجراجویی هیجان‌انگیز تبدیل شده است.
                            </p>
                            
                            <p class="text-muted mb-0" style="line-height: 2; font-size: 1.05rem;">
                                به یادگیری فناوری‌های جدید و پیشرفته در زمینه توسعه وب علاقه‌مندم و همیشه
                                دنبال چالش‌هایی هستم که مهارت‌هایم را بهتر کند. با توانایی کار تیمی،
                                روحیه کارآمد و انگیزه بالا، به دنبال فرصت‌های تازه در توسعه نرم‌افزار هستم
                                تا به پروژه‌های جذاب و مفیدی کمک کنم.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- سمت چپ: Timeline -->
                <div class="col-lg-5">
                    <div class="timeline-wrapper">
                        <!-- خط پر شونده -->
                        <div class="timeline-progress" id="timelineProgress"></div>
                        
                        <!-- آیتم ۱: سوابق تحصیلی -->
                        <div class="timeline-item" data-index="0">
                            <div class="timeline-dot"></div>
                            <div class="timeline-header">
                                <span class="timeline-badge">سوابق تحصیلی</span>
                            </div>
                            <div class="timeline-body">
                                <h4 class="fw-bold mb-2">شبکه و نرم‌افزار، دیپلم</h4>
                                <p class="text-muted mb-0">
                                    هنرستان مقیمی، از ۱۳۹۹ تاکنون. در کنار تحصیل، به‌صورت خودآموز
                                    روی بک‌اند وب با PHP و Laravel تمرکز کرده‌ام.
                                </p>
                            </div>
                        </div>
                        
                        <!-- آیتم ۲: سوابق شغلی -->
                        <div class="timeline-item" data-index="1">
                            <div class="timeline-dot"></div>
                            <div class="timeline-header">
                                <span class="timeline-badge">سوابق شغلی</span>
                            </div>
                            <div class="timeline-body">
                                <h4 class="fw-bold mb-2">آماده ثبت تجربه‌های جدید</h4>
                                <p class="text-muted mb-0">
                                    این بخش برای اضافه شدن پروژه‌ها و همکاری‌های جدید طراحی شده
                                    و به‌راحتی قابل توسعه است.
                                </p>
                            </div>
                        </div>
                        
                        <!-- آیتم ۳: زبان -->
                        <div class="timeline-item" data-index="2">
                            <div class="timeline-dot"></div>
                            <div class="timeline-header">
                                <span class="timeline-badge">زبان</span>
                            </div>
                            <div class="timeline-body">
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
</section>

<!-- About Section Script -->
<script src="{{ asset('js/about.js') }}"></script>