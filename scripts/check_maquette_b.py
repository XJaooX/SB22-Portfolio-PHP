from pathlib import Path
from collections import Counter
from html.parser import HTMLParser
from urllib.parse import unquote, urlsplit
import re

root=Path(__file__).resolve().parents[1]/"maquettes"/"version-b"
pages=list(root.rglob("*.html"))

class Parser(HTMLParser):
    def __init__(self):
        super().__init__()
        self.refs=[]
        self.ids=[]
        self.cards=[]
        self.modals=[]
        self.forms=[]
        self.videos=[]
    def handle_starttag(self,tag,attrs):
        attrs=dict(attrs)
        if attrs.get("id"): self.ids.append(attrs["id"])
        field={"a":"href","img":"src","link":"href","script":"src","source":"src","video":"poster","form":"action"}.get(tag)
        if field and attrs.get(field):self.refs.append((tag,attrs[field]))
        if tag=="article" and "kg-project-card" in attrs.get("class",""):self.cards.append(attrs.get("data-project"))
        if tag=="div" and "project-modal" in attrs.get("class","").split():self.modals.append(attrs.get("id"))
        if tag=="form":self.forms.append(attrs)
        if tag=="video":self.videos.append(attrs)

errors=[]
counts={"images":0,"links":0,"videos":0,"scripts":0}
for page in pages:
    parser=Parser()
    body=page.read_text(encoding="utf-8")
    parser.feed(body)
    for tag,ref in parser.refs:
        if ref.startswith(("#",)): 
            if len(ref)>1 and unquote(ref[1:]) not in parser.ids:errors.append((page.name,ref,"anchor absent"))
            continue
        url=urlsplit(ref)
        if url.scheme or ref.startswith("//") or not url.path:continue
        target=(page.parent/unquote(url.path)).resolve()
        if not target.is_relative_to(root) or not target.is_file():
            errors.append((page.relative_to(root).as_posix(),ref,"fichier absent"))
            continue
        counts["links"]+=1
        if tag in ("img",):counts["images"]+=1
        if tag=="source" and target.suffix==".mp4":counts["videos"]+=1
        if tag=="script":counts["scripts"]+=1
        if url.fragment and target.suffix==".html":
            other=Parser()
            other.feed(target.read_text(encoding="utf-8"))
            if unquote(url.fragment) not in other.ids:
                errors.append((page.name,ref,"ancre cible absente"))
    for key,amount in Counter(parser.ids).items():
        if amount>1:errors.append((page.name,key,"ID duplicado"))
    if body.count("feedback-final.css")!=1:errors.append((page.name,"CSS final",body.count("feedback-final.css")))
    if body.count("feedback-final.js")!=1:errors.append((page.name,"JS final",body.count("feedback-final.js")))
    for slug in parser.cards:
        if slug and "project-"+slug not in parser.modals:
            errors.append((page.name,slug,"card without modal"))
    for slug in ("kuba-home","plumes-de-coeur","kid-fitness-lexy","youplaboom-meta"):
        if "project-"+slug in parser.modals:
            section=body.split('id="project-'+slug+'"',1)[1].split("</article>",1)[0]
            for term in ("L’objectif du client","Notre intervention","Les réalisations"):
                if term not in section:errors.append((page.name,slug,"missing "+term))
            if "Le besoin</span>" in section:errors.append((page.name,slug,"old duplicate copy"))
    if "project-kid-fitness-lexy" in parser.modals and 'class="sb22-video-feature"' not in body:errors.append((page.name,"kid video missing"))
    if "project-youplaboom-meta" in parser.modals and body.count('class="sb22-video-feature"')<1:errors.append((page.name,"youplaboom video missing"))

main=root/"pages"/"projets"/"projets.html"
mainparser=Parser()
mainparser.feed(main.read_text(encoding="utf-8"))
if len(mainparser.cards)!=4:errors.append(("projects",len(mainparser.cards),"should be 4"))
if len(mainparser.modals)!=4:errors.append(("projects",len(mainparser.modals),"should be 4"))

home=(root/"index.html").read_text(encoding="utf-8")
for term in ("Chaque projet raconte","kuba-whatsapp/kuba-carousel-cover.jpg","SB22 Agency"):
    if term not in home: errors.append(("index",term,"missing"))
about=(root/"pages/agence/agence.html").read_text(encoding="utf-8")
if "sb22-about-story" not in about or "book-values" in about:errors.append(("about","not revamped"))

contact=(root/"pages/contact/contact.html").read_text(encoding="utf-8")
for term in ('method="POST"','data-netlify="true"','name="contact-sb22"','name="form-name"','netlify-honeypot="website"','type="submit"','action="merci.html"'):
    if term not in contact:errors.append(("contact",term,"missing"))
if "onsubmit=" in contact or "Envoi indisponible dans cet aperçu" in contact:errors.append(("contact","form still disabled"))
success=root/"pages/contact/merci.html"
if not success.is_file():errors.append(("success page","missing"))
if "Thank you" not in success.read_text(encoding="utf-8") and "Merci pour votre message" not in success.read_text(encoding="utf-8"):errors.append(("confirmation","missing"))

print("Páginas HTML:",len(pages))
print("Referências internas verificadas:",counts["links"])
print("Imagens:",counts["images"],"vídeos:",counts["videos"],"scripts:",counts["scripts"])
print("Cards e fichas:",len(mainparser.cards),len(mainparser.modals))
print("Erros:",len(errors))
for err in errors[:40]:print("ERRO:",err)
if errors:raise SystemExit(1)
