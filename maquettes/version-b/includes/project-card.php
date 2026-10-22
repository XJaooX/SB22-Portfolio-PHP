<article data-reveal class="project-card kg-project-card sb22-domain-card" data-domain="<?php echo htmlspecialchars($case['domain'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?>" tabindex="0" role="button" data-project="<?php echo htmlspecialchars($case['id'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?>" aria-label="Découvrir <?php echo htmlspecialchars($case['name'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?> — <?php echo htmlspecialchars($case['domain'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?>">
<div class="kg-card-visuals"><img src="<?php echo $basePath . htmlspecialchars($case['image'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($case['name'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?> — réalisation SB22" loading="lazy"></div>
<div class="kg-card-top"><span><?php echo htmlspecialchars($domains[$case['domain']]['label'] ?? $case['domain'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?></span></div>
<div class="kg-card-bottom">
<span class="kg-card-number"><?php echo htmlspecialchars($case['sector'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?></span>
<h2><?php echo htmlspecialchars($case['name'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?></h2>
<p><?php echo htmlspecialchars($case['description'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?></p>
<span class="kg-card-discover">Voir les réalisations <svg class="sb22-arrow" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></span>
</div>
</article>
