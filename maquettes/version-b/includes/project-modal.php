<?php
$projectId = htmlspecialchars($case['id'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$name = htmlspecialchars($case['name'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$description = htmlspecialchars($case['description'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$domainTitle = htmlspecialchars($domains[$case['domain']]['label'] ?? $case['domain'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$image = htmlspecialchars($basePath . $case['image'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
?>
<div class="project-modal" id="project-<?php echo $projectId; ?>" aria-hidden="true" role="dialog" aria-modal="true" aria-label="Réalisations <?php echo $name; ?>">
    <div class="project-modal-background" data-close-modal></div>
    <article class="project-modal-box book-modal-box">
        <div class="project-modal-top">
            <button type="button" data-close-modal>← Tous les projets</button>
            <span>SB22 Agency · Portfolio</span>
            <button class="modal-x" type="button" data-close-modal aria-label="Fermer la fiche">×</button>
        </div>
        <header class="book-case-heading">
            <p class="book-overline"><?php echo htmlspecialchars($case['overline'] ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?></p>
            <h2><?php echo $name; ?></h2>
            <p><?php echo $description; ?></p>
            <span class="book-case-category"><?php echo $domainTitle; ?></span>
        </header>
        <figure class="book-case-cover"><img src="<?php echo $image; ?>" alt="Présentation du projet <?php echo $name; ?>" loading="lazy"></figure>
        <section class="book-case-story" aria-label="Le projet en bref">
            <div class="sb22-case-context">
                <div><span>Le projet</span><p><?php echo htmlspecialchars($case['context'] ?? $case['description'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?></p></div>
                <div><span>Son objectif</span><p><?php echo htmlspecialchars($case['objective'] ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?></p></div>
                <div><span>Notre intervention</span><p><?php echo htmlspecialchars($case['intervention'] ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?></p></div>
            </div>
        </section>
        <div class="book-case-media sb22-responsive-media">
            <?php foreach ($case['videos'] ?? [] as $video): ?>
            <section class="sb22-video-feature" aria-label="<?php echo htmlspecialchars($video['title'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?>">
                <div class="sb22-video-copy">
                    <span>Les réalisations · en vidéo</span>
                    <h3><?php echo htmlspecialchars($video['title'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?></h3>
                    <p><?php echo htmlspecialchars($video['caption'] ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?></p>
                </div>
                <div class="sb22-video-container">
                    <video controls playsinline preload="metadata" poster="<?php echo htmlspecialchars($basePath . ($video['poster'] ?? $case['image']), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?>" aria-label="<?php echo htmlspecialchars($video['title'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?>">
                        <source src="<?php echo htmlspecialchars($basePath . $video['src'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?>" type="video/mp4">
                        Votre navigateur ne prend pas en charge cette vidéo.
                    </video>
                </div>
            </section>
            <?php endforeach; ?>
        </div>
        <?php if (!empty($case['images'])): ?>
        <section class="book-case-section" aria-label="Galerie du projet">
            <h3>Les réalisations</h3>
            <div class="book-case-media-grid">
                <?php foreach ($case['images'] as $photo): ?>
                <figure class="book-case-figure">
                    <img src="<?php echo htmlspecialchars($basePath . $photo['src'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($photo['alt'] ?? $case['name'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?>" loading="lazy">
                    <?php if (!empty($photo['caption'])): ?>
                    <figcaption><?php echo htmlspecialchars($photo['caption'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?></figcaption>
                    <?php endif; ?>
                </figure>
                <?php endforeach; ?>
            </div>
        </section>
        <?php endif; ?>
        <nav class="book-case-bottom" aria-label="Projets précédent et suivant">
            <button type="button" data-open-project="">← Projet précédent</button>
            <button type="button" data-open-project="">Projet suivant →</button>
        </nav>
    </article>
</div>
