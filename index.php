<?php
$basePath = '';
$currentPage = 'accueil';
$pageTitle = "SB22 Agency — Portfolio de réalisations · Maquette";
include 'includes/header.php';
include 'includes/navbar.php';
?>
<div id="top"></div>

<main class="portfolio-home">
    <section class="portfolio-intro">
        <div class="portfolio-intro-copy">
            <p class="portfolio-eyebrow"><span></span> SB22 Agency · Relations publiques & communication</p>
            <h1>Chaque projet raconte <em>une histoire.</em></h1>
            <p class="portfolio-lead">Des projets concrets, des identités singulières. Découvrez une sélection de réalisations signées SB22 Agency.</p>
            <a class="portfolio-text-link" href="#realisations">Découvrir nos réalisations <span aria-hidden="true">↘</span></a>
        </div>

        <div class="intro-gallery" aria-label="Exemples de créations et de projets de SB22 Agency">
            <figure class="intro-gallery-main">
                <img src="assets/images/projects/kuba/kuba-instagram/kuba-instagram-01.jpg" alt="Exemple de création visuelle réalisée pour Kuba Home" fetchpriority="high">
                <figcaption>Kuba Home · Communication digitale</figcaption>
            </figure>
            <figure class="intro-gallery-secondary">
                <img src="assets/images/projects/plumes-de-coeur/plumes-social/sortie-polar.jpg" alt="Exemple de publication graphique pour Plumes de Cœur">
                <figcaption>Plumes de Cœur · Création graphique</figcaption>
            </figure>
        </div>
    </section>

    <section class="portfolio-selected" id="realisations" aria-labelledby="selected-heading">
        <div class="portfolio-section-head">
            <div>
                <p class="portfolio-eyebrow">Sélection de projets</p>
                <h2 id="selected-heading">Notre travail, <em>en images.</em></h2>
            </div>
            <p>Des contenus et des supports créés pour donner vie aux projets de nos clients.</p>
        </div>

        <div class="editorial-project-list">
            <article class="editorial-project">
                <a class="editorial-visual" href="pages/projets/projets.php#projet-kuba-home" aria-label="Découvrir les réalisations de Kuba Home">
                    <div class="editorial-visual-item">
                        <img src="assets/images/projects/kuba/kuba-instagram/kuba-instagram-02.jpg" alt="Visuel de communication pour Kuba Home" loading="lazy">
                    </div>
                    <div class="editorial-visual-item">
                        <img src="assets/images/projects/kuba/kuba-instagram/kuba-instagram-03.jpg" alt="Deuxième publication réalisée pour Kuba Home" loading="lazy">
                    </div>
                </a>
                <div class="editorial-project-info">
                    <div>
                        <p class="portfolio-eyebrow">01 / Réseaux sociaux</p>
                        <h3>Kuba Home</h3>
                        <p>Publications et contenus visuels pour présenter les réalisations de la marque sur les réseaux sociaux.</p>
                    </div>
                    <a class="portfolio-text-link" href="pages/projets/projets.php#projet-kuba-home">Voir les réalisations <span aria-hidden="true">↗</span></a>
                </div>
            </article>

            <article class="editorial-project">
                <a class="editorial-visual" href="pages/projets/projets.php#projet-plumes-de-coeur" aria-label="Découvrir les réalisations de Plumes de Cœur">
                    <div class="editorial-visual-item">
                        <img src="assets/images/projects/plumes-de-coeur/plumes-1.jpg" alt="Réalisation de signalétique pour Plumes de Cœur" loading="lazy">
                    </div>
                    <div class="editorial-visual-item">
                        <img src="assets/images/projects/plumes-de-coeur/plumes-2.jpg" alt="Autre exemple de réalisation graphique pour Plumes de Cœur" loading="lazy">
                    </div>
                </a>
                <div class="editorial-project-info">
                    <div>
                        <p class="portfolio-eyebrow">02 / Identité & signalétique</p>
                        <h3>Plumes de Cœur</h3>
                        <p>Direction artistique et conception de supports graphiques pour rendre l'univers du projet visible.</p>
                    </div>
                    <a class="portfolio-text-link" href="pages/projets/projets.php#projet-plumes-de-coeur">Voir les réalisations <span aria-hidden="true">↗</span></a>
                </div>
            </article>
        </div>

        <div class="portfolio-see-more">
            <p>Découvrez aussi nos autres projets de communication, de création graphique et de vidéo.</p>
            <a class="portfolio-text-link" href="pages/projets/projets.php">Explorer le portfolio <span aria-hidden="true">↗</span></a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
