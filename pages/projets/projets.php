<?php
// Esta página está dentro de pages/projets, por isso voltamos duas pastas para chegar à raiz.
$basePath = '../../';

// Diz à navbar qual é a página ativa.
$currentPage = 'projets';
$pageTitle = "Projets — S’B 22 Agency";

// Adiciona o header e a navbar.
include '../../includes/header.php';
include '../../includes/navbar.php';
?>

<!-- Conteúdo da página Projets -->
<main class="page-content">
    <p class="eyebrow">Projets</p>
    <h1>Nos réalisations</h1>
    <p>Les projets clients seront ajoutés ici progressivement.</p>
</main>

<?php
// Adiciona o footer no fim da página.
include '../../includes/footer.php';
?>
