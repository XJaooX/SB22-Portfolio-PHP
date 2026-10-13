                    <section class="modal-gallery-section">
                        <span class="modal-small-title">Galerie</span>
                        <h3>Le projet en images</h3>

                        <!-- Kuba Home -->
                        <?php if ($project['id'] === 'kuba-home') { ?>

                            <figure class="modal-wide-card">
                                <div class="simple-carousel kuba-carousel" data-carousel>
                                    <div class="simple-carousel-track">
                                        <?php
                                        

                                        $kubaImages = getProjectGallery('kubaImages');
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
                                

                                $plumesImages = getProjectGallery('plumesImages');
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
                                        

                                        $plumesBlue = getProjectGallery('plumesBlue');
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
                                        

                                        $plumesPosts = getProjectGallery('plumesPosts');
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

