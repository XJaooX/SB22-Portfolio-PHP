# SB22 Agency — Ajouter un projet

Le catalogue PHP garantit une galerie cohérente lors des extensions.

## Où modifier

1. Ajouter une nouvelle réalisation dans maquettes/version-b/data/cases.php.
2. Choisir une catégorie existante avec domain, ou ajouter une catégorie dans maquettes/version-b/data/domains.php.
3. Ajouter les médias dans maquettes/version-b/assets/images/projects/ et maquettes/version-b/assets/videos/.
4. Pour les nouveaux projets, ne pas créer de page supplémentaire : maquettes/version-b/includes/project-modal.php génère la fiche.

## Champs

- id : identifiant unique, sans espaces
- domain : identifiant de catégorie
- sector : numéro et secteur
- name, description, image : données de la carte
- overline, context, objective, intervention : fiche du projet
- videos (facultatif) : liste de src, title, caption, poster
- images (facultatif) : liste de src, alt, caption

Les filtres, compteurs, et boutons précédent/suivant s'adaptent automatiquement au catalogue.

Les cinq premiers projets gardent temporairement leurs fiches historiques dans includes/case-modals/. Les nouveaux utilisent le modèle générique.

## Mise en ligne

Vérifier l'apparence mobile, les liens, les médias, les filtres et les comptes. Fusionner la branche de brouillon dans stage/php-maquette-b-20261019 uniquement après validation.

## RESPIRA

RESPIRA et la catégorie Production vidéo & événementiel sont un brouillon. Les trois vidéos reçues le 19 octobre 2026 ont été ajoutées. La catégorie et les textes doivent être validés avant publication.
