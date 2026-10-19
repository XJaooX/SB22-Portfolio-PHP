<?php
$basePath = $basePath ?? '';
$pageTitle = $pageTitle ?? 'SB22 Agency — Portfolio';
$styles = $styles ?? ['style.css'];
$scripts = $scripts ?? ['main.js'];
$bodyClass = $bodyClass ?? 'portfolio-inner-page';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?></title>
<meta name="description" content="Portfolio SB22 Agency. Découvrez les publications, vidéos, créations graphiques et signalétique réalisées pour nos clients.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<?php foreach ($styles as $style): ?>
<link rel="stylesheet" href="<?php echo $basePath; ?>assets/css/<?php echo htmlspecialchars($style, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?>">
<?php endforeach; ?>
</head>
<body class="<?php echo htmlspecialchars($bodyClass, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?>">
