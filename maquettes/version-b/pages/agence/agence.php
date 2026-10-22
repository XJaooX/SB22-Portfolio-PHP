<?php
$basePath = '../../';
$currentPage = 'agence';
$pageTitle = 'À propos — SB22';
$bodyClass = 'portfolio-inner-page';
$styles = ['style.css','portfolio-layout.css','design-unified.css','brand-official.css','maquette-watermark.css','feedback-sebaa.css','feedback-final.css','feedback-wow.css'];
$scripts = ['main.js','feedback-final.js','feedback-wow.js'];
require __DIR__ . '/../../includes/header.php';
require __DIR__ . '/../../includes/navbar.php';
?>
<div id="top"></div>
<main class="book-compact-page">
    <p class="book-overline">À propos</p>
    <h1>Des idées, <em>des réalisations.</em></h1>
    <p class="book-lead">SB22 accompagne les entreprises dans leur communication, leurs relations publiques, leur stratégie digitale et leur création de contenus. Nous construisons des messages et des supports adaptés à chaque projet, de la première idée jusqu’à sa diffusion.</p>
    <a class="book-inline-cta" href="../projets/projets.php">Voir les projets <svg class="sb22-arrow" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a>
    <section class="sb22-about-story" aria-labelledby="sb22-about-title" data-reveal>
    <div class="sb22-about-copy">
        <p class="book-overline">L’AGENCE</p>
        <h2 id="sb22-about-title">Des échanges, puis des créations concrètes.</h2>
        <p>Chaque projet commence par une écoute attentive : quels publics toucher, quel message transmettre et quels canaux utiliser ? Notre réponse peut prendre la forme d’une stratégie de communication, d’une action de relations publiques ou d’un contenu visuel.</p>
        <p>Nos réalisations réunissent publications, identités graphiques, campagnes digitales, vidéos et interviews, avec un même objectif : donner une image claire et cohérente de chaque activité.</p>
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
        <article><span>01</span><h3>Communication & relations publiques</h3><p>Définir le message, accompagner la prise de parole et développer la visibilité des projets.</p></article>
        <article><span>02</span><h3>Stratégie digitale</h3><p>Déployer des contenus et des campagnes adaptés aux publics et aux plateformes.</p></article>
        <article><span>03</span><h3>Création de contenus</h3><p>Imaginer et produire des visuels, des vidéos et des formats éditoriaux qui racontent un projet.</p></article>
    </div>
</section>
    <p class="book-small">Relations publiques, communication 360°, marketing digital et création de contenu. <a href="../expertises/expertises.php">Domaines d’intervention <svg class="sb22-arrow" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a></p>
</main>
<?php require __DIR__ . '/../../includes/footer.php'; ?>
