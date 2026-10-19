# SB22 Agency — Maquette B PHP

Cette version conserve le design de la maquette B du 16/10/2026 et utilise PHP pour les pages, les éléments communs et les cartes de réalisations.

## Déploiement

Transférer le contenu du dossier de livraison dans htdocs sur un serveur compatible PHP, comme InfinityFree.
Le point d'entrée est index.php. Le fichier .htaccess définit cette page comme page d'accueil.

## Architecture

Les pages PHP utilisent les fichiers partagés includes/header.php, includes/navbar.php et includes/footer.php.
data/cases.php contient les cinq réalisations.
includes/project-card.php crée les cartes et includes/case-modals/ contient les fiches.
Les médias, les animations et les styles sont conservés depuis la maquette B originale.

## Contact

Le formulaire est une démonstration et n'envoie pas d'e-mails. Aucun message n'est transmis tant qu'un service de messagerie n'est pas configuré.

## Publication GitHub

Branche prévue: stage/php-maquette-b-20261019.
Le document root du site PHP est /home/jaooooo/sb22-portfolio/maquettes/version-b/ si le dépôt est cloné vers /home/jaooooo/sb22-portfolio.
La racine principale du dépôt ne contient pas cette version visuelle: utiliser le sous-dossier maquettes/version-b.
La configuration Apache redirige les anciennes adresses HTML de la maquette vers les pages PHP; valider les redirections après la publication sur alwaysdata.
Le formulaire de contact reste volontairement en mode démonstration.
