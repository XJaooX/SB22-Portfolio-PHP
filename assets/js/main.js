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
