<?php
// Esta página está dentro de pages/expertises, por isso voltamos duas pastas para chegar à raiz.
$basePath = '../../';

// Diz à navbar qual é a página ativa.
$currentPage = 'expertises';
$pageTitle = "Expertises — S’B 22 Agency";

// Adiciona o header e a navbar.
include '../../includes/header.php';
include '../../includes/navbar.php';
?>

<!-- Conteúdo da página Expertises -->
<main class="page-content">
    <p class="eyebrow">Expertises</p>
    <h1>Nos expertises</h1>
    <p>Les différentes expertises de l'agence seront présentées sur cette page.</p>
</main>

<?php
// Adiciona o footer no fim da página.
include '../../includes/footer.php';
?>
