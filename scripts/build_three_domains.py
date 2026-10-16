#!/usr/bin/env python3
"""Construit la galerie des trois expertises à partir des vrais médias SB22."""
from pathlib import Path
from html import escape

ROOT=Path(__file__).resolve().parents[1]/"maquettes"/"version-b"
PAGE=ROOT/"pages"/"projets"/"projets.html"
original=PAGE.read_text(encoding="utf-8")

CASES=[
    dict(slug="kuba-home",client="Kuba Home",sector="Aménagement intérieur",domain="social-media",category="Social Media Management",year="2026",
      intro="Une vitrine digitale premium pour les créations de Kuba Home.",
      objective="Valoriser les cuisines, salles de bain et dressings de l’enseigne sur Instagram, avec une diffusion complémentaire sur Facebook.",
      intervention="Définition de la ligne éditoriale, création des contenus, planification des publications et suivi de la communication.",
      realisations="Publications et déclinaisons visuelles cohérentes avec le positionnement premium de la marque.",
      cover="kuba/kuba-whatsapp/kuba-carousel-cover.jpg",
      gallery=[
       ("kuba/kuba-instagram/kuba-instagram-02.jpg","Publication Instagram — visuel de réalisation"),
       ("kuba/kuba-instagram/kuba-instagram-03.jpg","Publication Instagram — communication de marque"),
       ("kuba/kuba-instagram/kuba-instagram-01.jpg","Publication Instagram — création graphique"),
       ("kuba/kuba-before-after.jpg","Contenu comparatif avant / après"),
       ("kuba/kuba-whatsapp/kuba-whatsapp-01.jpg","Déclinaison graphique pour les réseaux sociaux"),
       ("kuba/kuba-instagram/kuba-instagram-04.jpg","Autre publication de la série"),
      ]),
    dict(slug="plumes-social",client="Plumes de Cœur Éditions",sector="Édition",domain="social-media",category="Social Media Management",year="2026",
      intro="Faire connaître la maison d’édition et son univers sur les réseaux sociaux.",
      objective="Développer la visibilité de Plumes de Cœur Éditions et valoriser son univers éditorial sur Facebook et Instagram.",
      intervention="Conception de publications sociales et développement d’une communication graphique cohérente.",
      realisations="Sélection de créations éditoriales pour les réseaux sociaux, sans supports de signalétique.",
      cover="plumes-de-coeur/plumes-social/sortie-polar.jpg",
      gallery=[
       ("plumes-de-coeur/plumes-social/sortie-polar.jpg","Publication sociale — actualité éditoriale"),
       ("plumes-de-coeur/plumes-social/aventure-editoriale.jpg","Publication sociale — univers de la maison d’édition"),
       ("plumes-de-coeur/plumes-social/lecteurs.jpg","Publication sociale — lecteurs et littérature"),
       ("plumes-de-coeur/plumes-social/catalogue-publics.jpg","Publication sociale — catalogue et nouveautés"),
       ("plumes-de-coeur/plumes-social/festival-yann-thomas.jpg","Publication sociale — événement culturel"),
       ("plumes-de-coeur/plumes-social/zoom-auteur.jpg","Publication sociale — mise en valeur d’un auteur"),
      ]),
    dict(slug="plumes-signaletique",client="Plumes de Cœur Éditions",sector="Édition",domain="design-graphique",category="Design graphique & signalétique",year="2026",
      intro="Une identité éditoriale visible aussi dans l’espace physique.",
      objective="Renforcer la visibilité de la maison d’édition et traduire son identité à travers son environnement physique.",
      intervention="Conception graphique de la vitrine, création des supports de signalétique et cohérence de l’ensemble.",
      realisations="Habillage de vitrine, panneaux et vues des installations en situation.",
      cover="plumes-de-coeur/plumes-2.jpg",
      gallery=[
       ("plumes-de-coeur/plumes-2.jpg","Conception graphique et habillage de vitrine"),
       ("plumes-de-coeur/plumes-1.jpg","Panneau et signalétique extérieure"),
       ("plumes-de-coeur/plumes-3.jpg","Autre vue des supports en situation"),
       ("plumes-de-coeur/plumes-4.jpg","Détail de la réalisation graphique"),
      ]),
    dict(slug="kid-fitness-lexy",client="Kid Fitness Lexy",sector="Activités pour enfants",domain="meta-ads",category="Campagnes publicitaires Meta Ads",year="Janvier 2026",
      intro="Promouvoir les journées portes ouvertes et encourager les inscriptions.",
      objective="Faire connaître les journées portes ouvertes de janvier 2026 et attirer de nouvelles familles.",
      intervention="Conception d’une campagne publicitaire destinée à Facebook et Instagram, avec supports adaptés aux publications et stories.",
      realisations="Visuel promotionnel et vidéo publicitaire mettant en avant l’événement.",
      cover="kid-fitness/kid-fitness-poster.jpg",
      gallery=[
       ("kid-fitness/kid-fitness-poster.jpg","Support graphique promotionnel de la campagne"),
      ],
      video="kid-fitness/kid-fitness-meta.mp4",
      video_poster="kid-fitness/kid-fitness-video-cover.jpg",
      video_title="La vidéo publicitaire"),
    dict(slug="youplaboom-meta",client="Youplaboom",sector="Petite enfance",domain="meta-ads",category="Campagnes publicitaires Meta Ads",year="2026",
      intro="Développer la visibilité locale de la microcrèche.",
      objective="Faire connaître la microcrèche auprès des familles et encourager les demandes d’inscription.",
      intervention="Création d’une vidéo promotionnelle pour une campagne Meta Ads diffusée sur Facebook et Instagram.",
      realisations="Vidéo publicitaire verticale, également adaptée à une diffusion au format Reel.",
      cover="youplaboom/youplaboom-meta-cover.jpg",
      gallery=[],
      video="youplaboom/youplaboom-meta.mp4",
      video_poster="youplaboom/youplaboom-meta-cover.jpg",
      video_title="La campagne vidéo Meta Ads"),
]

