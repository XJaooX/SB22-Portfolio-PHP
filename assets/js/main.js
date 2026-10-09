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
