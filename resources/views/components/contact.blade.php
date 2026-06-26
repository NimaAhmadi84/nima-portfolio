<!-- Contact Section Styles -->
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">

<section id="contact" class="contact-section py-5">
    <div class="container">
        <div class="contact-wrapper" data-aos="fade-up" data-aos-duration="800">
            <!-- عنوان بخش -->
            <div class="section-header mb-5">
                <div class="section-label-wrapper">
                    <span class="section-label">تماس با من</span>
                    <span class="section-line"></span>
                </div>
                <h2 class="display-5 fw-bold mt-3">
                    بیایید با هم<br>
                    <span class="text-primary">کار کنیم</span>
                </h2>
            </div>
            
            <div class="row g-4">
                <!-- سمت راست: اطلاعات تماس -->
                <div class="col-lg-5">
                    <div class="contact-info-card" data-aos="fade-left">
                        <h3 class="contact-info-title">راه‌های ارتباطی</h3>
                        
                        <!-- ایمیل -->
                        <a href="mailto:mrnima2920@gmail.com" class="contact-item">
                            <div class="contact-item-icon">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div class="contact-item-content">
                                <div class="contact-item-label">ایمیل</div>
                                <div class="contact-item-value">mrnima2920@gmail.com</div>
                            </div>
                        </a>
                        
                        <!-- گیت‌هاب -->
                        <a href="https://github.com" target="_blank" class="contact-item">
                            <div class="contact-item-icon">
                                <i class="bi bi-github"></i>
                            </div>
                            <div class="contact-item-content">
                                <div class="contact-item-label">گیت‌هاب</div>
                                <div class="contact-item-value">github.com/nima-ahmadi</div>
                            </div>
                        </a>
                        
                        <!-- لینکدین -->
                        <a href="https://linkedin.com" target="_blank" class="contact-item">
                            <div class="contact-item-icon">
                                <i class="bi bi-linkedin"></i>
                            </div>
                            <div class="contact-item-content">
                                <div class="contact-item-label">لینکدین</div>
                                <div class="contact-item-value">linkedin.com/in/nima-ahmadi</div>
                            </div>
                        </a>
                        
                        <!-- تلگرام -->
                        <a href="https://t.me" target="_blank" class="contact-item">
                            <div class="contact-item-icon">
                                <i class="bi bi-telegram"></i>
                            </div>
                            <div class="contact-item-content">
                                <div class="contact-item-label">تلگرام</div>
                                <div class="contact-item-value">@nima_ahmadi</div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <!-- سمت چپ: فرم تماس -->
                <div class="col-lg-7">
                    <div class="contact-form-card" data-aos="fade-right">
                        <h3 class="contact-form-title">پیام خود را ارسال کنید</h3>
                        
                        <form id="contactForm">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">نام و نام خانوادگی</label>
                                        <input type="text" class="form-control" placeholder="نام خود را وارد کنید" required>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">ایمیل</label>
                                        <input type="email" class="form-control" placeholder="example@email.com" required>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label">موضوع</label>
                                        <input type="text" class="form-control" placeholder="موضوع پیام" required>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label">پیام شما</label>
                                        <textarea class="form-control" placeholder="پیام خود را بنویسید..." rows="5" required></textarea>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <button type="submit" class="btn-submit">
                                        <i class="bi bi-send me-2"></i>
                                        ارسال پیام
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section Script -->
<script src="{{ asset('js/contact.js') }}"></script>