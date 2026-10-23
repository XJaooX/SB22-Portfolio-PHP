/* Carrousels locaux : images défilables au toucher ou avec les flèches. */
(function () {
  'use strict';
  document.querySelectorAll('[data-sb22-carousel]').forEach(function (carousel) {
    const viewport = carousel.querySelector('.sb22-carousel-viewport');
    const track = carousel.querySelector('.sb22-carousel-track');
    const slides = Array.from(carousel.querySelectorAll('.sb22-carousel-slide'));
    const previous = carousel.querySelector('[data-sb22-prev]');
    const next = carousel.querySelector('[data-sb22-next]');
    const current = carousel.querySelector('[data-sb22-current]');
    if (!viewport || !track || !slides.length) return;
    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    let index = 0;
    function updateCount() {
      current.textContent = String(index + 1).padStart(2, '0');
    }
    function move(delta) {
      index = (index + delta + slides.length) % slides.length;
      viewport.scrollTo({
        left: slides[index].offsetLeft - track.offsetLeft,
        behavior: reducedMotion ? 'auto' : 'smooth'
      });
      updateCount();
    }
    previous.addEventListener('click', function () { move(-1); });
    next.addEventListener('click', function () { move(1); });
    viewport.addEventListener('keydown', function (event) {
      if (event.key === 'ArrowRight') { event.preventDefault(); move(1); }
      if (event.key === 'ArrowLeft') { event.preventDefault(); move(-1); }
    });
    let pending = false;
    viewport.addEventListener('scroll', function () {
      if (pending) return;
      pending = true;
      window.requestAnimationFrame(function () {
        pending = false;
        const position = viewport.scrollLeft;
        let nearest = 0;
        let distance = Infinity;
        slides.forEach(function (slide, i) {
          const diff = Math.abs(position - (slide.offsetLeft - track.offsetLeft));
          if (diff < distance) { distance = diff; nearest = i; }
        });
        index = nearest;
        updateCount();
      });
    }, {passive:true});
    updateCount();
  });
}());
