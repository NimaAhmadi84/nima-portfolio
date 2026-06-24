document.addEventListener('DOMContentLoaded', function() {
    const timelineItems = document.querySelectorAll('.timeline-item');
    const timelineProgress = document.getElementById('timelineProgress');
    const timelineWrapper = document.querySelector('.timeline-wrapper');
    
    if (!timelineItems.length || !timelineProgress || !timelineWrapper) return;
    
    function updateProgressLine(activeItem) {
        const wrapper = timelineWrapper;
        const wrapperRect = wrapper.getBoundingClientRect();
        
        // آیا این آیتم آخره؟
        const isLastItem = activeItem === timelineItems[timelineItems.length - 1];
        
        if (isLastItem) {
            // اگه آیتم آخره، خط باید تا پایین wrapper برسه
            const bottomOffset = wrapperRect.height - 65; // ← عدد از 40 به 55 تغییر کرد
            timelineProgress.style.height = bottomOffset + 'px';
        } else {
            // برای بقیه آیتم‌ها، خط تا مرکز dot می‌رسه
            const dot = activeItem.querySelector('.timeline-dot');
            const dotRect = dot.getBoundingClientRect();
            const topOffset = dotRect.bottom - wrapperRect.top + 4;
            timelineProgress.style.height = topOffset + 'px';
        }
    }
    
    timelineItems.forEach((item) => {
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