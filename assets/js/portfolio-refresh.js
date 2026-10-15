document.querySelectorAll('.project-filter').forEach(function (button) {
    button.addEventListener('click', function () {
        document.querySelectorAll('.project-filter').forEach(function (item) {
            item.setAttribute('aria-pressed', item === button ? 'true' : 'false');
        });
    });
});

var portfolioMenuButton = document.getElementById('mobile-menu-button');
var portfolioMobileMenu = document.getElementById('mobile-menu');

if (portfolioMenuButton && portfolioMobileMenu) {
    portfolioMenuButton.setAttribute('aria-expanded', 'false');
    portfolioMenuButton.setAttribute('aria-controls', 'mobile-menu');

    portfolioMenuButton.addEventListener('click', function () {
        portfolioMenuButton.setAttribute('aria-expanded', portfolioMobileMenu.classList.contains('open') ? 'true' : 'false');
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' && portfolioMobileMenu.classList.contains('open')) {
            portfolioMobileMenu.classList.remove('open');
            portfolioMenuButton.classList.remove('open');
            portfolioMenuButton.setAttribute('aria-expanded', 'false');
            portfolioMenuButton.focus();
        }
    });
}
