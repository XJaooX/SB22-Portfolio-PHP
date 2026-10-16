# SB22 Agency — Maquette B (16/10/2026)

Version HTML de présentation issue de la maquette B, sur la branche `stage/maquette-b-feedback-sebaa-20261015`. La branche `main` du projet PHP n'est pas modifiée.

## Changements

- Fiches des projets courtes en trois parties : objectif du client, intervention, réalisations
- Créations graphiques mises en avant avant les textes
- Vidéos Kid Fitness et Youplaboom mises en évidence, avec contrôle de lecture et affiches de prévisualisation
- Page À propos enrichie d'exemples visuels réels, sans inventer d'équipe ou d'histoire
- Transitions légères et respect de `prefers-reduced-motion`
- Formulaire HTML préparé pour Netlify Forms, avec champ anti-spam et page `pages/contact/merci.html`

## Publication

1. Sur Netlify, ouvrir le site de prévisualisation souhaité ou en créer un nouveau.
2. Déposer le ZIP depuis Downloads dans l'interface de déploiement, sans remplacer automatiquement les anciennes maquettes.
3. Vérifier que la détection des formulaires est activée dans Netlify Forms.
4. Faire un envoi de test avec une adresse dont on dispose et vérifier la réception dans Netlify Forms.
5. Vérifier l'Accueil, les quatre projets, les vidéos, À propos, Contact et l'affichage sur mobile.

## Tests effectués localement

- Analyse de 25 pages HTML, références internes et médias
- Vérification des quatre cartes/fiches
- Syntaxe JavaScript
- Navigateur Chromium à 320, 375, 390, 768 et 1440 px
- Contrôles du menu mobile, ouverture/fermeture des fiches et présence des vidéos
- Configuration HTML du formulaire

Le test d'envoi du formulaire en production reste à effectuer après le déploiement Netlify.

## Animations « WOW » (16/10)

Fichiers ajoutés : `maquettes/version-b/assets/css/feedback-wow.css` et `maquettes/version-b/assets/js/feedback-wow.js`.

- Accueil : animation progressive du titre, de la description, des quatre cartes et de la zone projet.
- Accueil : révélation de la couverture par un rideau bleu marine avec léger zoom.
- Changement de projet : nouvelle transition de la couverture et des informations en sélectionnant un autre projet.
- Projets : cartes plus expressives au survol, avec une légère élévation.
- Fiches projets : ouverture animée et dévoilement de l'image principale.
- Barre discrète indiquant la progression dans la page.
- Les effets se désactivent si l'utilisateur préfère un mouvement réduit.

Vérification automatique : animations actives et aucun débordement horizontal observé à 390 et 1440 px avec Chromium en mode mouvement autorisé.
Le site Netlify déjà en ligne ne se met pas à jour tout seul : il faut déposer le nouveau ZIP pour voir ces animations en ligne.
