document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    const successAlert = document.getElementById('successAlert');
    const submitBtn = document.getElementById('submitBtn');
    
    if (!contactForm) return;
    
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // نمایش پیام موفقیت
        successAlert.classList.add('show');
        submitBtn.classList.add('success');
        submitBtn.innerHTML = '<i class="bi bi-check-circle me-2"></i>پیام ارسال شد!';
        submitBtn.disabled = true;
        
        // ریست بعد از ۳ ثانیه
        setTimeout(() => {
            successAlert.classList.remove('show');
            submitBtn.classList.remove('success');
            submitBtn.innerHTML = '<i class="bi bi-send me-2"></i>ارسال پیام';
            submitBtn.disabled = false;
            contactForm.reset();
        }, 3000);
    });
});