from pathlib import Path
root=Path(__file__).resolve().parents[1]/"maquettes"/"version-b"
count=0
for file in [root/"index.html", *root.glob("pages/**/*.html")]:
    html=file.read_text(encoding="utf-8")
    prefix="" if file.parent==root else "../../"
    css=f'<link rel="stylesheet" href="{prefix}assets/css/feedback-wow.css">'
    js=f'<script src="{prefix}assets/js/feedback-wow.js" defer></script>'
    if css in html and js in html:
        continue
    original=f'<link rel="stylesheet" href="{prefix}assets/css/feedback-final.css">'
    original_js=f'<script src="{prefix}assets/js/feedback-final.js" defer></script>'
    assert original in html, file
    assert original_js in html, file
    html=html.replace(original,original+"\n    "+css,1)
    html=html.replace(original_js,original_js+"\n    "+js,1)
    file.write_text(html,encoding="utf-8")
    count+=1
print("WOW animations linked in",count,"pages")
assert count==25
