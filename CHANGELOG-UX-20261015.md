# Portfolio SB22 Agency — révision UX et mobile

Version de travail isolée, basée sur la branche stage/mvc-estrutura-20261013.

## Référence étudiée

Aymen Studio : https://aymenstudio.com/work/

Principes retenus : réalisations visibles dès l'accueil, projets présentés par images, texte court, hiérarchie lisible, formats visuels respectés sur mobile. Aucun code ni visuel d'Aymen Studio n'est repris.

## Changements

- Accueil : nom de l'agence explicite, accroche conservée, contenu plus court et galerie de créations réelles.
- Sélection de deux réalisations : Kuba Home et Plumes de Cœur, avec deux exemples visuels par projet et accès direct à la présentation détaillée.
- Projets : cartes plus sobres, duo de publications/visuels plutôt que logos dominants, filtres conservés, intitulés simplifiés.
- Mobile : une seule colonne pour les projets, images entièrement visibles, espaces et typographies adaptés, sans défilement horizontal des cartes.
- Navigation : accès à une réalisation depuis l'Accueil via une ancre ouvrant le projet ; cartes accessibles au clavier.
- Aucun changement de la branche main ni publication Netlify dans cette révision.

## Vérifications à réaliser dans le navigateur

- Page d'accueil sur 320, 375, 390, 768 et 1440 px.
- Affichage complet des visuels Kuba Home et Plumes de Cœur.
- Liens Accueil → Projets → modale, fermeture, filtres et navigation mobile.
- Correspondance des images avec les réalisations validées par l'agence.
- Déploiement de la version retenue et retour de Mme Sebaa.

## Limites

La branche PHP disponible ne contient pas une copie identifiée comme étant exactement la maquette B hébergée sur Netlify. Le travail doit donc être comparé à cette maquette avant d'y remplacer des fichiers. Le formulaire de contact historique ne réalise pas d'envoi côté serveur.


## Deuxième phase — étude de cas et retours détaillés

- Analyse de Aymen Studio : https://aymenstudio.com/work/
- Accueil : identification immédiate du portfolio SB22 Agency, réalisation visible et texte concis.
- Réalisations : suppression des présentations centrées sur les logos, prévisualisations en duo, liens vers de vraies pages projets.
- Navigation : cartes de projets transformées en liens accessibles, page détail individuelle avec URL permanente.
- Études de cas : contexte, mission confiée, démarche, prestations et galerie réelle avant les textes de détail.
- Formats respectés : visuels non rognés, affiches, publications et vidéos intégrées, mise en page mono-colonne sur mobile.
- Boutons : remplacement des flèches décoratives principales par un pictogramme SVG discret.
- Le site de production Netlify n'a pas été remplacé. Les pages PHP sont à héberger sur un serveur PHP ou à exporter statiquement.

Pages de détail : pages/projets/detail.php?project=kuba-home et pages/projets/detail.php?project=plumes-de-coeur
