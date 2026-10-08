<?php
// Esta página está na raiz do projeto.
$basePath = '';

// Indica à navbar que a página ativa é a Accueil.
$currentPage = 'accueil';

// Título usado no separador do navegador.
$pageTitle = "S’B 22 Agency — Portfolio · Maquette";

// Adiciona o início do HTML e a navbar.
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Marca o topo da página para o botão "Haut de page" -->
<div id="top"></div>

<main class="home-main">

    <!-- HERO: primeira secção visível da Accueil -->
    <section class="hero">

        <!-- Pequena linha de informação no topo do Hero -->
        <div class="hero-meta">
            <span class="hero-badge">S’B 22 · MAQUETTE</span>
            <span class="hero-sector">Relations publiques & communication</span>
        </div>

        <div class="hero-grid">

            <!-- Parte esquerda: texto principal -->
            <div class="hero-copy">
                <span class="hero-kicker">S’B 22 Agency — Portfolio</span>

                <h1>
                    Chaque projet raconte
                    <span>une histoire.</span>
                </h1>

                <p class="hero-description">
                    Une sélection de projets qui illustrent notre approche : construire une communication cohérente,
                    créer des contenus qui valorisent votre image et développer la visibilité de votre activité.
                </p>

                <!-- Botões principais -->
                <div class="hero-actions">
                    <a class="button button-primary" href="pages/projets/projets.php">
                        Découvrir les projets <span aria-hidden="true">↓</span>
                    </a>

                    <a class="button button-secondary" href="pages/contact/contact.php">
                        Parler de mon projet <span aria-hidden="true">→</span>
                    </a>
                </div>
            </div>

            <!-- Parte direita: projeto Kuba Home -->
            <div class="hero-project">
                <img src="assets/images/projects/kuba/kuba-3.jpg" alt="Réalisation cliente Kuba Home présentée dans le portfolio S’B 22">

                <!-- Informação colocada por cima da imagem -->
                <div class="hero-project-overlay">
                    <div>
                        <span class="project-small">Projet réel · Kuba Home</span>
                        <span class="project-title">Présence vitrine premium</span>
                    </div>

                    <span class="project-small project-client">Client S’B 22</span>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
// Adiciona o footer no fim da página.
include 'includes/footer.php';
?>
