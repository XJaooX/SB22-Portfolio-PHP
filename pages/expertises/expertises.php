<?php
// pagina expertises
$basePath = '../../';
$currentPage = 'expertises';
$pageTitle = "Expertises — SB22 Agency";

// lista das expertises


require_once __DIR__ . '/../../functions/services.php';
$expertises = getExpertises();
include '../../includes/header.php';
include '../../includes/navbar.php';
?>

<main class="expertises-page">
    <section class="expertises-section">

        <div class="expertises-heading">
            <div>
                <p class="eyebrow">Champs d'intervention</p>
                <h1>Expertises SB22</h1>
            </div>

            <p>Des compétences complémentaires pour concevoir et déployer votre communication.</p>
        </div>

        <div class="expertises-list">
            <?php foreach ($expertises as $index => $expertise) { ?>
                <div class="expertise-item <?php if ($index == 0) { echo 'open'; } ?>">
                    <button class="expertise-button" type="button">
                        <div class="expertise-name">
                            <span><?php echo $expertise['num']; ?></span>
                            <h2><?php echo $expertise['title']; ?></h2>
                        </div>

                        <div class="expertise-right">
                            <p><?php echo $expertise['text']; ?></p>
                            <span class="expertise-symbol"><?php echo $index == 0 ? '−' : '+'; ?></span>
                        </div>
                    </button>

                    <div class="expertise-mobile-text">
                        <p><?php echo $expertise['text']; ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>

    </section>
</main>

<?php include '../../includes/footer.php'; ?>
