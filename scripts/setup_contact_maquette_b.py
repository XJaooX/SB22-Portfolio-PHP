from pathlib import Path
import re

root = Path(__file__).resolve().parents[1] / "maquettes" / "version-b"
path = root / "pages" / "contact" / "contact.html"
text = path.read_text(encoding="utf-8")
form = '<form id="contact-form" name="contact-sb22" method="POST" action="merci.html" data-netlify="true" netlify-honeypot="website">'
text, count = re.subn(r'<form id="contact-form"[^>]*>',form,text,count=1)
assert count==1
text = re.sub(r'\s*<input type="hidden" name="csrf_token"[^>]*>', '\n                <input type="hidden" name="form-name" value="contact-sb22">',text,count=1)
text, n = re.subn(r'<button class="form-submit" type="button" disabled aria-disabled="true">[\s\S]*?</button>',
    '<button class="form-submit" type="submit">Envoyer mon message <span aria-hidden="true">→</span></button>',text,count=1)
assert n==1
text, n = re.subn(r'<div class="form-note" role="status">[\s\S]*?</div>',
    '<div class="form-note" role="note"><span>i</span><p>Le formulaire utilise Netlify Forms. L’envoi sera disponible après publication sur Netlify et activation de la détection des formulaires. Vous pouvez aussi écrire à contact@sb22agency.com.</p></div>',text,count=1)
assert n==1
text=text.replace('data-demo="false"','')
path.write_text(text,encoding="utf-8")

success = re.sub(r'<main class="contact-page">[\s\S]*?</main>',
'''<main class="contact-page">
    <section class="sb22-contact-success" id="confirmation">
        <p class="eyebrow">SB22 AGENCY · CONTACT</p>
        <h1>Merci pour votre message.</h1>
        <p>Votre demande a été transmise. L’équipe SB22 Agency pourra prendre connaissance de votre message.</p>
        <a href="../../index.html">Retour à l’accueil</a>
    </section>
</main>''',text,count=1)
success=success.replace('<title>Contact — SB22 Agency</title>','<title>Message envoyé — SB22 Agency</title>')
assert success != text
(root / "pages" / "contact" / "merci.html").write_text(success,encoding="utf-8")
print("BLOCO 3: formulário POST Netlify com anti-spam e página de confirmação.")