def esc(x):return escape(str(x),quote=True)
def asset(x):return "../../assets/images/projects/"+x
def vid(x):return "../../assets/videos/"+x
def media_figure(item):
    img,title=item
    if not (ROOT/"assets/images/projects"/img).is_file():raise FileNotFoundError(img)
    return (f'<figure class="book-case-figure">'
            f'<img src="{esc(asset(img))}" loading="lazy" alt="{esc(title)}">'
            f'<figcaption>{esc(title)}</figcaption></figure>')

def make_card(item,index):
    if not (ROOT/"assets/images/projects"/item["cover"]).is_file():raise FileNotFoundError(item["cover"])
    return f'''
<article data-reveal class="project-card kg-project-card sb22-domain-card" data-domain="{item["domain"]}"
   tabindex="0" role="button" data-project="{item["slug"]}" aria-label="Découvrir {esc(item["client"])} — {esc(item["category"])}">
    <div class="kg-card-visuals"><img src="{esc(asset(item["cover"]))}" alt="{esc(item["client"])} — réalisation SB22 Agency" loading="lazy"></div>
    <div class="kg-card-top"><span>{esc(item["category"])}</span></div>
    <div class="kg-card-bottom">
        <span class="kg-card-number">{index:02d} / {esc(item["sector"])}</span>
        <h2>{esc(item["client"])}</h2>
        <p>{esc(item["intro"])}</p>
        <span class="kg-card-discover">Voir les réalisations <svg class="sb22-arrow" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></span>
    </div>
</article>'''

