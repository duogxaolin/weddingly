document.addEventListener('DOMContentLoaded', function () {
    // Enable animation styles only when JS is running (progressive enhancement)
    document.documentElement.classList.add('aos-loading');

    // Layout mode detection: mobile (scale) vs desktop (full layout)
    function isDesktop() {
        return window.matchMedia('(min-width: 768px)').matches;
    }

    // Responsive scale: keep the 420px pixel-perfect mobile layout, shrunk to fit
    // narrower screens. On desktop (≥768px) the separate #desktop-main layout is
    // shown instead, so the mobile canvas needs no scaling there.
    function applyResponsiveScale() {
        const wrap = document.querySelector('.wedding-wrap');
        const scaleWrap = document.querySelector('.responsive-scale');
        if (!wrap || !scaleWrap) return;

        // On desktop, clear any mobile scaling
        if (isDesktop()) {
            wrap.style.transform = 'none';
            scaleWrap.style.height = 'auto';
            scaleWrap.style.overflow = 'visible';
            return;
        }

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
    const desktopMain = document.getElementById('desktop-main');
    const audio = document.getElementById('audio');
    const musicToggle = document.getElementById('musicToggle');

    if (openGateBtn && gate) {
        openGateBtn.addEventListener('click', function () {
            if (audio) {
                audio.play().catch(() => {});
            }
            openGateBtn.style.display = 'none';
            if (gateRight) {
                gateRight.style.transition = 'opacity 2s ease';
                gateRight.style.opacity = '0';
            }
            // Reveal the appropriate layout (mobile shows via inline display, desktop via class)
            if (main) main.style.display = 'block';
            if (desktopMain) desktopMain.classList.add('gate-shown');

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

    // Countdown — works for both mobile (#countdown with #cd-*) and desktop (.cd-desktop with .cd-*)
    function setupCountdown(rootSel, itemSel) {
        const roots = document.querySelectorAll(rootSel);
        if (!roots.length) return null;
        const endTime = new Date(parseInt(roots[0].dataset.endtime, 10)).getTime();

        function updateCountdown() {
            const now = new Date().getTime();
            const diff = endTime - now;

            let d, h, m, s;
            if (diff <= 0) {
                d = h = m = s = '00';
            } else {
                const days = Math.floor(diff / (1000 * 60 * 60 * 24));
                const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((diff % (1000 * 60)) / 1000);
                d = String(days).padStart(2, '0');
                h = String(hours).padStart(2, '0');
                m = String(minutes).padStart(2, '0');
                s = String(seconds).padStart(2, '0');
            }

            roots.forEach(root => {
                const dayEls = root.querySelectorAll(itemSel + '-day');
                const hourEls = root.querySelectorAll(itemSel + '-hour');
                const minEls = root.querySelectorAll(itemSel + '-minute');
                const secEls = root.querySelectorAll(itemSel + '-second');
                dayEls.forEach(el => el.textContent = d);
                hourEls.forEach(el => el.textContent = h);
                minEls.forEach(el => el.textContent = m);
                secEls.forEach(el => el.textContent = s);
            });
        }

        updateCountdown();
        return updateCountdown;
    }

    const mobileCD = setupCountdown('#countdown', '#cd');
    const desktopCD = setupCountdown('.cd-desktop', '.cd');
    setInterval(() => { if (mobileCD) mobileCD(); if (desktopCD) desktopCD(); }, 1000);

    // Copy bank account button (desktop)
    document.querySelectorAll('.d-copy-btn').forEach(btn => {
        btn.addEventListener('click', function () {
            const text = this.dataset.copy;
            if (navigator.clipboard) {
                navigator.clipboard.writeText(text).then(() => {
                    const orig = this.textContent;
                    this.textContent = '✓ Đã chép';
                    setTimeout(() => { this.textContent = orig; }, 2000);
                });
            }
        });
    });

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
