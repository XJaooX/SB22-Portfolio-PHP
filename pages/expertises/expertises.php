<?php
// pagina expertises
$basePath = '../../';
$currentPage = 'expertises';
$pageTitle = "Expertises — S’B 22 Agency";

// lista das expertises
$expertises = [
    ['num' => '01', 'title' => 'Relations publiques', 'text' => 'Relations presse, image, partenariats, événements et actions de visibilité.'],
    ['num' => '02', 'title' => 'Communication 360°', 'text' => 'Stratégie de communication, identité, supports print, signalétique et déclinaisons de communication.'],
    ['num' => '03', 'title' => 'Social Media Management', 'text' => 'Stratégie éditoriale, gestion des réseaux sociaux, création, planification et suivi des performances.'],
    ['num' => '04', 'title' => 'Marketing digital', 'text' => 'Site web, référencement, visibilité en ligne et campagnes digitales.'],
    ['num' => '05', 'title' => 'Création de contenu', 'text' => 'Photographie, vidéo, interviews et contenus adaptés aux différents supports.'],
    ['num' => '06', 'title' => 'Bien-être en entreprise', 'text' => 'Ateliers et actions autour du bien-être et de la qualité de vie en entreprise.']
];

include '../../includes/header.php';
include '../../includes/navbar.php';
?>

<main class="expertises-page">
    <section class="expertises-section">

        <div class="expertises-heading">
            <div>
                <p class="eyebrow">Champs d'intervention</p>
                <h1>Expertises S’B 22</h1>
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