def make_modal(item,index):
    slug=item["slug"]
    prev=CASES[index-1]["slug"]
    next_=CASES[(index+1)%len(CASES)]["slug"]
    fields=[("Le client",item["intro"]),("Son objectif",item["objective"]),("Notre intervention",item["intervention"])]
    summary=''.join(f'<div><span>{esc(head)}</span><p>{esc(txt)}</p></div>' for head,txt in fields)
    gallery=''
    if item["gallery"]:
        figures='\n'.join(map(media_figure,item["gallery"]))
        gallery=f'''<section class="book-case-section" aria-label="Réalisations graphiques">
        <h3>Les réalisations</h3>
        <div class="book-case-media-grid">{figures}</div>
        </section>'''
    video=''
    if item.get("video"):
        if not (ROOT/"assets/videos"/item["video"]).is_file():raise FileNotFoundError(item["video"])
        if not (ROOT/"assets/images/projects"/item["video_poster"]).is_file():raise FileNotFoundError(item["video_poster"])
        video=f'''<section class="sb22-video-feature" aria-label="Vidéo publicitaire">
        <div class="sb22-video-copy">
            <span>Les réalisations · en vidéo</span><h3>{esc(item["video_title"])}</h3>
            <p>{esc(item["realisations"])}</p>
        </div>
        <div class="sb22-video-container">
            <video controls playsinline preload="metadata" poster="{esc(asset(item["video_poster"]))}" aria-label="{esc(item["video_title"])}">
              <source src="{esc(vid(item["video"]))}" type="video/mp4">
              Votre navigateur ne prend pas en charge cette vidéo.
            </video>
        </div></section>'''
    return f'''
<div class="project-modal" id="project-{slug}" aria-hidden="true" role="dialog" aria-modal="true" aria-label="Réalisations {esc(item["client"])} — {esc(item["category"])}">
    <div class="project-modal-background" data-close-modal></div>
    <article class="project-modal-box book-modal-box">
        <div class="project-modal-top">
            <button type="button" data-close-modal>← Tous les projets</button>
            <span>SB22 Agency · Portfolio</span>
            <button class="modal-x" type="button" data-close-modal aria-label="Fermer la fiche">×</button>
        </div>
        <header class="book-case-heading">
            <p class="book-overline">{esc(item["sector"])} / {esc(item["year"])}</p>
            <h2>{esc(item["client"])}</h2>
            <p>{esc(item["intro"])}</p>
            <span class="book-case-category">{esc(item["category"])}</span>
        </header>
        <figure class="book-case-cover"><img src="{esc(asset(item["cover"]))}" alt="Présentation du projet {esc(item["client"])}" loading="lazy"></figure>
        <section class="book-case-story" aria-label="Le projet en bref"><div class="sb22-case-context">{summary}</div></section>
        <div class="book-case-media">{video}{gallery}</div>
        <nav class="book-case-bottom" aria-label="Projets précédent et suivant">
            <button type="button" data-open-project="{prev}">← Projet précédent</button>
            <button type="button" data-open-project="{next_}">Projet suivant →</button>
        </nav>
    </article>
</div>'''

def main_markup():
    buttons=[
    ("tous","Toutes les réalisations","05"),
    ("social-media","Social Media Management","02"),
    ("design-graphique","Design graphique & signalétique","01"),
    ("meta-ads","Campagnes publicitaires Meta Ads","02")
    ]
    filter_html="\n".join(f'<button class="kg-filter-pill sb22-domain-filter{" active" if key=="tous" else ""}" type="button" data-domain-filter="{key}" aria-pressed="{"true" if key=="tous" else "false"}"><span>{esc(label)}</span><small>{number}</small></button>' for key,label,number in buttons)
    cards="\n".join(make_card(item,i+1) for i,item in enumerate(CASES))
    modals="\n".join(make_modal(item,i) for i,item in enumerate(CASES))
    return f'''<main class="projects-page kg-page sb22-domain-page">
    <div class="kg-shell">
        <aside class="kg-filters" aria-label="Navigation par domaine d’expertise">
            <div class="kg-filter-inner">
                <p class="kg-sidebar-overline">SB22 Agency · Portfolio</p>
                <h1>Nos<br>projets<span>.</span></h1>
                <p class="sb22-domain-aside-intro">Découvrez nos réalisations par domaine d’expertise.</p>
                <div class="kg-filter-group">
                    <h2>Domaines d’expertise</h2>
                    <nav class="sb22-domain-filters" aria-label="Sélection du domaine">
                        {filter_html}
                    </nav>
                </div>
                <a class="kg-sidebar-contact" href="../contact/contact.html">Parlons de votre projet</a>
            </div>
        </aside>
        <section class="kg-work" aria-label="Galerie des réalisations">
            <div class="kg-work-heading">
                <div>
                    <span class="kg-eyebrow">SB22 Agency / Réalisations</span>
                    <h2 class="sb22-domain-heading" id="domain-heading">Des projets concrets, des identités singulières.</h2>
                    <p id="domain-description">Publications, supports graphiques et campagnes Meta Ads. Le travail de la SB22 Agency, présenté par expertise.</p>
                </div>
                <span class="sb22-domain-count" id="domain-count" aria-live="polite">05 réalisations</span>
            </div>
            <div class="kg-card-deck" id="projects-grid" tabindex="0">
                {cards}
            </div>
            <div class="kg-gallery-foot"><span>Communication · Création graphique · Publicité</span><a href="../../index.html">Retour à l’accueil</a></div>
        </section>
    </div>
    {modals}
</main>'''

before=original.split("<main",1)[0]
after=original.split("</main>",1)[1]
final=before+main_markup()+after
domain_script='<script src="../../assets/js/feedback-domains.js" defer></script>'
if domain_script not in final:
    final=final.replace("</body>", "    "+domain_script+"\n</body>",1)
PAGE.write_text(final,encoding="utf-8")
print("5 cartes, 5 fiches et trois domaines insérés dans:",PAGE)
