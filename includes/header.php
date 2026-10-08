<?php
// Define o caminho base para conseguir encontrar os assets a partir de qualquer página.
if (!isset($basePath)) {
    $basePath = '';
}

// Define o título da página. Se a página não definir um título próprio, usa o título principal.
if (!isset($pageTitle)) {
    $pageTitle = "S’B 22 Agency — Portfolio · Maquette";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Configurações básicas da página -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Título e descrição do site -->
    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="Portfolio de l'agence de relations publiques et communication S’B 22. Découvrez nos projets et notre approche humaine et stratégique.">

    <!-- Fontes usadas no portfolio original -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Liga o CSS principal -->
    <link rel="stylesheet" href="<?php echo $basePath; ?>assets/css/style.css">
</head>
<body>
