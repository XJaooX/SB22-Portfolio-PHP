<?php
// Esta página está dentro de pages/contact, por isso voltamos duas pastas para chegar à raiz.
$basePath = '../../';

// Diz à navbar qual é a página ativa.
$currentPage = 'contact';
$pageTitle = "Contact — S’B 22 Agency";

// Adiciona o header e a navbar.
include '../../includes/header.php';
include '../../includes/navbar.php';
?>

<!-- Conteúdo da página Contact -->
<main class="page-content">
    <p class="eyebrow">Contact</p>
    <h1>Parlons de votre projet</h1>
    <p>Le formulaire de contact fonctionnel sera ajouté dans une prochaine étape.</p>
</main>

<?php
// Adiciona o footer no fim da página.
include '../../includes/footer.php';
?>
