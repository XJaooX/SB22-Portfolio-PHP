<article
                    class="project-card"
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
