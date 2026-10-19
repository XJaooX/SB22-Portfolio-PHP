// Guarda os elementos necessários para o menu mobile.
const menuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');
const siteHeader = document.getElementById('site-header');

// Abre e fecha o menu mobile quando se carrega no botão.
if (menuButton && mobileMenu) {
    menuButton.addEventListener('click', function () {
        menuButton.classList.toggle('open');
        mobileMenu.classList.toggle('open');
    });
}

// Adiciona um fundo um pouco mais marcado à navbar depois de começar a fazer scroll.
if (siteHeader) {
    window.addEventListener('scroll', function () {
        if (window.scrollY > 16) {
            siteHeader.classList.add('scrolled');
        } else {
            siteHeader.classList.remove('scrolled');
        }
    });
}



// =============================
// MÉTODO DA AGÊNCIA NO TELEMÓVEL
// =============================

// Atualiza o contador enquanto se desliza entre as etapas.
const methodGrid = document.getElementById('method-grid');
const methodCounter = document.getElementById('method-counter');
const methodDots = document.querySelectorAll('.method-dot');

if (methodGrid && methodCounter) {
    methodGrid.addEventListener('scroll', function () {
        const cards = methodGrid.querySelectorAll('.method-card');
        const middle = methodGrid.scrollLeft + methodGrid.clientWidth / 2;

        let activeIndex = 0;
        let smallestDistance = Infinity;

        cards.forEach(function (card, index) {
            const cardMiddle = card.offsetLeft + card.offsetWidth / 2;
            const distance = Math.abs(cardMiddle - middle);

            if (distance < smallestDistance) {
                smallestDistance = distance;
                activeIndex = index;
            }
        });

        // Atualiza o contador e o ponto ativo.
        methodCounter.textContent = (activeIndex + 1) + '/' + cards.length;

        methodDots.forEach(function (dot, index) {
            if (index === activeIndex) {
                dot.classList.add('active');
            } else {
                dot.classList.remove('active');
            }
        });
    });
}


// expertises
var expertiseButtons = document.querySelectorAll('.expertise-button');
var expertiseItems = document.querySelectorAll('.expertise-item');

expertiseButtons.forEach(function (button) {
    button.addEventListener('click', function () {
        var item = button.closest('.expertise-item');
        var wasOpen = item.classList.contains('open');

        expertiseItems.forEach(function (otherItem) {
            otherItem.classList.remove('open');
            otherItem.querySelector('.expertise-symbol').textContent = '+';
        });

        if (!wasOpen) {
            item.classList.add('open');
            item.querySelector('.expertise-symbol').textContent = '−';
        }
    });
});


// formulario contact
var contactForm = document.getElementById('contact-form');
var formSuccess = document.getElementById('form-success');
var showFormAgain = document.getElementById('show-form-again');

if (contactForm && formSuccess) {
    contactForm.addEventListener('submit', function (event) {
        event.preventDefault();
        contactForm.style.display = 'none';
        formSuccess.classList.add('show');
    });
}

if (showFormAgain && contactForm && formSuccess) {
    showFormAgain.addEventListener('click', function () {
        formSuccess.classList.remove('show');
        contactForm.style.display = 'block';
    });
}


// filtros dos projetos
var projectFilters = document.querySelectorAll('.project-filter');
var projectCards = document.querySelectorAll('.project-card');
var projectsEmpty = document.getElementById('projects-empty');
var projectsCount = document.getElementById('projects-count');
var domainSlugs = {
    'Social Media Management': 'social-media',
    'Design graphique & signalétique': 'design-graphique',
    'Campagnes publicitaires Meta Ads': 'meta-ads'
};
function applyProjectFilter(filter, syncUrl) {
    var count = 0;
    projectFilters.forEach(function (item) {
        var active = item.getAttribute('data-filter') === filter;
        item.classList.toggle('active', active);
        item.setAttribute('aria-pressed', active ? 'true' : 'false');
    });
    projectCards.forEach(function (card) {
        var visible = filter === 'Tous' || card.getAttribute('data-category') === filter;
        card.hidden = !visible;
        card.style.display = visible ? '' : 'none';
        if (visible) count++;
    });
    if (projectsEmpty) projectsEmpty.hidden = count !== 0;
    if (projectsCount) projectsCount.textContent = count + (count === 1 ? ' réalisation' : ' réalisations');
    if (syncUrl) {
        var url = new URL(window.location.href);
        if (filter === 'Tous') url.searchParams.delete('domaine');
        else url.searchParams.set('domaine', domainSlugs[filter]);
        window.history.pushState(null, '', url);
    }
}
projectFilters.forEach(function (button) {
    button.addEventListener('click', function () {
        applyProjectFilter(button.getAttribute('data-filter'), true);
    });
});
if (projectFilters.length) {
    function filterFromUrl() {
        var slug = new URLSearchParams(window.location.search).get('domaine');
        var match = Object.keys(domainSlugs).find(function (name) {
            return domainSlugs[name] === slug;
        });
        applyProjectFilter(match || 'Tous', false);
    }
    filterFromUrl();
    window.addEventListener('popstate', filterFromUrl);
}


// modais
function openProject(id) {
    var modal = document.getElementById('project-' + id);
    var opened = document.querySelector('.project-modal.open');

    if (opened) {
        opened.classList.remove('open');
        opened.setAttribute('aria-hidden', 'true');
    }

    if (modal) {
        modal.classList.add('open');
        modal.setAttribute('aria-hidden', 'false');
        document.body.classList.add('modal-open');
    }
}

function closeProject(modal) {
    if (!modal) {
        return;
    }

    modal.classList.remove('open');
    modal.setAttribute('aria-hidden', 'true');
    document.body.classList.remove('modal-open');

    modal.querySelectorAll('video').forEach(function (video) {
        video.pause();
    });
}

projectCards.forEach(function (card) {
    if (card.tagName.toLowerCase() !== 'a') {
        card.addEventListener('click', function () {
            openProject(card.getAttribute('data-project'));
        });
    }
});

document.querySelectorAll('[data-close-modal]').forEach(function (button) {
    button.addEventListener('click', function () {
        closeProject(button.closest('.project-modal'));
    });
});

document.querySelectorAll('[data-open-project]').forEach(function (button) {
    button.addEventListener('click', function () {
        openProject(button.getAttribute('data-open-project'));
    });
});

document.addEventListener('keydown', function (event) {
    if (event.key == 'Escape') {
        closeProject(document.querySelector('.project-modal.open'));
    }
});


// carrosseis
document.querySelectorAll('[data-carousel]').forEach(function (carousel) {
    var track = carousel.querySelector('.simple-carousel-track');
    var left = carousel.querySelector('[data-carousel-prev]');
    var right = carousel.querySelector('[data-carousel-next]');

    if (track && left) {
        left.addEventListener('click', function () {
            track.scrollLeft = track.scrollLeft - track.clientWidth;
        });
    }

    if (track && right) {
        right.addEventListener('click', function () {
            track.scrollLeft = track.scrollLeft + track.clientWidth;
        });
    }
});
