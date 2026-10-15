<?php
$basePath = '../../';
$currentPage = 'projets';
require_once __DIR__ . '/../../functions/projects.php';
$projects = getProjects();
$slug = isset($_GET['project']) && is_string($_GET['project']) ? $_GET['project'] : '';
$project = null;
$projectIndex = null;

foreach ($projects as $index => $item) {
    if ($item['id'] === $slug) {
        $project = $item;
        $projectIndex = $index;
        break;
    }
}

if ($project === null) {
    http_response_code(404);
    $pageTitle = 'Projet introuvable — SB22 Agency';
} else {
    $pageTitle = $project['name'] . ' — Réalisation SB22 Agency';
}

$mediaCollection = require __DIR__ . '/../../data/project-media.php';
$media = $project === null ? null : ($mediaCollection[$project['id']] ?? null);
include '../../includes/header.php';
include '../../includes/navbar.php';
$escape = static function ($text): string {
    return htmlspecialchars((string) $text, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
};
?>

<div id="top"></div>
<main class="case-page">
    <?php if ($project === null) { ?>
        <section class="case-not-found">
            <p class="portfolio-eyebrow">Portfolio SB22 Agency</p>
            <h1>Ce projet est introuvable.</h1>
            <a class="portfolio-text-link" href="projets.php">Retour aux réalisations</a>
        </section>
    <?php } else { ?>
        <section class="case-header">
            <a class="case-back" href="projets.php">Retour aux réalisations</a>
            <div class="case-heading">
                <div>
                    <p class="portfolio-eyebrow"><?php echo $escape($project['category']); ?> · <?php echo $escape($project['year']); ?></p>
                    <h1><?php echo $escape($project['name']); ?></h1>
                    <p class="case-lead"><?php echo $escape($project['description']); ?></p>
                </div>
                <div class="case-facts">
                    <div><span>Client</span><strong><?php echo $escape($project['name']); ?></strong></div>
                    <div><span>Mission</span><strong><?php echo $escape($project['category']); ?></strong></div>
                    <div><span>Année</span><strong><?php echo $escape($project['year']); ?></strong></div>
                </div>
            </div>
        </section>

        <?php if ($media !== null && !empty($media['items'])) { ?>
            <section class="case-work" aria-labelledby="case-work-title">
                <div class="case-work-heading">
                    <div>
                        <p class="portfolio-eyebrow">Réalisations</p>
                        <h2 id="case-work-title">Le projet en images</h2>
                    </div>
                    <p><?php echo $escape($media['intro']); ?></p>
                </div>
                <div class="case-media-grid">
                    <?php foreach ($media['items'] as $item) { ?>
                        <figure class="case-media case-media-<?php echo $escape($item['ratio']); ?>">
                            <div class="case-media-visual">
                                <?php if ($item['type'] === 'video') { ?>
                                    <video controls playsinline preload="metadata" poster="../../<?php echo $escape($item['poster']); ?>">
                                        <source src="../../<?php echo $escape($item['path']); ?>" type="video/mp4">
                                        Votre navigateur ne prend pas en charge cette vidéo.
                                    </video>
                                <?php } else { ?>
                                    <img src="../../<?php echo $escape($item['path']); ?>" alt="<?php echo $escape($item['title']); ?> — <?php echo $escape($project['name']); ?>" loading="lazy">
                                <?php } ?>
                            </div>
                            <figcaption><?php echo $escape($item['title']); ?></figcaption>
                        </figure>
                    <?php } ?>
                </div>
            </section>
        <?php } ?>

        <section class="case-details" aria-label="Présentation du projet">
            <div class="case-details-intro">
                <p class="portfolio-eyebrow">Derrière le projet</p>
                <h2>Contexte et démarche</h2>
            </div>
            <div class="case-details-copy">
                <div>
                    <h3>Le contexte</h3>
                    <p><?php echo $escape($project['context']); ?></p>
                </div>
                <div>
                    <h3>La mission confiée</h3>
                    <p><?php echo $escape($project['need']); ?></p>
                </div>
                <div>
                    <h3>Notre approche</h3>
                    <p><?php echo $escape($project['approach']); ?></p>
                </div>
            </div>
        </section>

        <section class="case-delivery" aria-label="Prestations réalisées">
            <p class="portfolio-eyebrow">Savoir-faire SB22 Agency</p>
            <h2>Ce que nous avons réalisé</h2>
            <div class="case-services">
                <?php foreach ($project['services'] as $service) { ?>
                    <span><?php echo $escape($service); ?></span>
                <?php } ?>
            </div>
            <?php if (!empty($project['deliverables'])) { ?>
                <div class="case-deliverables">
                    <?php foreach ($project['deliverables'] as $deliverable) { ?>
                        <article>
                            <h3><?php echo $escape($deliverable['title']); ?></h3>
                            <p><?php echo $escape($deliverable['text']); ?></p>
                        </article>
                    <?php } ?>
                </div>
            <?php } ?>
            <div class="case-result">
                <h3>Le résultat</h3>
                <p><?php echo $escape($project['result']); ?></p>
            </div>
        </section>

        <nav class="case-bottom" aria-label="Navigation entre les projets">
            <?php
                $otherIndex = ($projectIndex + 1) % count($projects);
                $nextProject = $projects[$otherIndex];
            ?>
            <a class="portfolio-text-link" href="projets.php">Toutes les réalisations</a>
            <a class="case-next" href="detail.php?project=<?php echo rawurlencode($nextProject['id']); ?>">
                <span>Projet suivant</span>
                <strong><?php echo $escape($nextProject['name']); ?></strong>
            </a>
        </nav>
    <?php } ?>
</main>

<?php include '../../includes/footer.php'; ?>
