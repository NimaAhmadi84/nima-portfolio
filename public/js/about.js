document.addEventListener('DOMContentLoaded', function() {
    const timelineItems = document.querySelectorAll('.timeline-item');
    const timelineProgress = document.getElementById('timelineProgress');
    
    if (!timelineItems.length || !timelineProgress) return;
    
    function updateProgressLine(activeItem) {
        const wrapper = document.querySelector('.timeline-wrapper');
        const wrapperRect = wrapper.getBoundingClientRect();
        
        // پیدا کردن نقطه (dot) آیتم فعال
        const dot = activeItem.querySelector('.timeline-dot');
        const dotRect = dot.getBoundingClientRect();
        
        // محاسبه فاصله از بالای wrapper تا مرکز نقطه
        const topOffset = dotRect.top - wrapperRect.top + (dotRect.height / 2);
        
        // تنظیم ارتفاع خط
        timelineProgress.style.height = topOffset + 'px';
    }
    
    timelineItems.forEach((item, index) => {
        item.addEventListener('click', function() {
            // حذف active از همه
            timelineItems.forEach(i => i.classList.remove('active'));
            
            // اضافه کردن active به آیتم کلیک شده
            this.classList.add('active');
            
            // به‌روزرسانی خط
            updateProgressLine(this);
        });
    });
    
    // فعال کردن اولین آیتم به صورت پیش‌فرض
    if (timelineItems.length > 0) {
        setTimeout(() => {
            timelineItems[0].click();
        }, 500);
    }
    
    // به‌روزرسانی خط هنگام تغییر سایز پنجره
    window.addEventListener('resize', () => {
        const activeItem = document.querySelector('.timeline-item.active');
        if (activeItem) {
            updateProgressLine(activeItem);
        }
    });
});