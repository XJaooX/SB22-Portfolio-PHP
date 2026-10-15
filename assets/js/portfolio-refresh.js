document.querySelectorAll('.project-card').forEach(function (card) {
    card.addEventListener('keydown', function (event) {
        if (event.key === 'Enter' || event.key === ' ') {
            event.preventDefault();
            if (typeof openProject === 'function') {
                openProject(card.getAttribute('data-project'));
            }
        }
    });
});

document.querySelectorAll('.project-filter').forEach(function (button) {
    button.addEventListener('click', function () {
        document.querySelectorAll('.project-filter').forEach(function (item) {
            item.setAttribute('aria-pressed', item === button ? 'true' : 'false');
        });
    });
});

function openProjectFromHash() {
    if (typeof openProject !== 'function') {
        return;
    }

    var match = window.location.hash.match(/^#projet-([a-z0-9-]+)$/);
    if (!match) {
        return;
    }

    var modal = document.getElementById('project-' + match[1]);
    if (modal) {
        openProject(match[1]);
    }
}

openProjectFromHash();
window.addEventListener('hashchange', openProjectFromHash);

document.querySelectorAll('[data-close-modal]').forEach(function (button) {
    button.addEventListener('click', function () {
        if (window.location.hash.indexOf('#projet-') === 0) {
            history.replaceState(null, '', window.location.pathname + window.location.search);
        }
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
