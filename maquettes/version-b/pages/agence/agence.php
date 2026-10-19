<?php
$basePath = '../../';
$currentPage = 'agence';
$pageTitle = 'À propos — SB22 Agency';
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
    <p class="book-lead">SB22 Agency accompagne des entreprises et des projets dans leur communication, leur image et leur visibilité. Derrière chaque réalisation, il y a un besoin concret et une manière de le traduire en images.</p>
    <a class="book-inline-cta" href="../projets/projets.php">Voir les projets <svg class="sb22-arrow" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a>
    <section class="sb22-about-story" aria-labelledby="sb22-about-title" data-reveal>
    <div class="sb22-about-copy">
        <p class="book-overline">L’AGENCE</p>
        <h2 id="sb22-about-title">Des échanges, puis des créations concrètes.</h2>
        <p>Nous partons de l’activité du client et du message à transmettre. Selon le projet, cela prend la forme d’une publication, d’une affiche, d’une vidéo ou d’un support imprimé.</p>
        <p>Ce portfolio rassemble ces différents formats pour montrer notre travail, au-delà d’une simple présentation de services.</p>
        <a class="sb22-about-link" href="../projets/projets.php">Découvrir les réalisations <span aria-hidden="true">→</span></a>
    </div>
    <div class="sb22-about-images">
        <figure><img src="../../assets/images/projects/kuba/kuba-instagram/kuba-instagram-02.jpg" alt="Publication créée pour Kuba Home" loading="lazy"><figcaption>Publications · Kuba Home</figcaption></figure>
        <figure><img src="../../assets/images/projects/plumes-de-coeur/plumes-2.jpg" alt="Support de signalétique pour Plumes de Cœur" loading="lazy"><figcaption>Signalétique · Plumes de Cœur</figcaption></figure>
    </div>
</section>
<section class="sb22-about-process" aria-label="Notre façon de travailler" data-reveal>
    <p class="book-overline">COMMENT NOUS TRAVAILLONS</p>
    <div class="sb22-about-process-grid">
        <article><span>01</span><h3>Comprendre</h3><p>Identifier le projet, le public et le message essentiel.</p></article>
        <article><span>02</span><h3>Créer</h3><p>Concevoir des supports adaptés à chaque format.</p></article>
        <article><span>03</span><h3>Montrer</h3><p>Mettre en avant le travail réalisé, sans discours inutile.</p></article>
    </div>
</section>
    <p class="book-small">Relations publiques, communication 360°, marketing digital et création de contenu. <a href="../expertises/expertises.php">Domaines d’intervention <svg class="sb22-arrow" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a></p>
</main>
<?php require __DIR__ . '/../../includes/footer.php'; ?>
