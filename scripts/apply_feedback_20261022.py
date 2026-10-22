from pathlib import Path
import re
import subprocess
import zipfile
import datetime

root = Path.home() / "Work Stage/SB22/Portfolio/Working/SB22-Portfolio-Maquette-B-PHP"
site = root / "maquettes/version-b"
changes = []

def update(relative, edits):
    path = site / relative
    original = path.read_text(encoding="utf-8")
    content = original
    for old, new in edits:
        count = content.count(old)
        if count != 1:
            raise ValueError(f"{relative}: expected once, found {count}: {old[:65]!r}")
        content = content.replace(old, new, 1)
    if content != original:
        path.write_text(content, encoding="utf-8")
        changes.append(str(path.relative_to(root)))

update("index.php", [
    ("<span>04 projets</span>", "<span>05 projets</span>"),
    ("01 / 04", "01 / 05"),
    ("<span> / 04</span>", "<span> / 05</span>"),
    ("De la stratégie aux réalisations, découvrez comment SB22 Agency accompagne les entreprises dans leur communication, leur image et leur visibilité, à travers des projets concrets.",
     "Des publications aux campagnes, en passant par les identités visuelles, les interviews et les vidéos : découvrez comment SB22 donne vie aux projets de ses clients."),
    ('data-category="Campagne &amp; vidéo" data-sector="Activités pour enfants"', 'data-category="Campagne Meta Ads &amp; vidéo" data-sector="Activités pour enfants"'),
    ('data-image="assets/images/projects/kid-fitness/kid-fitness-poster.jpg"', 'data-image="assets/images/projects/kid-fitness/kid-fitness-video-cover.jpg"'),
    ('<img src="assets/images/projects/kid-fitness/kid-fitness-poster.jpg" alt="" loading="lazy">', '<img src="assets/images/projects/kid-fitness/kid-fitness-video-cover.jpg" alt="" loading="lazy">'),
    ('<small>Campagne &amp; vidéo</small>', '<small>Campagne Meta Ads &amp; vidéo</small>'),
    ('<a href="pages/projets/projets.php?domaine=meta-ads">Meta Ads</a>', '<a href="pages/projets/projets.php?domaine=meta-ads">Meta Ads</a>\n    <a href="pages/projets/projets.php?domaine=production-video">Vidéo</a>'),
    ('</a>\n        </div>\n        <div class="pr-rail-bottom">', '''</a>
<a class="pr-rail-card" href="pages/projets/projets.php?domaine=production-video#project-atelier-respira" data-showcase-trigger data-image="assets/images/projects/respira/respira-brand-cover.png" data-secondary="" data-name="Atelier RESPIRA" data-category="Création de contenus vidéo" data-sector="Bien-être et ateliers" data-index="05">
    <span class="pr-rail-thumb"><img src="assets/images/projects/respira/respira-brand-cover.png" alt="" loading="lazy"></span>
    <span class="pr-rail-copy"><strong>Atelier RESPIRA</strong><small>Création de contenus vidéo</small></span>
    <span class="pr-rail-arrow" aria-hidden="true"><svg class="sb22-arrow" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></span>
</a>
        </div>
        <div class="pr-rail-bottom">'''),
])

update("data/cases.php", [
    ("'domain' => 'social-media',\n        'sector' => '06 / Bien-être & ateliers'", "'domain' => 'production-video',\n        'sector' => '06 / Bien-être & ateliers'"),
    ("'overline' => 'Rim Rim / Atelier RESPIRA'", "'overline' => 'Rym / Atelier RESPIRA'"),
    ("'description' => 'Deux contenus vidéo pour faire découvrir l’ambiance de l’atelier sur les réseaux sociaux.'",
     "'description' => 'Deux vidéos originales pour présenter l’expérience et les temps forts de l’Atelier RESPIRA.'"),
    ("'intervention' => 'Création de contenu vidéo pour le Social Media Management : une immersion dans l’atelier et un format court.'",
     "'intervention' => 'Conception et réalisation de deux contenus vidéo : une présentation de l’événement et un montage court adapté aux réseaux sociaux.'")
])

