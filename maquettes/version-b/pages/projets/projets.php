<?php
$basePath = '../../';
$currentPage = 'projets';
$pageTitle = 'Réalisations — SB22 Agency';
$bodyClass = 'portfolio-gallery-page';
$styles = ['style.css','portfolio-layout.css','design-unified.css','brand-official.css','maquette-watermark.css','feedback-sebaa.css','feedback-final.css','feedback-wow.css','feedback-domains.css'];
$scripts = ['main.js','feedback-final.js','feedback-wow.js','feedback-domains.js'];
$cases = require __DIR__ . '/../../data/cases.php';
require __DIR__ . '/../../includes/header.php';
require __DIR__ . '/../../includes/navbar.php';
?>
<div id="top"></div>
<main class="projects-page kg-page sb22-domain-page">
    <div class="kg-shell">
        <aside class="kg-filters" aria-label="Navigation par domaine d’expertise">
            <div class="kg-filter-inner">
                <p class="kg-sidebar-overline">SB22 Agency · Portfolio</p>
                <h1>Nos<br>projets<span>.</span></h1>
                <p class="sb22-domain-aside-intro">Découvrez nos réalisations par domaine d’expertise.</p>
                <div class="kg-filter-group">
                    <h2>Domaines d’expertise</h2>
                    <nav class="sb22-domain-filters" aria-label="Sélection du domaine">
                        <button class="kg-filter-pill sb22-domain-filter active" type="button" data-domain-filter="tous" aria-pressed="true"><span>Toutes les réalisations</span><small>05</small></button>
<button class="kg-filter-pill sb22-domain-filter" type="button" data-domain-filter="social-media" aria-pressed="false"><span>Social Media Management</span><small>02</small></button>
<button class="kg-filter-pill sb22-domain-filter" type="button" data-domain-filter="design-graphique" aria-pressed="false"><span>Design graphique &amp; signalétique</span><small>01</small></button>
<button class="kg-filter-pill sb22-domain-filter" type="button" data-domain-filter="meta-ads" aria-pressed="false"><span>Campagnes publicitaires Meta Ads</span><small>02</small></button>
                    </nav>
                </div>
                <a class="kg-sidebar-contact" href="../contact/contact.php">Parlons de votre projet</a>
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

<?php foreach ($cases as $case): include __DIR__ . '/../../includes/project-card.php'; endforeach; ?>
            </div>
            <div class="kg-gallery-foot"><span>Communication · Création graphique · Publicité</span><a href="../../index.php">Retour à l’accueil</a></div>
        </section>
    </div>

<?php foreach ($cases as $case): include __DIR__ . '/../../includes/case-modals/' . $case['id'] . '.php'; endforeach; ?>
</main>
<?php require __DIR__ . '/../../includes/footer.php'; ?>
