<?php
$basePath = '../../';
$currentPage = 'expertises';
$pageTitle = 'Domaines d’intervention — S’B 22';
$bodyClass = 'portfolio-inner-page';
$styles = ['style.css','portfolio-layout.css','design-unified.css','brand-official.css','feedback-sebaa.css','feedback-final.css','feedback-wow.css'];
$scripts = ['main.js','feedback-final.js','feedback-wow.js'];
require __DIR__ . '/../../includes/header.php';
require __DIR__ . '/../../includes/navbar.php';
?>
<div id="top"></div>
<main class="book-compact-page">
    <p class="book-overline">S’B 22</p>
    <h1>Domaines <em>d’intervention.</em></h1>
    <p class="book-lead">Quelques compétences mobilisées dans les projets présentés. Pour apprécier le travail, découvrez avant tout les réalisations.</p>
    <div class="book-expertise-list">
            <details class="book-expertise">
            <summary><span>01</span><strong>Relations publiques</strong><em>Faire connaître vos projets auprès des bons publics.</em><b aria-hidden="true">＋</b></summary>
            <p>Relations presse, partenariats, communication d’événements et accompagnement des prises de parole.</p>
        </details>
            <details class="book-expertise">
            <summary><span>02</span><strong>Communication 360°</strong><em>Articuler les supports autour d’une même direction.</em><b aria-hidden="true">＋</b></summary>
            <p>Coordination des messages entre les supports imprimés, digitaux, événements et points de contact de l’entreprise.</p>
        </details>
            <details class="book-expertise">
            <summary><span>03</span><strong>Social Media Management</strong><em>Concevoir et organiser des contenus pour les réseaux sociaux.</em><b aria-hidden="true">＋</b></summary>
            <p>Ligne éditoriale, calendriers de publication, rédaction, adaptation des formats et analyse des statistiques disponibles.</p>
        </details>
            <details class="book-expertise">
            <summary><span>04</span><strong>Marketing digital</strong><em>Développer une présence en ligne adaptée au projet.</em><b aria-hidden="true">＋</b></summary>
            <p>Création de supports web selon le périmètre défini, référencement selon les besoins identifiés et contenus pour les campagnes digitales.</p>
        </details>
            <details class="book-expertise">
            <summary><span>05</span><strong>Création de contenu</strong><em>Produire des supports visuels et éditoriaux concrets.</em><b aria-hidden="true">＋</b></summary>
            <p>Visuels graphiques, vidéos, interviews, carrousels, publications et déclinaisons print ou numériques.</p>
        </details>
        </div>
    <a class="book-inline-cta" href="../projets/projets.php">Explorer les réalisations <svg class="sb22-arrow" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a>
</main>
<?php require __DIR__ . '/../../includes/footer.php'; ?>
