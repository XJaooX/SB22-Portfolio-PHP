<?php
$basePath = '../../';
$currentPage = 'agence';
$pageTitle = 'À propos — S’B 22';
$bodyClass = 'portfolio-inner-page';
$styles = ['style.css','portfolio-layout.css','design-unified.css','brand-official.css','feedback-sebaa.css','feedback-final.css','feedback-wow.css'];
$scripts = ['main.js','feedback-final.js','feedback-wow.js'];
require __DIR__ . '/../../includes/header.php';
require __DIR__ . '/../../includes/navbar.php';
?>
<div id="top"></div>
<main class="book-compact-page">
    <p class="book-overline">À propos</p>
    <h1>Des idées, <em>des réalisations.</em></h1>
    <p class="book-lead">S’B 22 est une agence de communication 360° et de relations publiques, qui accompagne les entreprises dans leur visibilité, leur image de marque et leur stratégie de communication. Notre approche associe stratégie, créativité et relations humaines.</p>
    <a class="book-inline-cta" href="../projets/projets.php">Voir les projets <svg class="sb22-arrow" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a>
    <section class="sb22-about-story" aria-labelledby="sb22-about-title" data-reveal>
    <div class="sb22-about-copy">
        <p class="book-overline">L’AGENCE</p>
        <h2 id="sb22-about-title">La communication 360° au service de chaque projet.</h2>
        <p>S’B 22 réunit expertise en communication 360° et relations publiques : stratégie, réseaux sociaux, identité graphique, signalétique, campagnes publicitaires et production vidéo. Chaque support s’inscrit dans une démarche de communication adaptée aux objectifs du client.</p>
        <p>De l’aménagement intérieur à l’édition, des activités pour enfants aux événements culturels et au bien-être, nous accompagnons des structures de secteurs différents, en privilégiant l’écoute, la proximité et l’adaptation à leurs besoins.</p>
        <a class="sb22-about-link" href="../projets/projets.php">Découvrir les réalisations <span aria-hidden="true">→</span></a>
    </div>
    <div class="sb22-about-images">
        <figure><img src="../../assets/images/projects/kuba/kuba-instagram/kuba-instagram-02.jpg" alt="Publication créée pour Kuba Home" loading="lazy"><figcaption>Publications · Kuba Home</figcaption></figure>
        <figure><img src="../../assets/images/projects/plumes-de-coeur/plumes-2.jpg" alt="Support de signalétique pour Plumes de Cœur" loading="lazy"><figcaption>Signalétique · Plumes de Cœur</figcaption></figure>
    </div>
</section>
<section class="sb22-about-process" aria-label="Notre façon de travailler" data-reveal>
    <p class="book-overline">NOS DOMAINES D’EXPERTISE</p>
    <div class="sb22-about-process-grid">
        <article><span>01</span><h3>Communication & relations publiques</h3><p>Conseiller les entreprises, travailler leur positionnement et leurs relations publiques, puis coordonner les actions de communication.</p></article>
        <article><span>02</span><h3>Stratégie digitale</h3><p>Adapter les réseaux sociaux et les campagnes Meta Ads aux besoins de chaque activité et aux publics concernés.</p></article>
        <article><span>03</span><h3>Création de contenus</h3><p>Créer des publications, supports graphiques, vidéos et signalétiques en gardant une relation de proximité avec le client.</p></article>
    </div>
</section>
    <p class="book-small">Relations publiques, communication 360°, marketing digital et création de contenu. <a href="../expertises/expertises.php">Domaines d’intervention <svg class="sb22-arrow" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a></p>
</main>
<?php require __DIR__ . '/../../includes/footer.php'; ?>
