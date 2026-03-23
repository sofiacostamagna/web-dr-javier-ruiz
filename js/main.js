// @ts-nocheck
document.addEventListener('DOMContentLoaded', function () {

    // ─── Scroll: header compacto + barra de progreso ─────────────────────────
    var header   = document.getElementById('site-header');
    var progress = document.getElementById('scroll-progress');

    window.addEventListener('scroll', function () {
        var scrollY   = window.scrollY;
        var docHeight = document.documentElement.scrollHeight - window.innerHeight;

        // Header compacto
        if (header) {
            header.classList.toggle('scrolled', scrollY > 60);
        }

        // Barra de progreso dorada
        if (progress && docHeight > 0) {
            progress.style.width = ((scrollY / docHeight) * 100) + '%';
        }
    });

    // ─── Hamburger + menú móvil ────────────────────────────────────────────────
    var hamburger     = document.getElementById('hamburger');
    var mobileMenu    = document.getElementById('mobile-menu');
    var mobileOverlay = document.getElementById('mobile-overlay');
    var mobileClose   = document.getElementById('mobile-close');

    if (hamburger && mobileMenu && mobileOverlay && mobileClose) {

        function openMenu() {
            hamburger.classList.add('active');
            hamburger.setAttribute('aria-expanded', 'true');
            mobileMenu.classList.add('active');
            mobileMenu.setAttribute('aria-hidden', 'false');
            mobileOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeMenu() {
            hamburger.classList.remove('active');
            hamburger.setAttribute('aria-expanded', 'false');
            mobileMenu.classList.remove('active');
            mobileMenu.setAttribute('aria-hidden', 'true');
            mobileOverlay.classList.remove('active');
            document.body.style.overflow = '';
        }

        hamburger.addEventListener('click', function () {
            mobileMenu.classList.contains('active') ? closeMenu() : openMenu();
        });

        mobileClose.addEventListener('click', closeMenu);
        mobileOverlay.addEventListener('click', closeMenu);

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') closeMenu();
        });

        // Cerrar al hacer clic en cualquier enlace del menú móvil
        mobileMenu.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', closeMenu);
        });
    }

    // ─── Hero slider ──────────────────────────────────────────────────────────
    var slides  = document.querySelectorAll('.hero-slide');
    var counter = document.getElementById('hero-current');
    var current = 0;
    var sliderInterval;

    function goToSlide(index) {
        slides[current].classList.remove('active');
        current = index;
        slides[current].classList.add('active');

        // Actualiza el contador 01 / 02 / 03
        if (counter) {
            counter.textContent = String(current + 1).padStart(2, '0');
        }
    }

    function nextSlide() {
        goToSlide((current + 1) % slides.length);
    }

    if (slides.length > 1) {
        sliderInterval = setInterval(nextSlide, 5000);
    }

    // ─── Submenús móviles (acordeón) ─────────────────────────────────────────
    document.querySelectorAll('.mobile-sub-toggle').forEach(function (toggle) {
        toggle.addEventListener('click', function () {
            var parent = toggle.closest('.mobile-has-sub');
            if (!parent) return;
            var sub    = parent.querySelector('.mobile-sub');
            var isOpen = parent.classList.contains('open');

            document.querySelectorAll('.mobile-has-sub.open').forEach(function (el) {
                el.classList.remove('open');
                var openSub = el.querySelector('.mobile-sub');
                if (openSub) openSub.classList.remove('open');
            });

            if (!isOpen && sub) {
                parent.classList.add('open');
                sub.classList.add('open');
            }
        });
    });

});
