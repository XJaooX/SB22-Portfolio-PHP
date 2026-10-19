<?php
$basePath = '../../';
$currentPage = 'projets';
$pageTitle = "Réalisations — SB22 Agency · Maquette";
require_once __DIR__ . '/../../functions/projects.php';
$projects = getProjects();
$filters = getProjectFilters();
include '../../includes/header.php';
include '../../includes/navbar.php';
?>

<div id="top"></div>
<main class="projects-page">
    <section class="projects-section">
        <header class="projects-heading">
            <div>
                <p class="eyebrow">Le portfolio · SB22 Agency</p>
                <h1>Nos réalisations</h1>
                <p>Découvrez les réalisations de SB22 Agency dans trois domaines : réseaux sociaux, design graphique et campagnes Meta Ads.</p>
            </div>
        </header>

        <div class="project-filters" aria-label="Filtrer les réalisations">
            <?php foreach ($filters as $index => $filter) { ?>
                <button
                    class="project-filter <?php echo $index === 0 ? 'active' : ''; ?>"
                    type="button"
                    data-filter="<?php echo htmlspecialchars($filter, ENT_QUOTES, 'UTF-8'); ?>"
                    aria-pressed="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                >
                    <?php echo htmlspecialchars($filter, ENT_QUOTES, 'UTF-8'); ?>
                </button>
            <?php } ?>
        </div>

        <div class="projects-mobile-info">
            <span>Des réalisations par domaine d’expertise</span>
            <span id="projects-count"><?php echo count($projects); ?> réalisations</span>
        </div>

        <div class="projects-grid">
            <?php foreach ($projects as $project) { ?>
                <?php include __DIR__ . '/../../includes/project-card.php'; ?>
            <?php } ?>
        </div>

        <div class="projects-empty" id="projects-empty" hidden>Aucun projet dans cette catégorie pour le moment.</div>
    </section>

</main>

<?php include '../../includes/footer.php'; ?>
