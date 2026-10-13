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
                    <?php include __DIR__ . '/project-gallery.php'; ?>

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
