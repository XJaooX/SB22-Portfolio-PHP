<?php
$basePath = '../../';
$currentPage = 'contact';
$pageTitle = 'Contact — SB22';
$bodyClass = 'portfolio-inner-page';
$styles = ['style.css','portfolio-layout.css','design-unified.css','brand-official.css','maquette-watermark.css','feedback-sebaa.css','feedback-final.css','feedback-wow.css'];
$scripts = ['main.js','feedback-final.js','feedback-wow.js'];
require __DIR__ . '/../../includes/header.php';
require __DIR__ . '/../../includes/navbar.php';
?>
<div id="top"></div>
<main class="contact-page">
    <section class="contact-section">
        <div class="contact-left">
            <div>
                <p class="eyebrow">Prendre contact</p>
                <h1>Parlons de votre projet</h1>
                <p class="contact-intro">Vous souhaitez découvrir nos réalisations ou échanger autour d’un projet ? Contactez SB22.</p>
                <div class="contact-details">
                    <div class="contact-detail"><span class="contact-icon">✉</span><div><small>E-mail</small><a href="mailto:contact@sb22agency.com">contact@sb22agency.com</a></div></div>
                    <div class="contact-detail"><span class="contact-icon">☎</span><div><small>Téléphone</small><a href="tel:+33673031202">06 73 03 12 02</a></div></div>
                    <div class="contact-socials">
                        <a href="https://www.instagram.com/sb22agency/" target="_blank" rel="noopener noreferrer">Instagram</a>
                        <a href="https://www.facebook.com/people/SB-22/61580109419316/" target="_blank" rel="noopener noreferrer">Facebook</a>
                    </div>
                </div>
            </div>
            <div class="contact-bottom-text"><strong>SB22</strong><p>France · Luxembourg · Belgique</p></div>
        </div>
        <div class="contact-form-box">
                            <div class="form-note" role="note"><span>i</span><p>Le formulaire est en cours de configuration. Aucun message n’est envoyé pour le moment. Contactez-nous directement à contact@sb22agency.com.</p></div>
                                                <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?><div class="form-note" role="alert"><span>i</span><p>Votre message n’a pas été envoyé. Veuillez écrire à contact@sb22agency.com.</p></div><?php endif; ?>
<form id="contact-form" name="contact-sb22" method="POST" action="contact.php">
                <div class="form-row">
                    <div><label for="prenom">Prénom *</label><input id="prenom" name="prenom" value="" type="text" maxlength="100" required></div>
                    <div><label for="nom">Nom *</label><input id="nom" name="nom" value="" type="text" maxlength="100" required></div>
                </div>
                <div class="form-row">
                    <div><label for="email">E-mail *</label><input id="email" name="email" value="" type="email" maxlength="254" required></div>
                    <div><label for="telephone">Téléphone</label><input id="telephone" name="telephone" value="" type="tel" maxlength="50"></div>
                </div>
                <div class="form-row">
                    <div><label for="entreprise">Entreprise</label><input id="entreprise" name="entreprise" value="" type="text" maxlength="150"></div>
                    <div><label for="besoin">Votre besoin</label>
                        <select id="besoin" name="besoin">
                            <option value="">Sélectionnez votre besoin</option>
                                                            <option value="Relations publiques" >Relations publiques</option>
                                                            <option value="Communication &amp; stratégie" >Communication &amp; stratégie</option>
                                                            <option value="Marketing digital" >Marketing digital</option>
                                                            <option value="Création vidéo &amp; contenu" >Création vidéo &amp; contenu</option>
                                                            <option value="Communication print &amp; signalétique" >Communication print &amp; signalétique</option>
                                                            <option value="Création graphique" >Création graphique</option>
                                                            <option value="Autre demande" >Autre demande</option>
                                                    </select>
                    </div>
                </div>
                <div class="form-message"><label for="message">Message *</label><textarea id="message" name="message" maxlength="5000" rows="5" required></textarea></div>
                <button class="form-submit" type="submit">Tester le formulaire <span aria-hidden="true">→</span></button>
            </form>
                    </div>
    </section>
</main>
<?php require __DIR__ . '/../../includes/footer.php'; ?>
