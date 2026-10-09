<?php
// pagina projets
$basePath = '../../';
$currentPage = 'projets';
$pageTitle = "Projets — S’B 22 Agency";

// projetos
$projects = [
    [
        'id' => 'kuba-home',
        'number' => '01',
        'name' => 'Kuba Home',
        'category' => 'Gestion des réseaux sociaux',
        'filter' => 'Social Media',
        'year' => '2026',
        'description' => 'Une présence vitrine premium sur Instagram, relayée également sur Facebook grâce au cross-posting, pour présenter les réalisations Kuba Home et valoriser immédiatement le savoir-faire de la marque.',
        'image' => '../../assets/images/projects/kuba/kuba-whatsapp/kuba-carousel-cover.jpg',
        'imageClass' => 'cover',
        'featured' => true,
        'context' => 'Kuba Home avait besoin d’une présence vitrine simple et immédiate pour montrer ses cuisines et ses réalisations à des clients potentiels. Instagram sert de vitrine principale, avec un cross-posting des publications vers Facebook.',
        'need' => 'Créer une vitrine digitale premium, claire et cohérente, capable de présenter rapidement les réalisations de Kuba Home et de renforcer l’image de la marque sur Instagram et Facebook.',
        'approach' => 'Construire un rythme de publication cohérent avec un univers premium : présenter les cuisines et aménagements, valoriser le savoir-faire, montrer les transformations et maintenir une vitrine Instagram soignée.',
        'services' => [
            'Présence vitrine Instagram',
            'Cross-posting Instagram → Facebook',
            'Social Media Management',
            'Création de contenu',
            'Ligne éditoriale',
            'Valorisation des réalisations',
            'Contenus d’engagement'
        ],
        'result' => 'Instagram joue ici le rôle de vitrine digitale principale pour Kuba Home. Les contenus publiés sont également relayés sur Facebook grâce au cross-posting, afin de maintenir une présence cohérente sur les deux plateformes.'
    ],
    [
        'id' => 'plumes-de-coeur',
        'number' => '02',
        'name' => 'Plumes de Cœur',
        'category' => 'Signalétique',
        'filter' => 'Communication',
        'year' => '2026',
        'description' => 'Transformer une intention en univers visuel concret : direction artistique, conception graphique, vitrine et signalétique cohérentes avec l’identité de Plumes de Cœur.',
        'image' => '../../assets/images/projects/plumes-de-coeur/plumes-1.jpg',
        'imageClass' => 'contain blurred',
        'featured' => false,
        'context' => 'Plumes de Cœur souhaitait donner une forme visible et cohérente à son univers dans son espace physique.',
        'need' => 'Créer une vitrine et des supports capables d’attirer le regard tout en respectant l’identité de la marque.',
        'approach' => 'Partir de l’atmosphère souhaitée par la cliente pour construire une direction artistique, puis la décliner en conception graphique, vitrine et signalétique.',
        'services' => [
            'Direction artistique',
            'Conception graphique',
            'Habillage graphique de vitrine',
            'Conception graphique de la signalétique',
            'Conception du panneau directionnel'
        ],
        'deliverables' => [
            ['title' => 'Direction artistique', 'text' => 'Définition d’un univers visuel cohérent avec l’identité et l’atmosphère de Plumes de Cœur.'],
            ['title' => 'Conception graphique', 'text' => 'Création et adaptation des éléments graphiques destinés aux supports physiques.'],
            ['title' => 'Vitrine & devanture', 'text' => 'Conception de l’habillage graphique de la devanture pour rendre le lieu identifiable.'],
            ['title' => 'Signalétique directionnelle', 'text' => 'Déclinaison de l’identité sur un panneau extérieur pour guider les visiteurs.']
        ],
        'result' => 'S’B 22 a pris en charge la recherche, la direction artistique, les échanges avec la cliente et la conception graphique de l’univers, de la vitrine et de la signalétique.'
    ],
    [
        'id' => 'kid-fitness-lexy',
        'number' => '03',
        'name' => 'Kid Fitness Lexy',
        'category' => 'Création graphique & campagne Meta',
        'filter' => 'Digital',
        'year' => '2026',
        'description' => 'Une campagne Meta complète pour Kid Fitness Lexy, réunissant création graphique, déclinaisons réseaux sociaux et vidéo verticale publicitaire.',
        'image' => '../../assets/images/projects/kid-fitness/kid-fitness-poster.jpg',
        'imageClass' => 'contain kid-cover',
        'featured' => false,
        'context' => 'Kid Fitness Lexy organisait une journée portes ouvertes le 18 janvier 2026 et avait besoin d’un visuel immédiatement identifiable pour informer les familles et promouvoir l’événement.',
        'need' => 'Créer une communication claire et attractive, puis adapter la création à plusieurs usages sans perdre la cohérence graphique de la campagne.',
        'approach' => 'Développer un visuel principal très reconnaissable, le décliner pour l’affichage et les réseaux sociaux, puis compléter la campagne avec une vidéo verticale adaptée à la publicité Meta.',
        'services' => [
            'Création graphique',
            'Affiche événementielle',
            'Publication réseaux sociaux',
            'Déclinaison multi-format',
            'Campagne publicitaire Meta',
            'Création vidéo',
            'Montage vidéo vertical'
        ],
        'deliverables' => [
            ['title' => 'Affiche', 'text' => 'Création principale avec les informations essentielles de la journée portes ouvertes.'],
            ['title' => 'Publication réseaux sociaux', 'text' => 'Adaptation du visuel pour une diffusion organique sur les réseaux sociaux.'],
            ['title' => 'Campagne Meta', 'text' => 'Déclinaison de la création pour une utilisation publicitaire sur les plateformes Meta.'],
            ['title' => 'Vidéo publicitaire', 'text' => 'Vidéo verticale de 16 secondes intégrée à la campagne Meta.']
        ],
        'result' => 'Le projet réunit dans une seule campagne la création graphique, les déclinaisons réseaux sociaux et une vidéo publicitaire verticale afin de garder une communication cohérente sur l’ensemble des supports Meta.'
    ],
    [
        'id' => 'plumes-de-coeur-publications',
        'number' => '04',
        'name' => 'Plumes de Cœur — Contenus & publications',
        'category' => 'Création de contenus',
        'filter' => 'Social Media',
        'year' => '2026',
        'description' => 'Des créations graphiques déclinées pour valoriser les auteurs, les sorties de livres, les événements et l’univers éditorial de Plumes de Cœur.',
        'image' => '../../assets/images/projects/plumes-de-coeur/plumes-social/sortie-polar.jpg',
        'imageClass' => 'contain blurred',
        'featured' => false,
        'context' => 'En complément de la signalétique, Plumes de Cœur dispose de nombreux temps forts à communiquer : sorties de livres, rencontres, salons, auteurs et prises de parole sur les valeurs de la maison d’édition.',
        'need' => 'Créer des publications lisibles et reconnaissables, capables de s’adapter à différents sujets tout en restant cohérentes avec l’univers éditorial de Plumes de Cœur.',
        'approach' => 'Décliner une identité graphique sur plusieurs formats de communication digitale : annonces de sorties, mise en avant d’auteurs, événements, valeurs et publications informatives.',
        'services' => [
            'Création graphique',
            'Publications réseaux sociaux',
            'Communication événementielle',
            'Mise en avant des auteurs',
            'Déclinaisons visuelles'
        ],
        'deliverables' => [
            ['title' => 'Sorties de livres', 'text' => 'Visuels de lancement pour annoncer et valoriser les nouvelles parutions.'],
            ['title' => 'Auteurs', 'text' => 'Publications dédiées aux auteurs, à leur actualité et à leurs ouvrages.'],
            ['title' => 'Événements', 'text' => 'Créations pour salons, rencontres, dédicaces et autres temps forts.'],
            ['title' => 'Univers de marque', 'text' => 'Contenus qui présentent les valeurs, les publics et l’identité éditoriale.']
        ],
        'result' => 'Cette sélection montre la variété des contenus créés pour Plumes de Cœur : annonces de parutions, auteurs, événements et communications de marque.'
    ],
    [
        'id' => 'youplaboom-meta',
        'number' => '05',
        'name' => 'Youplaboom — Campagne vidéo Meta',
        'category' => 'Campagne publicitaire Meta',
        'filter' => 'Digital',
        'year' => '2026',
        'description' => 'Une vidéo promotionnelle pensée pour aider une crèche à gagner en visibilité et attirer de nouvelles familles grâce à une campagne publicitaire Meta.',
        'image' => '../../assets/images/projects/youplaboom/youplaboom-meta-cover.jpg',
        'imageClass' => 'cover',
        'featured' => false,
        'context' => 'Youplaboom est une crèche qui souhaite renforcer sa visibilité et attirer de nouvelles familles grâce à une communication publicitaire adaptée aux réseaux sociaux.',
        'need' => 'Créer une vidéo promotionnelle courte et claire, capable de présenter la crèche et de susciter l’intérêt de futurs clients dans le cadre d’une campagne Meta.',
        'approach' => 'Construire un contenu vidéo dynamique et accessible, pensé dès le départ pour une diffusion publicitaire sur les plateformes Meta et pour une consultation principalement mobile.',
        'services' => [
            'Campagne publicitaire Meta',
            'Création vidéo',
            'Montage vidéo',
            'Format vertical',
            'Marketing digital'
        ],
        'deliverables' => [
            ['title' => 'Vidéo promotionnelle', 'text' => 'Vidéo publicitaire destinée à présenter la crèche et attirer de nouvelles familles.'],
            ['title' => 'Campagne Meta', 'text' => 'Contenu conçu pour être utilisé dans une campagne publicitaire sur les plateformes Meta.']
        ],
        'result' => 'La campagne associe une vidéo promotionnelle verticale à une diffusion Meta afin d’améliorer la visibilité de la crèche et d’attirer de nouvelles familles.'
    ]
];

