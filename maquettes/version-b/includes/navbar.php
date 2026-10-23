<header class="site-header" id="site-header">
    <div class="nav-container">


        <a class="brand" href="<?php echo $basePath; ?>index.php" aria-label="S’B 22 - Accueil">
            <img src="<?php echo $basePath; ?>assets/images/branding/sb22-logo-white-transparent.png" alt="SB22">
            <div class="brand-text">
                <span class="brand-name">S’B 22</span>
            </div>
        </a>


        <nav class="main-nav">
            <a class="<?php echo $currentPage === 'accueil' ? 'active' : ''; ?>" href="<?php echo $basePath; ?>index.php">Accueil</a>
            <a class="<?php echo $currentPage === 'projets' ? 'active' : ''; ?>" href="<?php echo $basePath; ?>pages/projets/projets.php">Projets</a>
            <a class="<?php echo $currentPage === 'agence' ? 'active' : ''; ?>" href="<?php echo $basePath; ?>pages/agence/agence.php">À propos</a>
            <a class="<?php echo $currentPage === 'contact' ? 'active' : ''; ?>" href="<?php echo $basePath; ?>pages/contact/contact.php">Contact</a>
        </nav>


        <span class="sb22-maquette-mark" role="note">MAQUETTE</span>
        <a class="nav-contact <?php echo $currentPage === 'contact' ? 'contact-active' : ''; ?>" href="<?php echo $basePath; ?>pages/contact/contact.php">
            <span>Nous contacter</span>
            <svg class="sb22-arrow" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg>
        </a>


        <button class="mobile-menu-button" id="mobile-menu-button" type="button" aria-label="Ouvrir le menu">
            <span></span>
            <span></span>
        </button>
    </div>
</header>


<div class="mobile-menu" id="mobile-menu">
    <nav>
        <a class="<?php echo $currentPage === 'accueil' ? 'active' : ''; ?>" href="<?php echo $basePath; ?>index.php">Accueil</a>
        <a class="<?php echo $currentPage === 'projets' ? 'active' : ''; ?>" href="<?php echo $basePath; ?>pages/projets/projets.php">Projets</a>
        <a class="<?php echo $currentPage === 'agence' ? 'active' : ''; ?>" href="<?php echo $basePath; ?>pages/agence/agence.php">À propos</a>
        <a class="<?php echo $currentPage === 'contact' ? 'active' : ''; ?>" href="<?php echo $basePath; ?>pages/contact/contact.php">Contact</a>
    </nav>

    <a class="mobile-contact" href="<?php echo $basePath; ?>pages/contact/contact.php">Nous contacter</a>
</div>
