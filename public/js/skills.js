document.addEventListener('DOMContentLoaded', function() {
    const skillBars = document.querySelectorAll('.skill-progress-bar');
    
    if (!skillBars.length) return;
    
    // Intersection Observer برای انیمیشن پر شدن
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const bar = entry.target;
                const percent = bar.getAttribute('data-percent');
                bar.style.width = percent + '%';
                observer.unobserve(bar);
            }
        });
    }, {
        threshold: 0.3
    });
    
    skillBars.forEach(bar => {
        observer.observe(bar);
    });
});