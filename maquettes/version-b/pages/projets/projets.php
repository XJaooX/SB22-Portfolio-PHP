<?php
$basePath = '../../';
$currentPage = 'projets';
$pageTitle = 'Réalisations — SB22';
$bodyClass = 'portfolio-gallery-page';
$styles = ['style.css','portfolio-layout.css','design-unified.css','brand-official.css','maquette-watermark.css','feedback-sebaa.css','feedback-final.css','feedback-wow.css','feedback-domains.css','respira-project.css'];
$scripts = ['main.js','feedback-final.js','feedback-wow.js','feedback-domains.js'];
$cases = require __DIR__ . '/../../data/cases.php';
$domains = require __DIR__ . '/../../data/domains.php';
require __DIR__ . '/../../includes/header.php';
require __DIR__ . '/../../includes/navbar.php';
?>
<div id="top"></div>
<main class="projects-page kg-page sb22-domain-page">
    <div class="kg-shell">
        <aside class="kg-filters" aria-label="Navigation par domaine d’expertise">
            <div class="kg-filter-inner">
                <p class="kg-sidebar-overline">SB22 · Portfolio</p>
                <h1>Nos<br>projets<span>.</span></h1>
                <p class="sb22-domain-aside-intro">Découvrez nos réalisations par domaine d’expertise.</p>
                <div class="kg-filter-group">
                    <h2>Domaines d’expertise</h2>
                    <nav class="sb22-domain-filters" aria-label="Sélection du domaine">
                        <?php foreach ($domains as $slug => $domain): ?>
                        <?php
                        $total = $slug === 'tous' ? count($cases) : count(array_filter($cases, static function ($case) use ($slug) {
                            return $case['domain'] === $slug;
                        }));
                        ?>
                        <button class="kg-filter-pill sb22-domain-filter<?php echo $slug === 'tous' ? ' active' : ''; ?>" type="button" data-domain-filter="<?php echo htmlspecialchars($slug, ENT_QUOTES, 'UTF-8'); ?>" data-domain-title="<?php echo htmlspecialchars($domain['title'], ENT_QUOTES, 'UTF-8'); ?>" data-domain-description="<?php echo htmlspecialchars($domain['description'], ENT_QUOTES, 'UTF-8'); ?>" aria-pressed="<?php echo $slug === 'tous' ? 'true' : 'false'; ?>"><span><?php echo htmlspecialchars($domain['label'], ENT_QUOTES, 'UTF-8'); ?></span><small><?php echo sprintf('%02d', $total); ?></small></button>
                        <?php endforeach; ?>
                    </nav>
                </div>
                <a class="kg-sidebar-contact" href="../contact/contact.php">Parlons de votre projet</a>
            </div>
        </aside>
        <section class="kg-work" aria-label="Galerie des réalisations">
            <div class="kg-work-heading">
                <div>
                    <span class="kg-eyebrow">SB22 / Réalisations</span>
                    <h2 class="sb22-domain-heading" id="domain-heading">Des projets concrets, des identités singulières.</h2>
                    <p id="domain-description"><?php echo htmlspecialchars($domains['tous']['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                </div>
                <span class="sb22-domain-count" id="domain-count" aria-live="polite"><?php echo sprintf("%02d", count($cases)); ?> réalisations</span>
            </div>
            <div class="kg-card-deck" id="projects-grid" tabindex="0">

<?php foreach ($cases as $case): include __DIR__ . '/../../includes/project-card.php'; endforeach; ?>
            </div>
            <div class="kg-gallery-foot"><span>Communication · Création graphique · Publicité · Vidéo</span><a href="../../index.php">Retour à l’accueil</a></div>
        </section>
    </div>

<?php foreach ($cases as $case): ?>
<?php
$modalPath = __DIR__ . '/../../includes/case-modals/' . $case['id'] . '.php';
include is_file($modalPath) ? $modalPath : __DIR__ . '/../../includes/project-modal.php';
?>
<?php endforeach; ?>
</main>
<?php require __DIR__ . '/../../includes/footer.php'; ?>