update("data/domains.php", [
    ("'description' => 'Créations pour Kuba Home, Plumes de Cœur Éditions et contenus vidéo pour l’Atelier RESPIRA.'",
     "'description' => 'Publications et lignes éditoriales pour Kuba Home et Plumes de Cœur Éditions.'"),
    ("'label' => 'Interviews & capsules vidéo'", "'label' => 'Création de contenus vidéo'"),
    ("'title' => 'Des histoires qui se racontent en images.'", "'title' => 'Des histoires, des événements et des savoir-faire en vidéo.'"),
    ("'description' => 'Des interviews capsules qui font place aux expériences et aux émotions.'",
     "'description' => 'Vidéos de l’Atelier RESPIRA, interviews et formats courts conçus pour donner vie aux projets.'")
])

update("pages/agence/agence.php", [
    ("SB22 Agency accompagne des entreprises et des projets dans leur communication, leur image et leur visibilité. Derrière chaque réalisation, il y a un besoin concret et une manière de le traduire en images.",
     "SB22 accompagne les entreprises dans leur communication, leurs relations publiques, leur stratégie digitale et leur création de contenus. Nous construisons des messages et des supports adaptés à chaque projet, de la première idée jusqu’à sa diffusion."),
    ("Nous partons de l’activité du client et du message à transmettre. Selon le projet, cela prend la forme d’une publication, d’une affiche, d’une vidéo ou d’un support imprimé.",
     "Chaque projet commence par une écoute attentive : quels publics toucher, quel message transmettre et quels canaux utiliser ? Notre réponse peut prendre la forme d’une stratégie de communication, d’une action de relations publiques ou d’un contenu visuel."),
    ("Ce portfolio rassemble ces différents formats pour montrer notre travail, au-delà d’une simple présentation de services.",
     "Nos réalisations réunissent publications, identités graphiques, campagnes digitales, vidéos et interviews, avec un même objectif : donner une image claire et cohérente de chaque activité."),
    ("<p class=\"book-overline\">COMMENT NOUS TRAVAILLONS</p>", "<p class=\"book-overline\">NOS DOMAINES D’EXPERTISE</p>"),
    ("<article><span>01</span><h3>Comprendre</h3><p>Identifier le projet, le public et le message essentiel.</p></article>",
     "<article><span>01</span><h3>Communication & relations publiques</h3><p>Définir le message, accompagner la prise de parole et développer la visibilité des projets.</p></article>"),
    ("<article><span>02</span><h3>Créer</h3><p>Concevoir des supports adaptés à chaque format.</p></article>",
     "<article><span>02</span><h3>Stratégie digitale</h3><p>Déployer des contenus et des campagnes adaptés aux publics et aux plateformes.</p></article>"),
    ("<article><span>03</span><h3>Montrer</h3><p>Mettre en avant le travail réalisé, sans discours inutile.</p></article>",
     "<article><span>03</span><h3>Création de contenus</h3><p>Imaginer et produire des visuels, des vidéos et des formats éditoriaux qui racontent un projet.</p></article>")
])

descriptions = {
    "kuba-home": (
        "Une vitrine digitale premium pour les créations de Kuba Home.",
        "Kuba Home présente des projets d’aménagement intérieur, notamment des cuisines, salles de bains et dressings.",
        "Mettre en valeur les réalisations et le savoir-faire de l’enseigne auprès d’une clientèle sensible au design et à la qualité des aménagements.",
        "Conception de la ligne éditoriale, création de publications visuelles et préparation de contenus adaptés à Instagram et Facebook."
    ),
    "plumes-social": (
        "Faire connaître la maison d’édition et son univers sur les réseaux sociaux.",
        "Plumes de Cœur Éditions est une maison d’édition qui valorise des auteurs, des ouvrages et une programmation culturelle.",
        "Faire découvrir les livres, les auteurs et les actualités de la maison d’édition tout en construisant une présence reconnaissable sur les réseaux.",
        "Création de visuels et de publications éditoriales pour présenter les livres, les auteurs, les nouveautés et les événements."
    ),
    "plumes-signaletique": (
        "Une identité éditoriale visible aussi dans l’espace physique.",
        "Plumes de Cœur Éditions est une maison d’édition dont l’identité se déploie aussi dans ses espaces d’accueil et de présentation.",
        "Assurer la cohérence entre l’univers graphique de la maison d’édition et la manière dont elle est présentée dans l’espace.",
        "Recherche graphique, direction artistique et conception des visuels de vitrine et de signalétique. La fabrication et la pose ne font pas partie des prestations présentées."
    ),
    "kid-fitness-lexy": (
        "Promouvoir les journées portes ouvertes et encourager les inscriptions.",
        "Kid Fitness Lexy propose des activités sportives et ludiques destinées aux enfants et aux familles.",
        "Faire connaître les journées portes ouvertes et présenter l’offre aux familles susceptibles d’être intéressées.",
        "Création d’un support graphique déclinable pour les publications et stories, ainsi que d’une vidéo promotionnelle liée à la campagne Meta Ads."
    ),
    "youplaboom-meta": (
        "Développer la visibilité locale de la microcrèche.",
        "Youplaboom est une structure d’accueil dédiée à la petite enfance qui s’adresse aux familles de son secteur.",
        "Présenter la microcrèche et son environnement aux parents afin de susciter des prises de contact et des demandes d’information.",
        "Création d’une vidéo promotionnelle au format vertical pour une campagne Meta Ads sur Facebook et Instagram."
    )
}

