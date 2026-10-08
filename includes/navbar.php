<?php
// Se a página não indicar qual está ativa, usa Accueil.
if (!isset($currentPage)) {
    $currentPage = 'accueil';
}
?>

<!-- Barra superior que mostra que o site ainda é uma maquete -->
<div class="work-banner">
    <span class="banner-mobile">MAQUETTE — VERSION DE TRAVAIL</span>
    <span class="banner-desktop">MAQUETTE — VERSION DE TRAVAIL · CONTENU ET VISUELS EN COURS DE VALIDATION</span>
</div>

<!-- Isto é a navbar principal -->
<header class="site-header" id="site-header">
    <div class="nav-container">

        <!-- Logo da agência. Ao clicar volta para a Accueil -->
        <a class="brand" href="<?php echo $basePath; ?>index.php" aria-label="S’B 22 Agency - Accueil">
            <img src="<?php echo $basePath; ?>assets/images/branding/sb22-logo-navy.png" alt="S’B 22 Agency">
            <div class="brand-text">
                <span class="brand-name">S’B 22</span>
                <span class="brand-subtitle">Agency</span>
            </div>
        </a>

        <!-- Navegação para desktop -->
        <nav class="main-nav">
            <a class="<?php echo $currentPage === 'accueil' ? 'active' : ''; ?>" href="<?php echo $basePath; ?>index.php">Accueil</a>
            <a class="<?php echo $currentPage === 'agence' ? 'active' : ''; ?>" href="<?php echo $basePath; ?>pages/agence/agence.php">L’agence</a>
            <a class="<?php echo $currentPage === 'projets' ? 'active' : ''; ?>" href="<?php echo $basePath; ?>pages/projets/projets.php">Projets</a>
            <a class="<?php echo $currentPage === 'expertises' ? 'active' : ''; ?>" href="<?php echo $basePath; ?>pages/expertises/expertises.php">Expertises</a>
            <a class="<?php echo $currentPage === 'contact' ? 'active' : ''; ?>" href="<?php echo $basePath; ?>pages/contact/contact.php">Contact</a>
        </nav>

        <!-- Botão de contacto -->
        <a class="nav-contact" href="<?php echo $basePath; ?>pages/contact/contact.php">
            <span>Parlons de votre projet</span>
            <span aria-hidden="true">↗</span>
        </a>

        <!-- Botão que abre o menu em telemóvel -->
        <button class="mobile-menu-button" id="mobile-menu-button" type="button" aria-label="Ouvrir le menu">
            <span></span>
            <span></span>
        </button>
    </div>
</header>

<!-- Menu de telemóvel -->
<div class="mobile-menu" id="mobile-menu">
    <nav>
        <a class="<?php echo $currentPage === 'accueil' ? 'active' : ''; ?>" href="<?php echo $basePath; ?>index.php">Accueil</a>
        <a class="<?php echo $currentPage === 'agence' ? 'active' : ''; ?>" href="<?php echo $basePath; ?>pages/agence/agence.php">L’agence</a>
        <a class="<?php echo $currentPage === 'projets' ? 'active' : ''; ?>" href="<?php echo $basePath; ?>pages/projets/projets.php">Projets</a>
        <a class="<?php echo $currentPage === 'expertises' ? 'active' : ''; ?>" href="<?php echo $basePath; ?>pages/expertises/expertises.php">Expertises</a>
        <a class="<?php echo $currentPage === 'contact' ? 'active' : ''; ?>" href="<?php echo $basePath; ?>pages/contact/contact.php">Contact</a>
    </nav>

    <a class="mobile-contact" href="<?php echo $basePath; ?>pages/contact/contact.php">Parlons de votre projet</a>
</div>
