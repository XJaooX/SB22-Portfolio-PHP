(function () {
    var menu = document.getElementById('mobile-menu');
    var menuButton = document.getElementById('mobile-menu-button');
    if (menu && menuButton) {
        menuButton.setAttribute('aria-controls','mobile-menu');
        menuButton.setAttribute('aria-expanded',menu.classList.contains('open') ? 'true' : 'false');
        menuButton.addEventListener('click',function(){
            menuButton.setAttribute('aria-expanded',menu.classList.contains('open') ? 'true' : 'false');
        });
        document.addEventListener('keydown',function(evt){
            if (evt.key==='Escape' && menu.classList.contains('open')) {
                menu.classList.remove('open');
                menuButton.classList.remove('open');
                menuButton.setAttribute('aria-expanded','false');
                menuButton.focus();
            }
        });
    }
    if (!('IntersectionObserver' in window) || window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return;
    }
    var targets = Array.prototype.slice.call(document.querySelectorAll('[data-reveal]'));
    if (!targets.length) return;
    document.body.classList.add('sb22-motion-ready');
    var observer = new IntersectionObserver(function(entries){
        entries.forEach(function(entry) {
            if(entry.isIntersecting){
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    },{threshold:.06,rootMargin:'0px 0px 30px 0px'});
    targets.forEach(function(el){
        if (el.getBoundingClientRect().top < window.innerHeight * .9) {
            el.classList.add('is-visible');
        } else {
            observer.observe(el);
        }
    });
}());
