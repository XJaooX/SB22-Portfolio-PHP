<?php
// pagina projets
$basePath = '../../';
$currentPage = 'projets';
$pageTitle = "Projets — S’B 22 Agency";

// projetos




require_once __DIR__ . '/../../functions/projects.php';
$projects = getProjects();
$filters = getProjectFilters();
include '../../includes/header.php';
include '../../includes/navbar.php';
?>

<main class="projects-page">

    <section class="projects-section">

        <!-- Título da página -->
        <div class="projects-heading">
            <div>
                <p class="eyebrow">Portfolio</p>
                <h1>Nos réalisations</h1>
                <p>
                    Cinq projets réels sont intégrés. Les autres espaces seront complétés
                    avec les prochains éléments transmis par S’B 22.
                </p>
            </div>

            <span class="projects-badge">S’B 22 · MAQUETTE</span>
        </div>

        <!-- Filtros -->
        <div class="project-filters">
            <?php foreach ($filters as $index => $filter) { ?>
                <button
                    class="project-filter <?php echo $index === 0 ? 'active' : ''; ?>"
                    type="button"
                    data-filter="<?php echo $filter; ?>"
                >
                    <?php echo $filter; ?>
                </button>
            <?php } ?>
        </div>

        <div class="projects-mobile-info">
            <span>Glisser pour explorer</span>
            <span id="projects-count"><?php echo count($projects); ?> projets</span>
        </div>

        <!-- Cartões dos projetos -->
        <div class="projects-grid">

            <?php foreach ($projects as $project) { ?>
                <?php include __DIR__ . '/../../includes/project-card.php'; ?>
            <?php } ?>

        </div>

        <div class="projects-empty" id="projects-empty" hidden>
            Aucun projet dans cette catégorie pour le moment.
        </div>
    </section>


    <!-- MODAIS DOS PROJETOS -->
    <?php include __DIR__ . '/../../includes/project-modal.php'; ?>

</main>

<?php
include '../../includes/footer.php';
?>
