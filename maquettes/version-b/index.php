<?php
$basePath = '';
$currentPage = 'accueil';
$pageTitle = 'Portfolio — SB22 Agency';
$bodyClass = 'portfolio-immersive';
$styles = ['style.css','portfolio-layout.css','design-unified.css','brand-official.css','showcase-cover.css','maquette-watermark.css','feedback-sebaa.css','feedback-final.css','feedback-wow.css'];
$scripts = ['main.js','feedback-final.js','feedback-wow.js'];
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/navbar.php';
?>
<main class="pr-home sb22-home" id="top">
    <aside class="pr-rail" aria-label="Présentation et projets">
        <div class="pr-rail-top">
            <p class="sb22-home-kicker">SB22 Agency <span>· Portfolio</span></p>
            <h1 class="sb22-home-title">Chaque projet raconte <em>une histoire.</em></h1>
            <p class="pr-rail-intro">De la stratégie aux réalisations, découvrez comment SB22 Agency accompagne les entreprises dans leur communication, leur image et leur visibilité, à travers des projets concrets.</p>
        </div>
        <div class="pr-rail-projects" aria-label="Choisir un projet">
            <div class="pr-rail-label"><span>Projets sélectionnés</span><span>04 projets</span></div>
            <a class="pr-rail-card is-active" href="pages/projets/projets.php#project-kuba-home" data-showcase-trigger data-image="assets/images/projects/kuba/kuba-whatsapp/kuba-carousel-cover.jpg" data-secondary="" data-name="Kuba Home" data-category="Publications &amp; stratégie éditoriale" data-sector="Aménagement intérieur" data-index="01">
    <span class="pr-rail-thumb"><img src="assets/images/projects/kuba/kuba-whatsapp/kuba-carousel-cover.jpg" alt="" loading="lazy"></span>
    <span class="pr-rail-copy"><strong>Kuba Home</strong><small>Publications &amp; stratégie éditoriale</small></span>
    <span class="pr-rail-arrow" aria-hidden="true"><svg class="sb22-arrow" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></span>
</a><a class="pr-rail-card " href="pages/projets/projets.php?domaine=design-graphique#project-plumes-signaletique" data-showcase-trigger data-image="assets/images/projects/plumes-de-coeur/plumes-2.jpg" data-secondary="assets/images/projects/plumes-de-coeur/plumes-4.jpg" data-name="Plumes de Cœur" data-category="Identité visuelle &amp; signalétique" data-sector="Édition" data-index="02">
    <span class="pr-rail-thumb"><img src="assets/images/projects/plumes-de-coeur/plumes-2.jpg" alt="" loading="lazy"></span>
    <span class="pr-rail-copy"><strong>Plumes de Cœur</strong><small>Identité visuelle &amp; signalétique</small></span>
    <span class="pr-rail-arrow" aria-hidden="true"><svg class="sb22-arrow" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></span>
</a><a class="pr-rail-card " href="pages/projets/projets.php#project-kid-fitness-lexy" data-showcase-trigger data-image="assets/images/projects/kid-fitness/kid-fitness-poster.jpg" data-secondary="" data-name="Kid Fitness Lexy" data-category="Campagne &amp; vidéo" data-sector="Activités pour enfants" data-index="03">
    <span class="pr-rail-thumb"><img src="assets/images/projects/kid-fitness/kid-fitness-poster.jpg" alt="" loading="lazy"></span>
    <span class="pr-rail-copy"><strong>Kid Fitness Lexy</strong><small>Campagne &amp; vidéo</small></span>
    <span class="pr-rail-arrow" aria-hidden="true"><svg class="sb22-arrow" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></span>
</a><a class="pr-rail-card " href="pages/projets/projets.php#project-youplaboom-meta" data-showcase-trigger data-image="assets/images/projects/youplaboom/youplaboom-meta-cover.jpg" data-secondary="" data-name="Youplaboom" data-category="Vidéo promotionnelle" data-sector="Petite enfance" data-index="04">
    <span class="pr-rail-thumb"><img src="assets/images/projects/youplaboom/youplaboom-meta-cover.jpg" alt="" loading="lazy"></span>
    <span class="pr-rail-copy"><strong>Youplaboom</strong><small>Vidéo promotionnelle</small></span>
    <span class="pr-rail-arrow" aria-hidden="true"><svg class="sb22-arrow" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></span>
</a>
        </div>
        <div class="pr-rail-bottom"><span>Relations publiques & communication</span></div>
    </aside>
    <section class="pr-stage" data-active="kuba-home" aria-label="Aperçu des réalisations sélectionnées">
        <div class="pr-stage-top">
            <span>Une agence, des réalisations</span>
            <span class="sb22-stage-counter">01 / 04</span>
        </div>
        <div class="pr-stage-image" id="pr-stage-images" data-cover-fit="contain">
            <img id="pr-stage-image" src="assets/images/projects/kuba/kuba-whatsapp/kuba-carousel-cover.jpg" alt="Création graphique réalisée pour Kuba Home" fetchpriority="high">
            <img id="pr-stage-secondary" src="" alt="" hidden>
        </div>
        <div class="pr-stage-content">
            <div class="pr-stage-kicker"><span id="pr-stage-index">01</span><span> / 04</span><span class="pr-stage-separator"></span><span id="pr-stage-sector">Aménagement intérieur</span></div>
            <h2 id="pr-stage-name">Kuba Home</h2>
            <p id="pr-stage-category">Publications &amp; stratégie éditoriale</p>
            <a class="pr-stage-cta" id="pr-stage-link" href="pages/projets/projets.php#project-kuba-home">Découvrir le projet <svg class="sb22-arrow" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a>
        </div>
    <nav class="sb22-home-domains" aria-label="Explorer nos trois domaines">
    <a href="pages/projets/projets.php?domaine=social-media">Social Media</a>
    <a href="pages/projets/projets.php?domaine=design-graphique">Design graphique</a>
    <a href="pages/projets/projets.php?domaine=meta-ads">Meta Ads</a>
</nav>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
