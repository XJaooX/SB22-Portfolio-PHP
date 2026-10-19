from pathlib import Path
from html import escape
import re

root=Path(__file__).resolve().parents[1]/"maquettes"/"version-b"
folder=root/"pages/projets"
main=folder/"projets.html"
text=main.read_text(encoding="utf-8")
css='<link rel="stylesheet" href="../../assets/css/feedback-domains.css">'
js='<script src="../../assets/js/feedback-domains.js" defer></script>'
assert text.count(css)<=1
assert text.count(js)<=1
if css not in text:text=text.replace('</head>','    '+css+'\n</head>',1)
if js not in text:text.replace('</body>','    '+js+'\n</body>',1)
main.write_text(text,encoding="utf-8")

# Links to the original Plumes presentation now point to its physical-graphics dossier.
home=root/"index.html"
text=home.read_text(encoding="utf-8")
text=text.replace('pages/projets/projets.html#project-plumes-de-coeur','pages/projets/projets.html?domaine=design-graphique#project-plumes-signaletique')
nav='''<nav class="sb22-home-domains" aria-label="Explorer nos trois domaines">
    <a href="pages/projets/projets.html?domaine=social-media">Social Media</a>
    <a href="pages/projets/projets.html?domaine=design-graphique">Design graphique</a>
    <a href="pages/projets/projets.html?domaine=meta-ads">Meta Ads</a>
</nav>'''
if 'class="sb22-home-domains"' not in text:
    text=text.replace('</section>\n</main>',nav+'\n    </section>\n</main>',1)
home.write_text(text,encoding="utf-8")

# Keep all historic links but do not maintain obsolete duplicated static project listings.
count=0
for old in folder.glob("projets--*.html"):
    name=old.stem
    if "social-media" in name:domain="social-media"
    elif "digital" in name:domain="meta-ads"
    elif "communication" in name:domain="design-graphique"
    else:domain="tous"
    query="" if domain=="tous" else "?domaine="+domain
    target="projets.html"+query
    legacy=f'''<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Réalisations — SB22 Agency</title>
  <script>
  // Conserver les liens partagés avant la réorganisation du portfolio.
  window.location.replace("{target}" + window.location.hash);
  </script>
  <meta http-equiv="refresh" content="0;url={target}">
</head>
<body>
  <p>Nos réalisations sont maintenant classées par domaine.
     <a href="{target}">Découvrir les projets SB22 Agency</a>.</p>
</body>
</html>'''
    old.write_text(legacy,encoding="utf-8")
    count+=1
assert count==19,count
print(f"3 filtres, 19 redirections des anciennes URLs, liens de la page d’accueil mis à jour.")