$filters = ['Tous', 'Social Media', 'Communication', 'Relations publiques', 'Photo & Vidéo', 'Digital'];

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
                <article
                    class="project-card <?php echo $project['featured'] ? 'project-featured' : ''; ?>"
                    data-category="<?php echo $project['filter']; ?>"
                    data-project="<?php echo $project['id']; ?>"
                    tabindex="0"
                >
                    <div
                        class="project-cover <?php echo $project['imageClass']; ?>"
                        style="--project-image: url('<?php echo $project['image']; ?>');"
                    >
                        <img src="<?php echo $project['image']; ?>" alt="<?php echo htmlspecialchars($project['name']); ?>">
                        <span class="project-real">✓ Projet réel</span>
                    </div>

                    <div class="project-info">
                        <div class="project-meta">
                            <span><?php echo $project['category']; ?></span>
                            <span>·</span>
                            <span><?php echo $project['year']; ?></span>
                        </div>

                        <h2><?php echo $project['name']; ?></h2>
                        <p><?php echo $project['description']; ?></p>

                        <div class="project-bottom">
                            <span><?php echo $project['number']; ?></span>
                            <span class="project-link">Voir le projet →</span>
                        </div>
                    </div>
                </article>
            <?php } ?>

        </div>

        <div class="projects-empty" id="projects-empty" hidden>
            Aucun projet dans cette catégorie pour le moment.
        </div>
    </section>


    <!-- MODAIS DOS PROJETOS -->
    <?php foreach ($projects as $index => $project) {
        $previousIndex = $index - 1;
        if ($previousIndex < 0) {
            $previousIndex = count($projects) - 1;
        }

        $nextIndex = $index + 1;
        if ($nextIndex >= count($projects)) {
            $nextIndex = 0;
        }

        $previousProject = $projects[$previousIndex];
        $nextProject = $projects[$nextIndex];
    ?>
        <div class="project-modal" id="project-<?php echo $project['id']; ?>" aria-hidden="true">

            <div class="project-modal-background" data-close-modal></div>

            <div class="project-modal-box">

                <!-- Barra superior do modal -->
                <div class="project-modal-top">
                    <button type="button" data-close-modal>← Retour aux projets</button>
                    <button type="button" class="modal-x" data-close-modal aria-label="Fermer">×</button>
                </div>

                <!-- Imagem principal -->
                <div class="modal-cover <?php echo $project['imageClass']; ?>" style="--project-image: url('<?php echo $project['image']; ?>');">
                    <?php if (strpos($project['imageClass'], 'blurred') !== false) { ?>
                        <div class="modal-blur"></div>
                    <?php } ?>

                    <img src="<?php echo $project['image']; ?>" alt="<?php echo htmlspecialchars($project['name']); ?>">
                    <span class="modal-real">Projet réel</span>
                </div>

                <div class="modal-content">

                    <!-- Título e descrição -->
                    <header class="modal-project-heading">
                        <div class="project-meta">
                            <span><?php echo $project['category']; ?></span>
                            <span>·</span>
                            <span><?php echo $project['year']; ?></span>
                        </div>

                        <h2><?php echo $project['name']; ?></h2>
                        <p><?php echo $project['description']; ?></p>

                        <?php if ($project['id'] === 'plumes-de-coeur') { ?>
                            <a class="modal-source" href="https://www.instagram.com/p/DW8bDJwjYmo/" target="_blank" rel="noreferrer">
                                Publication S’B 22 ↗
                            </a>
                        <?php } ?>
                    </header>

                    <!-- Contexto / abordagem -->
                    <div class="modal-two-columns">
                        <div>
                            <span class="modal-small-title">Contexte</span>
                            <p><?php echo $project['context']; ?></p>

                            <span class="modal-small-title second">Le besoin</span>
                            <p><?php echo $project['need']; ?></p>
                        </div>

                        <div>
                            <span class="modal-small-title">Notre approche</span>
                            <p><?php echo $project['approach']; ?></p>

                            <span class="modal-small-title second">
                                <?php echo $project['id'] === 'plumes-de-coeur' ? 'Interventions S’B 22' : 'Notre intervention'; ?>
                            </span>

                            <div class="modal-services">
                                <?php foreach ($project['services'] as $service) { ?>
                                    <div>✓ <?php echo $service; ?></div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <!-- Entregáveis quando existem -->
                    <?php if (isset($project['deliverables'])) { ?>
                        <section class="modal-deliverables">
                            <span>Ce que S’B 22 a réalisé</span>

                            <h3>
                                <?php
                                if ($project['id'] === 'plumes-de-coeur') {
                                    echo 'Du concept à la signalétique finale';
                                } elseif ($project['id'] === 'kid-fitness-lexy') {
                                    echo 'Une création, plusieurs formats';
                                } else {
                                    echo 'Les livrables du projet';
                                }
                                ?>
                            </h3>

                            <div class="deliverables-grid">
                                <?php foreach ($project['deliverables'] as $deliverableIndex => $deliverable) { ?>
                                    <div>
                                        <small>0<?php echo $deliverableIndex + 1; ?></small>
                                        <h4><?php echo $deliverable['title']; ?></h4>
                                        <p><?php echo $deliverable['text']; ?></p>
                                    </div>
                                <?php } ?>
                            </div>
                        </section>
                    <?php } ?>


                    <!-- Galeria -->
                    <section class="modal-gallery-section">
                        <span class="modal-small-title">Galerie</span>
                        <h3>Le projet en images</h3>

                        <!-- Kuba Home -->
                        <?php if ($project['id'] === 'kuba-home') { ?>

                            <figure class="modal-wide-card">
                                <div class="simple-carousel kuba-carousel" data-carousel>
                                    <div class="simple-carousel-track">
                                        <?php
                                        $kubaImages = [
                                            '../../assets/images/projects/kuba/kuba-3.jpg',
                                            '../../assets/images/projects/kuba/kuba-work.jpg',
                                            '../../assets/images/projects/kuba/kuba-bathroom.jpg',
                                            '../../assets/images/projects/kuba/kuba-engagement.jpg'
                                        ];

                                        foreach ($kubaImages as $imageIndex => $image) {
                                        ?>
                                            <div class="simple-slide">
                                                <div class="carousel-portrait">
                                                    <img src="<?php echo $image; ?>" alt="Publication Kuba Home">
                                                    <span><?php echo $imageIndex + 1; ?> / 4</span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>

                                    <button type="button" class="carousel-left" data-carousel-prev>←</button>
                                    <button type="button" class="carousel-right" data-carousel-next>→</button>
                                </div>

                                <figcaption>
                                    <strong>Publication Instagram en carrousel</strong>
                                    <p>Ces quatre visuels appartiennent à une même publication. Faites glisser vers la droite ou la gauche pour parcourir le carrousel.</p>
                                </figcaption>
                            </figure>

                            <figure class="modal-wide-card">
                                <div class="single-gallery-image">
                                    <img src="../../assets/images/projects/kuba/kuba-before-after.jpg" alt="Kuba Home — avant et après transformation">
                                </div>

                                <figcaption>
                                    <strong>Avant / après — Kuba Home</strong>
                                    <p>Publication présentant la transformation d’un espace avant et après l’aménagement.</p>
                                </figcaption>
                            </figure>

                            <figure class="modal-wide-card">
                                <div class="instagram-box">
                                    <iframe
                                        src="https://www.instagram.com/kubahome_officiel/embed/"
                                        title="Instagram Kuba Home"
                                        loading="eager"
                                        scrolling="yes"
                                    ></iframe>
                                </div>

                                <figcaption class="instagram-info">
                                    <div>
                                        <strong>Instagram Kuba Home</strong>
                                        <p>Instagram est la vitrine principale de Kuba Home. Les publications sont également relayées sur Facebook grâce au cross-posting.</p>
                                    </div>

                                    <a href="https://www.instagram.com/kubahome_officiel/" target="_blank" rel="noreferrer">
                                        Voir sur Instagram ↗
                                    </a>
                                </figcaption>
                            </figure>

                            <div class="normal-gallery">
                                <figure>
                                    <img src="../../assets/images/projects/kuba/kuba-whatsapp/kuba-whatsapp-01.jpg" alt="Cuisine Kuba Home">
                                    <figcaption><strong>Cuisine — bois & pierre claire</strong></figcaption>
                                </figure>

                                <figure>
                                    <img class="contain-image" src="../../assets/images/projects/kuba/kuba-whatsapp/kuba-whatsapp-02.jpg" alt="Cuisine Kuba Home">
                                    <figcaption><strong>Cuisine contemporaine — matières & détails</strong></figcaption>
                                </figure>

                                <figure>
                                    <img src="../../assets/images/projects/kuba/kuba-whatsapp/kuba-whatsapp-03.jpg" alt="Cuisine Kuba Home">
                                    <figcaption><strong>Cuisine — îlot central & bois sombre</strong></figcaption>
                                </figure>
                            </div>

                        <!-- Plumes signalétique -->
                        <?php } elseif ($project['id'] === 'plumes-de-coeur') { ?>

                            <div class="normal-gallery">
                                <?php
                                $plumesImages = [
                                    ['../../assets/images/projects/plumes-de-coeur/plumes-2.jpg', 'Habillage de la vitrine'],
                                    ['../../assets/images/projects/plumes-de-coeur/plumes-3.jpg', 'Vitrine & visibilité de nuit'],
                                    ['../../assets/images/projects/plumes-de-coeur/plumes-4.jpg', 'Panneau directionnel']
                                ];

                                foreach ($plumesImages as $item) {
                                ?>
                                    <figure>
                                        <img src="<?php echo $item[0]; ?>" alt="<?php echo $item[1]; ?>">
                                        <figcaption><strong><?php echo $item[1]; ?></strong></figcaption>
                                    </figure>
                                <?php } ?>
                            </div>

                        <!-- Kid Fitness -->
                        <?php } elseif ($project['id'] === 'kid-fitness-lexy') { ?>

                            <div class="normal-gallery one-item">
                                <figure>
                                    <video controls playsinline preload="metadata">
                                        <source src="../../assets/videos/kid-fitness/kid-fitness-meta.mp4" type="video/mp4">
                                    </video>
                                    <figcaption>
                                        <strong>Vidéo de campagne Meta</strong>
                                        <p>Vidéo verticale réalisée pour compléter la campagne Kid Fitness Lexy.</p>
                                    </figcaption>
                                </figure>
                            </div>

                        <!-- Plumes publications -->
                        <?php } elseif ($project['id'] === 'plumes-de-coeur-publications') { ?>

                            <figure class="modal-wide-card">
                                <div class="simple-carousel" data-carousel>
                                    <div class="simple-carousel-track">
                                        <?php
                                        $plumesBlue = [
                                            '../../assets/images/projects/plumes-de-coeur/plumes-social/editeur-emotion.jpg',
                                            '../../assets/images/projects/plumes-de-coeur/plumes-social/valeurs.jpg',
                                            '../../assets/images/projects/plumes-de-coeur/plumes-social/lecteurs.jpg',
                                            '../../assets/images/projects/plumes-de-coeur/plumes-social/catalogue-publics.jpg',
                                            '../../assets/images/projects/plumes-de-coeur/plumes-social/aventure-editoriale.jpg'
                                        ];

                                        foreach ($plumesBlue as $imageIndex => $image) {
                                        ?>
                                            <div class="simple-slide">
                                                <div class="carousel-portrait">
                                                    <img src="<?php echo $image; ?>" alt="Carrousel Plumes de Cœur">
                                                    <span><?php echo $imageIndex + 1; ?> / 5</span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>

                                    <button type="button" class="carousel-left" data-carousel-prev>←</button>
                                    <button type="button" class="carousel-right" data-carousel-next>→</button>
                                </div>

                                <figcaption>
                                    <strong>Carrousel — ADN & valeurs de Plumes de Cœur</strong>
                                    <p>Ces cinq visuels appartiennent à une même publication.</p>
                                </figcaption>
                            </figure>

                            <figure class="modal-wide-card">
                                <div class="simple-carousel" data-carousel>
                                    <div class="simple-carousel-track">
                                        <?php
                                        $plumesPosts = [
                                            ['../../assets/images/projects/ailes-du-livre/ailes-du-livre-cover.jpg', 'Festival du Livre de Paris — Louise Ackerman'],
                                            ['../../assets/images/projects/plumes-de-coeur/plumes-social/cyberharcelement.jpg', 'Communication événementielle'],
                                            ['../../assets/images/projects/plumes-de-coeur/plumes-social/olivier-cochet.jpg', 'Actualité d’un auteur'],
                                            ['../../assets/images/projects/plumes-de-coeur/plumes-social/polar-ardennais.jpg', 'Polar ardennais'],
                                            ['../../assets/images/projects/plumes-de-coeur/plumes-social/deux-histoires.jpg', 'Deux histoires, un coup de cœur'],
                                            ['../../assets/images/projects/plumes-de-coeur/plumes-social/zoom-auteur.jpg', 'Zoom sur un auteur'],
                                            ['../../assets/images/projects/plumes-de-coeur/plumes-social/ailes-du-livre.jpg', 'Présence à un salon'],
                                            ['../../assets/images/projects/plumes-de-coeur/plumes-social/festival-yann-thomas.jpg', 'Festival du Livre de Paris']
                                        ];

                                        foreach ($plumesPosts as $postIndex => $post) {
                                        ?>
                                            <div class="simple-slide">
                                                <div class="carousel-post">
                                                    <img src="<?php echo $post[0]; ?>" alt="<?php echo $post[1]; ?>">
                                                    <span><?php echo $postIndex + 1; ?> / <?php echo count($plumesPosts); ?></span>
                                                    <h4><?php echo $post[1]; ?></h4>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>

                                    <button type="button" class="carousel-left" data-carousel-prev>←</button>
                                    <button type="button" class="carousel-right" data-carousel-next>→</button>
                                </div>

                                <figcaption>
                                    <strong>Carrousel — publications Plumes de Cœur</strong>
                                    <p>Une sélection des différentes publications créées pour Plumes de Cœur.</p>
                                </figcaption>
                            </figure>

                        <!-- Youplaboom -->
                        <?php } elseif ($project['id'] === 'youplaboom-meta') { ?>

                            <div class="normal-gallery one-item">
                                <figure>
                                    <video controls playsinline preload="metadata">
                                        <source src="../../assets/videos/youplaboom/youplaboom-meta.mp4" type="video/mp4">
                                    </video>
                                    <figcaption>
                                        <strong>Vidéo promotionnelle Youplaboom</strong>
                                        <p>Vidéo verticale de campagne Meta conçue pour présenter la crèche.</p>
                                    </figcaption>
                                </figure>
                            </div>

                        <?php } ?>
                    </section>

                    <!-- Resultado -->
                    <div class="modal-result">
                        <span class="modal-small-title">Résultat</span>
                        <p><?php echo $project['result']; ?></p>
                    </div>

                    <!-- Projeto anterior / seguinte -->
                    <div class="modal-navigation">
                        <button type="button" data-open-project="<?php echo $previousProject['id']; ?>">
                            ← Projet <?php echo $previousProject['number']; ?>
                        </button>

                        <button type="button" data-open-project="<?php echo $nextProject['id']; ?>">
                            Projet <?php echo $nextProject['number']; ?> →
                        </button>
                    </div>

                    <!-- CTA final -->
                    <div class="modal-contact-cta">
                        <div>
                            <h3>Vous avez un projet ?</h3>
                            <p>Discutons de vos besoins de communication.</p>
                        </div>

                        <a href="../contact/contact.php">Parlons-en ↗</a>
                    </div>

                </div>
            </div>
        </div>
    <?php } ?>

</main>

<?php
include '../../includes/footer.php';
?>
