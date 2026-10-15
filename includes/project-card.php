<?php
$previewImages = [];
if ($project['id'] === 'kuba-home') {
    $previewImages = [
        '../../assets/images/projects/kuba/kuba-instagram/kuba-instagram-02.jpg',
        '../../assets/images/projects/kuba/kuba-instagram/kuba-instagram-03.jpg'
    ];
} elseif ($project['id'] === 'plumes-de-coeur') {
    $previewImages = [
        '../../assets/images/projects/plumes-de-coeur/plumes-1.jpg',
        '../../assets/images/projects/plumes-de-coeur/plumes-2.jpg'
    ];
} elseif ($project['id'] === 'plumes-de-coeur-publications') {
    $previewImages = [
        '../../assets/images/projects/plumes-de-coeur/plumes-social/sortie-polar.jpg',
        '../../assets/images/projects/plumes-de-coeur/plumes-social/festival-yann-thomas.jpg'
    ];
}
$isShowcase = count($previewImages) > 0;
?>
<article
    class="project-card"
    data-category="<?php echo htmlspecialchars($project['filter'], ENT_QUOTES, 'UTF-8'); ?>"
    data-project="<?php echo htmlspecialchars($project['id'], ENT_QUOTES, 'UTF-8'); ?>"
    role="button"
    aria-label="Découvrir le projet <?php echo htmlspecialchars($project['name'], ENT_QUOTES, 'UTF-8'); ?>"
    tabindex="0"
>
    <div class="project-cover <?php echo $isShowcase ? 'project-cover-showcase' : 'project-cover-single'; ?>">
        <?php if ($isShowcase) { ?>
            <?php foreach ($previewImages as $previewIndex => $previewImage) { ?>
                <div class="project-preview-image">
                    <img
                        src="<?php echo htmlspecialchars($previewImage, ENT_QUOTES, 'UTF-8'); ?>"
                        alt="<?php echo htmlspecialchars($project['name'], ENT_QUOTES, 'UTF-8'); ?> — réalisation <?php echo $previewIndex + 1; ?>"
                        loading="lazy"
                    >
                </div>
            <?php } ?>
        <?php } else { ?>
            <img
                src="<?php echo htmlspecialchars($project['image'], ENT_QUOTES, 'UTF-8'); ?>"
                alt="Réalisation <?php echo htmlspecialchars($project['name'], ENT_QUOTES, 'UTF-8'); ?>"
                loading="lazy"
            >
        <?php } ?>
        <span class="project-real">Réalisation</span>
    </div>

    <div class="project-info">
        <div class="project-meta">
            <span><?php echo htmlspecialchars($project['category'], ENT_QUOTES, 'UTF-8'); ?></span>
            <span>·</span>
            <span><?php echo htmlspecialchars($project['year'], ENT_QUOTES, 'UTF-8'); ?></span>
        </div>
        <h2><?php echo htmlspecialchars($project['name'], ENT_QUOTES, 'UTF-8'); ?></h2>
        <p><?php echo htmlspecialchars($project['description'], ENT_QUOTES, 'UTF-8'); ?></p>
        <div class="project-bottom">
            <span><?php echo htmlspecialchars($project['number'], ENT_QUOTES, 'UTF-8'); ?></span>
            <span class="project-link">Découvrir le projet <span aria-hidden="true">↗</span></span>
        </div>
    </div>
</article>
