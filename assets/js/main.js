const menuButton = document.querySelector('.menu-toggle');
const siteMenu = document.querySelector('#site-menu');

if (menuButton && siteMenu) {
    menuButton.addEventListener('click', () => {
        const isOpen = siteMenu.classList.toggle('is-open');
        menuButton.setAttribute('aria-expanded', String(isOpen));
    });

    siteMenu.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            siteMenu.classList.remove('is-open');
            menuButton.setAttribute('aria-expanded', 'false');
        });
    });
}

const revealItems = document.querySelectorAll('.section, .product-preview, .card, .step, .feature-item');
const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

if (!reduceMotion && 'IntersectionObserver' in window) {
    revealItems.forEach((item) => item.classList.add('reveal-ready'));

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });

    revealItems.forEach((item) => revealObserver.observe(item));
}
