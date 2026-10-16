from pathlib import Path
import html
import re

root = Path(__file__).resolve().parents[1] / "maquettes" / "version-b"
cases = {
"kuba-home": ("Présenter les cuisines et aménagements de Kuba Home avec une communication visuelle claire.", "Ligne éditoriale, conception graphique, rédaction et création de contenus pour les réseaux sociaux.", "Publications, visuels de réalisations et comparaison avant/après."),
"plumes-de-coeur": ("Rendre visible la maison d’édition dans son lieu d’accueil et sur les réseaux sociaux.", "Création graphique et adaptation de l’univers éditorial à différents formats.", "Habillage de vitrine, signalétique et publications digitales."),
"kid-fitness-lexy": ("Présenter la journée portes ouvertes aux familles avec des informations faciles à comprendre.", "Conception d’une affiche et déclinaison pour la communication digitale.", "Affiche événementielle, visuels et vidéo verticale."),
"youplaboom-meta": ("Faire découvrir l’univers de Youplaboom dans un format adapté au mobile.", "Création et montage d’une vidéo destinée aux réseaux sociaux.", "Vidéo promotionnelle verticale et visuel de campagne.")
}
videos = {
"kid-fitness-lexy": ("../../assets/videos/kid-fitness/kid-fitness-meta.mp4","../../assets/images/projects/kid-fitness/kid-fitness-video-cover.jpg","La vidéo Kid Fitness"),
"youplaboom-meta": ("../../assets/videos/youplaboom/youplaboom-meta.mp4","../../assets/images/projects/youplaboom/youplaboom-meta-cover.jpg","La vidéo Youplaboom")
}
def e(s): return html.escape(s, quote=True)

def fix_modal(m):
    block=m.group(0)
    found=re.match(r'<div class="project-modal" id="project-([^"]+)"',block)
    if not found or found.group(1) not in cases:return block
    slug=found.group(1)
    entries=zip(("L’objectif du client","Notre intervention","Les réalisations"),cases[slug])
    small=''.join('<div><span>'+e(title)+'</span><p>'+e(copy)+'</p></div>' for title,copy in entries)
    replacement='<section class="book-case-story" aria-label="Le projet en bref"><div class="sb22-case-context">'+small+'</div></section>'
    block,n=re.subn(r'<section class="book-case-story"[^>]*>[\s\S]*?</section>',lambda _:replacement,block,count=1)
    if n!=1:raise RuntimeError("Story not found: "+slug)
    block=re.sub(r'\s*<section class="book-case-services">[\s\S]*?</section>','',block,count=1)
    if slug in videos:
        block=re.sub(r'<figure class="book-case-figure is-video">[\s\S]*?</figure>','',block)
        source,poster,title=videos[slug]
        v='<section class="sb22-video-feature" aria-label="Vidéo du projet"><div class="sb22-video-copy"><span>EN VIDÉO</span><h3>'+e(title)+'</h3><p>Découvrez le contenu vidéo réalisé pour ce projet.</p></div><div class="sb22-video-container"><video controls playsinline preload="metadata" poster="'+poster+'" aria-label="'+e(title)+'"><source src="'+source+'" type="video/mp4">Votre navigateur ne prend pas en charge cette vidéo.</video></div></section>'
        block=block.replace('<div class="book-case-media">','<div class="book-case-media">'+v,1)
    return block

updated=0
for path in (root/"pages/projets").glob("*.html"):
    data=path.read_text(encoding="utf-8")
    new,n=re.subn(r'<div class="project-modal" id="project-[^"]+"[\s\S]*?(?=<div class="project-modal" id="project-|</main>)',fix_modal,data)
    if n:
        path.write_text(new,encoding="utf-8")
        updated+=1
assert updated==20,updated
print("BLOCO 1:",updated,"páginas corrigidas; fichas curtas e vídeos destacados.")
