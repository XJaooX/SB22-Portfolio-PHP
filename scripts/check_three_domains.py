#!/usr/bin/env python3
"""Contrôles sans réseau de la maquette Netlify SB22."""
from pathlib import Path
from html.parser import HTMLParser
from collections import Counter
from urllib.parse import urlsplit,unquote

ROOT=Path(__file__).resolve().parents[1]/"maquettes"/"version-b"
TARGET=ROOT/"pages/projets/projets.html"

class Scanner(HTMLParser):
  def __init__(self):
    super().__init__()
    self.refs=[]
    self.ids=[]
    self.cards=[]
    self.modals=[]
    self.filters=[]
    self.sources=[]
  def handle_starttag(self,tag,attrs):
    attrs=dict(attrs)
    if attrs.get("id"):self.ids.append(attrs["id"])
    key={"a":"href","img":"src","script":"src","link":"href","video":"poster","source":"src","form":"action"}.get(tag)
    if key and attrs.get(key):self.refs.append((tag,attrs[key]))
    if tag=="article" and "project-card" in attrs.get("class","").split():self.cards.append((attrs.get("data-project"),attrs.get("data-domain")))
    if tag=="div" and "project-modal" in attrs.get("class","").split():self.modals.append(attrs.get("id"))
    if tag=="button" and "data-domain-filter" in attrs:self.filters.append(attrs["data-domain-filter"])
    if tag=="source":self.sources.append(attrs.get("src",""))

def parse(path):
  scan=Scanner()
  scan.feed(path.read_text(encoding="utf-8"))
  return scan

errors=[]
legacy=list((ROOT/"pages/projets").glob("projets--*.html"))
assert len(legacy)==19
for file in legacy:
  data=file.read_text(encoding="utf-8")
  if 'window.location.replace(' not in data or 'projets.html' not in data:
    errors.append((file.name,"not redirect"))

live=[p for p in ROOT.rglob("*.html") if p not in legacy]
counts=Counter()
for path in live:
  scan=parse(path)
  for key,count in Counter(scan.ids).items():
    if count>1:errors.append((path.name,"duplicate id",key,count))
  for tag,ref in scan.refs:
    if ref.startswith('#'):
      if len(ref)>1 and unquote(ref[1:]) not in scan.ids:errors.append((path.name,"missing anchor",ref))
      continue
    url=urlsplit(ref)
    if url.scheme or ref.startswith('//') or not url.path:continue
    target=(path.parent/unquote(url.path)).resolve()
    if not target.is_relative_to(ROOT) or not target.is_file():
      errors.append((path.name,"missing file",ref))
      continue
    counts["assets"]+=1
    if tag=="img":counts["images"]+=1
    if tag=="source" and ref.endswith(".mp4"):counts["videos"]+=1
    if tag=="script":counts["js"]+=1
  for slug,dom in scan.cards:
    if 'project-'+str(slug) not in scan.modals:
      errors.append((path.name,"card without modal",slug))

project=parse(TARGET)
expected={
  "kuba-home":"social-media",
  "plumes-social":"social-media",
  "plumes-signaletique":"design-graphique",
  "kid-fitness-lexy":"meta-ads",
  "youplaboom-meta":"meta-ads",
  "atelier-respira":"production-video",
  "interview-capsule":"production-video"
}
if dict(project.cards)!=expected:errors.append(("wrong cards",project.cards))
if set(project.filters)!={"tous","social-media","design-graphique","meta-ads","production-video"}:errors.append(("wrong filters",project.filters))
if len(project.modals)!=len(expected):errors.append(("wrong number of cases",len(project.modals)))

text=TARGET.read_text(encoding="utf-8")
for slug in expected:
  section=text.split('id="project-'+slug+'"',1)[-1].split('</article>',1)[0]
  markers=('Le projet','Son objectif','Notre intervention','Les réalisations') if slug in ('atelier-respira','interview-capsule') else ('Le client','Son objectif','Notre intervention','Les réalisations')
  for marker in markers:
    if marker=="Les réalisations" and slug in ("kuba-home","plumes-social"):
      if "sb22-case-carousel" not in section: errors.append((slug,"carousel missing"))
    elif marker not in section:errors.append((slug,"missing editorial",marker))
  if 'plumes-social'==slug:
    for physical in ("plumes-1.jpg","plumes-2.jpg","plumes-3.jpg","plumes-4.jpg"):
      if physical in section:errors.append((slug,"physical media leaked",physical))
  if 'plumes-signaletique'==slug and "plumes-social/" in section:
    errors.append((slug,"social media leaked"))
for slug in ("kid-fitness-lexy","youplaboom-meta","atelier-respira","interview-capsule"):
  section=text.split('id="project-'+slug+'"',1)[-1].split('</article>',1)[0]
  if "<video controls" not in section:errors.append((slug,"video not embedded"))

homepage=(ROOT/"index.html").read_text(encoding="utf-8")
if 'kuba-carousel-cover.jpg' not in homepage:errors.append(("home","black cover missing"))
if 'sb22-home-domains' not in homepage:errors.append(("home","category navigation missing"))
if len(live)!=6:errors.append(("unexpected live pages",len(live)))
if homepage.count('class="pr-rail-card')!=5:errors.append(("home","expected five cards"))
for slug, expected_carousels in (("kuba-home",1),("plumes-social",2)):
  section=text.split('id="project-'+slug+'"',1)[-1].split('</article>',1)[0]
  if section.count('data-sb22-carousel')!=expected_carousels:
    errors.append((slug,"expected carousels",expected_carousels))
if 'https://www.instagram.com/kubahome_officiel/' not in text: errors.append(("kuba","instagram URL missing"))
kuba_modal=(ROOT/"includes/case-modals/kuba-home.php").read_text(encoding="utf-8")
if 'src="https://www.instagram.com/kubahome_officiel/embed/"' not in kuba_modal:errors.append(("kuba","real Instagram embed missing"))
if 'sb22-instagram-panel' in kuba_modal:errors.append(("kuba","old static mock still present"))

if 'sb22-carousels.js' not in text or 'sb22-carousels.css' not in text: errors.append(("carousels","assets missing"))
if "SB22 AGENCY" in (ROOT/"pages/contact/merci.html").read_text(encoding="utf-8"):
  errors.append(("brand","legacy footer text"))
if "05 projets" not in homepage:errors.append(("home","counter not updated"))
if "Rym / Atelier RESPIRA" not in text:errors.append(("rym","incorrect name"))
if "SB22 Agency" in homepage or "SB22 Agency" in text:errors.append(("brand","incorrect public identity"))

print("Páginas funcionais:",len(live),"Redirecionamentos antigos:",len(legacy))
print("Referências verificadas:",counts["assets"],"Imagens:",counts["images"],"Vídeos:",counts["videos"],"Scripts:",counts["js"])
print("Fichas:",len(project.cards),"Filtros:",len(project.filters))
print("Erros:",len(errors))
for error in errors[:30]:print("ERRO",error)
if errors:raise SystemExit(1)