for slug, (former, client, objective, intervention) in descriptions.items():
    relative = "includes/case-modals/" + slug + ".php"
    update(relative, [
        (f'<div><span>Le client</span><p>{former}</p></div>',
         f'<div><span>Le client</span><p>{client}</p></div>'),
        (re.search(r'<div><span>Son objectif</span><p>.*?</p></div>', (site/relative).read_text(encoding="utf-8")).group(0),
         f'<div><span>Son objectif</span><p>{objective}</p></div>'),
        (re.search(r'<div><span>Notre intervention</span><p>.*?</p></div>', (site/relative).read_text(encoding="utf-8")).group(0),
         f'<div><span>Notre intervention</span><p>{intervention}</p></div>')
    ])

for page in [root / "index.php", *root.glob("includes/*.php"), *root.glob("pages/**/*.php"), *site.rglob("*.php"), *site.rglob("*.html")]:
    if not page.is_file():
        continue
    before = page.read_text(encoding="utf-8")
    after = before.replace("SB22 Agency", "SB22").replace("S’B 22 Agency", "SB22").replace("S'B 22 Agency", "SB22")
    after = re.sub(r'(\s*)<span class="brand-subtitle">Agency</span>', '', after)
    after = re.sub(r'(\s*)<span class="footer-brand-subtitle">Agency</span>', '', after)
    after = after.replace("Rim Rim / Atelier RESPIRA", "Rym / Atelier RESPIRA")
    if after != before:
        page.write_text(after, encoding="utf-8")
        changes.append(str(page.relative_to(root)))

static_pages = [
    ("index.php","index.html"),
    ("pages/projets/projets.php","pages/projets/projets.html"),
    ("pages/agence/agence.php","pages/agence/agence.html"),
    ("pages/expertises/expertises.php","pages/expertises/expertises.html")
]

for php, html in static_pages:
    output = subprocess.run(["php", str(site / php)], cwd=str(site), capture_output=True, text=True, check=True)
    if not output.stdout.startswith("<!DOCTYPE html>"):
        raise ValueError("Invalid PHP output for " + php)
    static = output.stdout.replace(".php", ".html")
    (site / html).write_text(static, encoding="utf-8")
    changes.append("maquettes/version-b/" + html)

for path in site.rglob("*.html"):
    original = path.read_text(encoding="utf-8")
    replaced = original.replace("SB22 Agency", "SB22").replace("S’B 22 Agency", "SB22").replace("S'B 22 Agency", "SB22")
    if replaced != original:
        path.write_text(replaced, encoding="utf-8")
        changes.append(str(path.relative_to(root)))

record = site / "REVISION-SEBAA-22-10-2026.txt"
record.write_text(
    "Version B — corrections du 22 octobre 2026\n"
    "Identité affichée : SB22, sauf les adresses et URL techniques existantes.\n"
    "Nom de la personne : Rym.\n"
    "Présentations client / objectif / prestation précisées dans les cinq dossiers.\n"
    "Atelier RESPIRA classé en création de contenus vidéo.\n"
    "Accueil : cinq projets, dont plusieurs productions vidéo.\n"
    "À propos : communication, relations publiques, stratégie digitale et création de contenus.\n"
    "Interview spécifique de Rym : aucun fichier identifié avec certitude. Ne pas attribuer par erreur la capsule d’interview existante à Rym sans confirmation.\n"
    "Maquette HTML et pages PHP actualisées. Site public non modifié.\n", encoding="utf-8"
)
changes.append(str(record.relative_to(root)))
print("Updated:", len(set(changes)))
for filename in sorted(set(changes)):
    print(filename)
