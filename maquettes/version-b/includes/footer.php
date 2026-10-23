<footer class="site-footer">
    <div class="footer-inner">


        <div class="footer-grid">


            <div class="footer-brand">
                <div class="footer-logo">
                    <img src="<?php echo $basePath; ?>assets/images/branding/sb22-logo-white.png" alt="SB22">
                    <div class="footer-brand-text">
                        <span class="footer-brand-name">S’B 22</span>
                    </div>
                </div>

                <p class="footer-description">
                    Agence de relations publiques et de communication, avec une approche humaine et stratégique.
                </p>

                <div class="footer-contact">
                    <a href="mailto:contact@sb22agency.com">contact@sb22agency.com</a>
                    <a href="tel:0673031202">06 73 03 12 02</a>
                </div>
            </div>


            <div class="footer-column">
                <span class="footer-title">Navigation</span>
                <a href="<?php echo $basePath; ?>index.php">Accueil</a>
                <a href="<?php echo $basePath; ?>pages/agence/agence.php">À propos</a>
                <a href="<?php echo $basePath; ?>pages/projets/projets.php">Projets sélectionnés</a>
                <a href="<?php echo $basePath; ?>pages/contact/contact.php">Contact</a>
            </div>


            <div class="footer-column footer-links">
                <span class="footer-title">Réseaux & Liens</span>

                <a href="https://www.instagram.com/sb22agency/" target="_blank" rel="noopener noreferrer">
                    Instagram @sb22agency <svg class="sb22-arrow" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg>
                </a>

                <a href="https://www.facebook.com/people/SB-22/61580109419316/" target="_blank" rel="noopener noreferrer">
                    Facebook S’B 22 <svg class="sb22-arrow" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg>
                </a>

                <a class="official-site" href="https://www.sb22agency.com" target="_blank" rel="noreferrer">
                    Site officiel sb22agency.com <svg class="sb22-arrow" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg>
                </a>

                <a class="back-to-top" href="#top">Haut de page <span>↑</span></a>
            </div>
        </div>


        <div class="footer-bottom">
            <p>© <?php echo date("Y"); ?> S’B 22. Portfolio.</p>


        </div>
    </div>
</footer>
<?php foreach ($scripts as $script): ?>
<script src="<?php echo $basePath; ?>assets/js/<?php echo htmlspecialchars($script, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?>" defer></script>
<?php endforeach; ?>
</body>
</html>
