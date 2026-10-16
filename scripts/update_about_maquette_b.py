from pathlib import Path
import re

root = Path(__file__).resolve().parents[1] / "maquettes" / "version-b"
page = root / "pages" / "agence" / "agence.html"
text = page.read_text(encoding="utf-8")
text = text.replace('Une agence, <em>des réalisations.</em>', 'Des idées, <em>des réalisations.</em>')
text = text.replace(
    'SB22 Agency accompagne les entreprises en France, au Luxembourg et en Belgique. Ce portfolio présente une sélection de publications, créations graphiques, vidéos et supports réalisés pour ses clients.',
    'SB22 Agency accompagne des entreprises et des projets dans leur communication, leur image et leur visibilité. Derrière chaque réalisation, il y a un besoin concret et une manière de le traduire en images.'
)
new_section = '''<section class="sb22-about-story" aria-labelledby="sb22-about-title" data-reveal>
    <div class="sb22-about-copy">
        <p class="book-overline">L’AGENCE</p>
        <h2 id="sb22-about-title">Des échanges, puis des créations concrètes.</h2>
        <p>Nous partons de l’activité du client et du message à transmettre. Selon le projet, cela prend la forme d’une publication, d’une affiche, d’une vidéo ou d’un support imprimé.</p>
        <p>Ce portfolio rassemble ces différents formats pour montrer notre travail, au-delà d’une simple présentation de services.</p>
        <a class="sb22-about-link" href="../projets/projets.html">Découvrir les réalisations <span aria-hidden="true">→</span></a>
    </div>
    <div class="sb22-about-images">
        <figure><img src="../../assets/images/projects/kuba/kuba-instagram/kuba-instagram-02.jpg" alt="Publication créée pour Kuba Home" loading="lazy"><figcaption>Publications · Kuba Home</figcaption></figure>
        <figure><img src="../../assets/images/projects/plumes-de-coeur/plumes-2.jpg" alt="Support de signalétique pour Plumes de Cœur" loading="lazy"><figcaption>Signalétique · Plumes de Cœur</figcaption></figure>
    </div>
</section>
<section class="sb22-about-process" aria-label="Notre façon de travailler" data-reveal>
    <p class="book-overline">COMMENT NOUS TRAVAILLONS</p>
    <div class="sb22-about-process-grid">
        <article><span>01</span><h3>Comprendre</h3><p>Identifier le projet, le public et le message essentiel.</p></article>
        <article><span>02</span><h3>Créer</h3><p>Concevoir des supports adaptés à chaque format.</p></article>
        <article><span>03</span><h3>Montrer</h3><p>Mettre en avant le travail réalisé, sans discours inutile.</p></article>
    </div>
</section>'''
text,n=re.subn(r'<section class="book-values"[\s\S]*?</section>',lambda _:new_section,text,count=1)
assert n==1
page.write_text(text,encoding="utf-8")

for p in [root/"index.html", *root.glob("pages/**/*.html")]:
    text=p.read_text(encoding="utf-8")
    base="" if p.parent==root else "../../"
    css='<link rel="stylesheet" href="'+base+'assets/css/feedback-final.css">'
    js='<script src="'+base+'assets/js/feedback-final.js" defer></script>'
    if css not in text:text=text.replace("</head>", "    "+css+"\n</head>", 1)
    if js not in text:text=text.replace("</body>", "    "+js+"\n</body>", 1)
    text=text.replace('class="project-card kg-project-card','data-reveal class="project-card kg-project-card')
    p.write_text(text,encoding="utf-8")

print("BLOCO 2: À propos atualizado; CSS e animações ligados às 24 páginas.")
