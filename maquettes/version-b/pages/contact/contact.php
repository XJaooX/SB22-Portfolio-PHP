<?php
$basePath = '../../';
$currentPage = 'contact';
$pageTitle = 'Contact — S’B 22';
$bodyClass = 'portfolio-inner-page';
$styles = ['style.css','portfolio-layout.css','design-unified.css','brand-official.css','feedback-sebaa.css','feedback-final.css','feedback-wow.css'];
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
                <p class="contact-intro">Vous souhaitez découvrir nos réalisations ou échanger autour d’un projet ? Contactez S’B 22 directement par e-mail ou par téléphone.</p>
                <div class="contact-details">
                    <div class="contact-detail"><span class="contact-icon">✉</span><div><small>E-mail</small><a href="mailto:contact@sb22agency.com">contact@sb22agency.com</a></div></div>
                    <div class="contact-detail"><span class="contact-icon">☎</span><div><small>Téléphone</small><a href="tel:+33673031202">06 73 03 12 02</a></div></div>
                    <div class="contact-socials">
                        <a href="https://www.instagram.com/sb22agency/" target="_blank" rel="noopener noreferrer">Instagram</a>
                        <a href="https://www.facebook.com/people/SB-22/61580109419316/" target="_blank" rel="noopener noreferrer">Facebook</a>
                    </div>
                </div>
            </div>
            <div class="contact-bottom-text"><strong>S’B 22</strong><p>France · Luxembourg · Belgique</p></div>
        </div>
        <div class="contact-form-box sb22-contact-direct">
            <p class="eyebrow">Un échange direct</p>
            <h2>Votre projet mérite une réponse personnalisée.</h2>
            <p>Vous souhaitez améliorer votre visibilité, imaginer une campagne ou discuter d’un projet de communication ? Écrivez-nous ou appelez-nous : nous serons ravis d’échanger avec vous.</p>
            <a class="sb22-contact-direct-action" href="mailto:contact@sb22agency.com?subject=Demande%20de%20contact%20-%20S%27B%2022">Envoyer un e-mail <span aria-hidden="true">→</span></a>
            <p class="sb22-contact-direct-note">Vous pouvez aussi nous joindre au <a href="tel:+33673031202">06 73 03 12 02</a>.</p>
        </div>
    </section>
</main>
<?php require __DIR__ . '/../../includes/footer.php'; ?>
