// Store the elements used by the mobile navigation.
const menuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');
const siteHeader = document.getElementById('site-header');

// Toggle the mobile menu when the visitor clicks its button.
if (menuButton && mobileMenu) {
    menuButton.addEventListener('click', function () {
        menuButton.classList.toggle('open');
        mobileMenu.classList.toggle('open');
    });
}

// Make the navigation background more opaque after scrolling.
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
// AGENCY METHOD ON MOBILE
// =============================

// Update the counter when swiping between stages.
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

        // Update the counter and active dot.
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


// Expertise accordions.
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


// Contact form.
var contactForm = document.getElementById('contact-form');
var formSuccess = document.getElementById('form-success');
var showFormAgain = document.getElementById('show-form-again');

if (contactForm && contactForm.dataset.demo === 'true' && formSuccess) {
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


var projectCards = document.querySelectorAll('.project-card');

// Project modals.
function openProject(id) {
    var modal = document.getElementById('project-' + id);
    var opened = document.querySelector('.project-modal.open');

    if (opened) {
        closeProject(opened);
    }

    if (modal) {
        modal.classList.add('open');
        modal.setAttribute('aria-hidden', 'false');
        document.body.classList.add('modal-open');
        modal.scrollTop = 0;
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
    card.addEventListener('click', function () {
        openProject(card.getAttribute('data-project'));
    });

    card.addEventListener('keydown', function (event) {
        if (event.key === 'Enter' || event.key === ' ') {
            event.preventDefault();
            openProject(card.getAttribute('data-project'));
        }
    });
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


// Carousels.
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

window.addEventListener('DOMContentLoaded', function () {
    const hash = decodeURIComponent(window.location.hash || '').replace(/^#project-/, '');
    if (hash && document.getElementById('project-' + hash)) {
        openProject(hash);
    }
    const menu = document.getElementById('mobile-menu');
    if (menu) {
        menu.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                menu.classList.remove('open');
                const button = document.getElementById('mobile-menu-button');
                if (button) button.classList.remove('open');
            });
        });
    }
});

const showcaseLinks = document.querySelectorAll('[data-showcase-trigger]');
const showcaseStage = document.querySelector('.pr-stage');
const showcaseImage = document.getElementById('pr-stage-image');
const showcaseSecondary = document.getElementById('pr-stage-secondary');
const showcaseImages = document.getElementById('pr-stage-images');
const showcaseTitle = document.getElementById('pr-stage-name');
const showcaseCategory = document.getElementById('pr-stage-category');
const showcaseSector = document.getElementById('pr-stage-sector');
const showcaseNumber = document.getElementById('pr-stage-index');
const showcaseCTA = document.getElementById('pr-stage-link');

if (showcaseStage && showcaseImage && showcaseLinks.length) {
    const selectShowcase = function(link) {
        showcaseLinks.forEach(function(other) {
            other.classList.toggle('is-active', other === link);
        });
        showcaseStage.dataset.active = link.getAttribute('href').split('project-').pop();
        showcaseImage.src = link.dataset.cover || link.dataset.image;
        if (showcaseImages) {
            showcaseImages.dataset.coverFit = link.dataset.coverFit || 'contain';
            showcaseImages.style.backgroundImage = link.dataset.cover ? 'url("' + link.dataset.cover + '")' : '';
        }
        showcaseImage.alt = link.dataset.name;
        if (showcaseSecondary && showcaseImages) {
            const secondary = link.dataset.secondary || '';
            showcaseImages.classList.toggle('has-pair', Boolean(secondary));
            showcaseSecondary.hidden = !secondary;
            showcaseSecondary.src = secondary || '';
            showcaseSecondary.alt = secondary ? 'Autre création pour ' + link.dataset.name : '';
        }
        showcaseTitle.textContent = link.dataset.name;
        showcaseCategory.textContent = link.dataset.category;
        showcaseSector.textContent = link.dataset.sector;
        showcaseNumber.textContent = link.dataset.index;
        showcaseCTA.href = link.href;
    };

    showcaseLinks.forEach(function(link) {
        link.addEventListener('mouseenter', function() {
            if (window.matchMedia('(hover: hover)').matches) selectShowcase(link);
        });
        link.addEventListener('focus', function() {
            if (window.matchMedia('(hover: hover)').matches) selectShowcase(link);
        });
        link.addEventListener('click', function(event) {
            if (window.matchMedia('(hover: none)').matches) {
                selectShowcase(link);
            }
        });
    });
}

const projectDeck = document.querySelector('.kg-card-deck');
if (projectDeck) {
    const scrollDeck = function(direction) {
        const firstCard = projectDeck.querySelector('.kg-project-card');
        if (!firstCard) return;
        const gap = parseFloat(getComputedStyle(projectDeck).gap) || 0;
        const distance = firstCard.getBoundingClientRect().width + gap;
        projectDeck.scrollBy({left: direction * distance, behavior: 'smooth'});
    };
    const previous = document.querySelector('[data-deck-prev]');
    const next = document.querySelector('[data-deck-next]');
    if (previous) previous.addEventListener('click', function(){ scrollDeck(-1); });
    if (next) next.addEventListener('click', function(){ scrollDeck(1); });
}
