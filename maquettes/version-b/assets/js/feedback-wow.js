(function () {
  "use strict";
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    return;
  }
  var body=document.body;
  if (!body) return;
  var cards=Array.prototype.slice.call(document.querySelectorAll('[data-showcase-trigger]'));
  cards.forEach(function(card,index){
    card.style.setProperty('--sb22-stagger',String(index));
  });
  Array.prototype.slice.call(document.querySelectorAll('.kg-project-card')).forEach(function(card,index){
    card.style.setProperty('--sb22-stagger',String(index % 5));
  });
  body.classList.add('sb22-wow-ready');

  var stage=document.querySelector('.pr-stage');
  if (stage && cards.length) {
    var lastActive=stage.getAttribute('data-active');
    var switchTimer=null;
    function announceSwitch(){
      var now=stage.getAttribute('data-active');
      if (!now || now===lastActive) return;
      lastActive=now;
      stage.classList.remove('is-switching');
      void stage.offsetWidth;
      stage.classList.add('is-switching');
      if (switchTimer) clearTimeout(switchTimer);
      switchTimer=setTimeout(function(){
        stage.classList.remove('is-switching');
      },920);
    }
    cards.forEach(function(card) {
      card.addEventListener('mouseenter',announceSwitch);
      card.addEventListener('focus',announceSwitch);
      card.addEventListener('click',announceSwitch);
    });
  }

  var progress=document.createElement('div');
  progress.className='sb22-scroll-progress';
  progress.setAttribute('aria-hidden','true');
  body.appendChild(progress);
  var progressRequested=false;
  function updateProgress(){
    progressRequested=false;
    var max=document.documentElement.scrollHeight-window.innerHeight;
    var ratio=max>0 ? Math.min(1,Math.max(0,window.scrollY/max)) : 0;
    progress.style.setProperty('--sb22-scroll',ratio.toFixed(4));
  }
  function requestProgress(){
    if (!progressRequested) {
      progressRequested=true;
      requestAnimationFrame(updateProgress);
    }
  }
  window.addEventListener('scroll',requestProgress,{passive:true});
  window.addEventListener('resize',requestProgress,{passive:true});
  updateProgress();
}());
