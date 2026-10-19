/* Filtres métier — une seule galerie et cinq dossiers distincts. */
(function () {
  'use strict';
  const page = document.querySelector('.sb22-domain-page');
  if (!page) return;
  const filters = [...page.querySelectorAll('[data-domain-filter]')];
  const cards = [...page.querySelectorAll('.sb22-domain-card')];
  const heading = document.getElementById('domain-heading');
  const description = document.getElementById('domain-description');
  const count = document.getElementById('domain-count');
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const domains = {
    tous: {
      title: 'Des projets concrets, des identités singulières.',
      description: 'Publications, supports graphiques et campagnes Meta Ads. Le travail de SB22 Agency, présenté par expertise.'
    },
    'social-media': {
      title: 'Une communication pensée pour les réseaux.',
      description: 'Créations Instagram et Facebook pour Kuba Home et Plumes de Cœur Éditions.'
    },
    'design-graphique': {
      title: 'Des identités visibles dans l’espace.',
      description: 'Habillage de vitrine et signalétique pour Plumes de Cœur Éditions.'
    },
    'meta-ads': {
      title: 'Des campagnes conçues pour être vues.',
      description: 'Campagnes Meta Ads et vidéos publicitaires de Kid Fitness Lexy et Youplaboom.'
    }
  };
  let selected = 'tous';
  function filter(domain, remember) {
    if (!Object.prototype.hasOwnProperty.call(domains,domain)) domain='tous';
    const changed = selected!==domain;
    selected=domain;
    filters.forEach(button=>{
      const active=button.dataset.domainFilter===domain;
      button.classList.toggle('active',active);
      button.setAttribute('aria-pressed',String(active));
    });
    heading.textContent=domains[domain].title;
    description.textContent=domains[domain].description;
    let visible=0;
    cards.forEach(card=>{
      const show=domain==='tous' || card.dataset.domain===domain;
      card.hidden=!show;
      if (show) {
        card.classList.add('is-visible');
        if (changed && !prefersReducedMotion && card.animate) {
          card.animate([
            {opacity:0,transform:'translateY(20px) scale(.985)'},
            {opacity:1,transform:'translateY(0) scale(1)'}
          ],{duration:520,delay:visible*65,fill:'none',easing:'cubic-bezier(.2,.75,.2,1)'});
        }
        visible++;
      }
    });
    count.textContent=String(visible).padStart(2,'0')+' réalisation'+(visible>1?'s':'');
    if (remember) {
      const url=new URL(window.location.href);
      if (domain==='tous')url.searchParams.delete('domaine');
      else url.searchParams.set('domaine',domain);
      window.history.pushState({domain},'',url.pathname+url.search+url.hash);
    }
  }
  filters.forEach(button=>{
    button.addEventListener('click',()=>filter(button.dataset.domainFilter,true));
  });
  window.addEventListener('popstate',()=>{
    const url=new URL(window.location.href);
    filter(url.searchParams.get('domaine') || 'tous',false);
  });
  const params=new URLSearchParams(window.location.search);
  let initial=params.get('domaine') || 'tous';
  if (!domains[initial])initial='tous';
  filter(initial,false);
  const hash=decodeURIComponent(window.location.hash || '');
  if (hash==='#project-plumes-de-coeur') {
    const target=initial==='social-media'?'plumes-social':'plumes-signaletique';
    const link=document.querySelector('[data-project="'+target+'"]');
    if (link) {
      window.history.replaceState(null,'',window.location.pathname+window.location.search+'#project-'+target);
      link.click();
    }
  } else if (hash.startsWith('#project-')) {
    const slug=hash.slice('#project-'.length);
    const card=cards.find(el=>el.dataset.project===slug);
    if(card && card.hidden)filter(card.dataset.domain,false);
  }
}());
