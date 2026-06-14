document.addEventListener('DOMContentLoaded', function () {
    // Enable animation styles only when JS is running (progressive enhancement)
    document.documentElement.classList.add('aos-loading');

    // Responsive scale: keep the 420px pixel-perfect layout, but shrink it to fit narrower screens
    function applyResponsiveScale() {
        const wrap = document.querySelector('.wedding-wrap');
        const scaleWrap = document.querySelector('.responsive-scale');
        if (!wrap || !scaleWrap) return;

        const viewportWidth = window.innerWidth;
        const designWidth = 420;
        const scale = Math.min(1, viewportWidth / designWidth);

        wrap.style.transform = 'scale(' + scale + ')';
        wrap.style.transformOrigin = 'top center';

        // Adjust the outer wrapper height so the scaled content doesn't leave a gap
        const totalHeight = wrap.scrollHeight;
        scaleWrap.style.height = (totalHeight * scale) + 'px';
        scaleWrap.style.overflow = 'hidden';
    }

    applyResponsiveScale();
    window.addEventListener('resize', applyResponsiveScale);

    // Gate overlay logic
    const gate = document.getElementById('gate');
    const gateRight = document.querySelector('.gate-right');
    const openGateBtn = document.getElementById('openGateBtn');
    const main = document.getElementById('main');
    const audio = document.getElementById('audio');
    const musicToggle = document.getElementById('musicToggle');

    if (openGateBtn && gate && main) {
        openGateBtn.addEventListener('click', function () {
            if (audio) {
                audio.play().catch(() => {});
            }
            openGateBtn.style.display = 'none';
            if (gateRight) {
                gateRight.style.transition = 'opacity 2s ease';
                gateRight.style.opacity = '0';
            }
            main.style.display = 'block';

            // Re-apply responsive scale now that content is visible
            applyResponsiveScale();

            setTimeout(() => {
                gate.remove();
                initAnimations();
            }, 2000);
        });
    }

    // Music toggle
    if (musicToggle && audio) {
        musicToggle.addEventListener('click', function () {
            if (audio.paused) {
                audio.play().catch(() => {});
            } else {
                audio.pause();
            }
        });
    }

    // AOS-like scroll animations using IntersectionObserver
    function initAnimations() {
        if (typeof AOS !== 'undefined') {
            AOS.init({
                once: true,
                easing: 'ease-out',
                duration: 1000,
            });
            return;
        }

        // Fallback: IntersectionObserver toggles .aos-animate
        const animatedElements = document.querySelectorAll('[data-aos]');
        if (!('IntersectionObserver' in window)) {
            animatedElements.forEach(el => el.classList.add('aos-animate'));
            return;
        }

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('aos-animate');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        animatedElements.forEach(el => observer.observe(el));
    }

    // Safety: ensure text is visible even if animation library fails
    setTimeout(() => {
        document.querySelectorAll('[data-aos]').forEach(el => {
            el.classList.add('aos-animate');
        });
    }, 4000);

    // Countdown
    const countdownEl = document.getElementById('countdown');
    if (countdownEl) {
        const endTime = new Date(parseInt(countdownEl.dataset.endtime, 10)).getTime();
        const dayEl = document.getElementById('cd-day');
        const hourEl = document.getElementById('cd-hour');
        const minuteEl = document.getElementById('cd-minute');
        const secondEl = document.getElementById('cd-second');

        function updateCountdown() {
            const now = new Date().getTime();
            const diff = endTime - now;

            if (diff <= 0) {
                if (dayEl) dayEl.textContent = '00';
                if (hourEl) hourEl.textContent = '00';
                if (minuteEl) minuteEl.textContent = '00';
                if (secondEl) secondEl.textContent = '00';
                return;
            }

            const days = Math.floor(diff / (1000 * 60 * 60 * 24));
            const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((diff % (1000 * 60)) / 1000);

            if (dayEl) dayEl.textContent = String(days).padStart(2, '0');
            if (hourEl) hourEl.textContent = String(hours).padStart(2, '0');
            if (minuteEl) minuteEl.textContent = String(minutes).padStart(2, '0');
            if (secondEl) secondEl.textContent = String(seconds).padStart(2, '0');
        }

        updateCountdown();
        setInterval(updateCountdown, 1000);
    }

    // Modals
    document.querySelectorAll('[data-modal-target]').forEach(trigger => {
        trigger.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.dataset.modalTarget);
            if (target) {
                target.classList.remove('hidden');
                target.classList.add('flex');
            }
        });
    });

    document.querySelectorAll('.modal-backdrop').forEach(backdrop => {
        backdrop.addEventListener('click', function (e) {
            if (e.target === this) {
                this.classList.add('hidden');
                this.classList.remove('flex');
            }
        });
    });

    document.querySelectorAll('.modal-close').forEach(btn => {
        btn.addEventListener('click', function () {
            const modal = this.closest('.modal-backdrop');
            if (modal) {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }
        });
    });
});
