<!-- Isto é o footer comum a todas as páginas -->
<footer class="site-footer">
    <div class="footer-inner">

        <!-- Parte principal do footer -->
        <div class="footer-grid">

            <!-- Logo, descrição e contactos -->
            <div class="footer-brand">
                <div class="footer-logo">
                    <img src="<?php echo $basePath; ?>assets/images/branding/sb22-logo-white.png" alt="SB22 Agency">
                    <div class="footer-brand-text">
                        <span class="footer-brand-name">SB22</span>
                        <span class="footer-brand-subtitle">Agency</span>
                    </div>
                </div>

                <p class="footer-description">
                    Agence de relations publiques et de communication, avec une approche humaine et stratégique.
                </p>

                <div class="footer-contact">
                    <span>contact@sb22agency.com</span>
                    <a href="tel:0673031202">06 73 03 12 02</a>
                </div>
            </div>

            <!-- Links de navegação -->
            <div class="footer-column">
                <span class="footer-title">Navigation</span>
                <a href="<?php echo $basePath; ?>index.php">Accueil</a>
                <a href="<?php echo $basePath; ?>pages/agence/agence.php">L’agence</a>
                <a href="<?php echo $basePath; ?>pages/projets/projets.php">Projets sélectionnés</a>
                <a href="<?php echo $basePath; ?>pages/expertises/expertises.php">Expertises</a>
                <a href="<?php echo $basePath; ?>pages/contact/contact.php">Contact</a>
            </div>

            <!-- Redes sociais e site oficial -->
            <div class="footer-column footer-links">
                <span class="footer-title">Réseaux & Liens</span>

                <a href="https://www.instagram.com/sb22agency/" target="_blank" rel="noreferrer">
                    Instagram @sb22agency <svg class="ui-arrow-icon" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg>
                </a>

                <a href="https://www.facebook.com/people/SB-22/61580109419316/" target="_blank" rel="noreferrer">
                    Facebook SB22 <svg class="ui-arrow-icon" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg>
                </a>

                <a class="official-site" href="https://www.sb22agency.com" target="_blank" rel="noreferrer">
                    Site officiel sb22agency.com <svg class="ui-arrow-icon" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg>
                </a>

                <a class="back-to-top" href="#top">Haut de page <svg class="ui-arrow-icon" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a>
            </div>
        </div>

        <!-- Parte inferior do footer -->
        <div class="footer-bottom">
            <p>© <?php echo date('Y'); ?> SB22 Agency. Portfolio maquette.</p>

            <div class="footer-legal">
                <a href="#">Mentions légales</a>
                <span>·</span>
                <a href="#">Confidentialité & cookies</a>
            </div>
        </div>
    </div>
</footer>

<!-- Liga o JavaScript usado no menu mobile e no header -->
<script src="<?php echo $basePath; ?>assets/js/main.js"></script>
<script src="<?php echo $basePath; ?>assets/js/portfolio-refresh.js"></script>

<!-- Fecha as tags abertas no header.php -->
</body>
</html>
