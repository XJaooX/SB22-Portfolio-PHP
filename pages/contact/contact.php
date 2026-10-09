<?php
// pagina contact
$basePath = '../../';
$currentPage = 'contact';
$pageTitle = "Contact — S’B 22 Agency";

include '../../includes/header.php';
include '../../includes/navbar.php';
?>

<main class="contact-page">
    <section class="contact-section">

        <div class="contact-left">
            <div>
                <p class="eyebrow">Prendre contact</p>
                <h1>Parlons de votre projet</h1>

                <p class="contact-intro">
                    Vous souhaitez développer votre image, votre visibilité ou votre communication ?
                    Présentez-nous votre projet et vos besoins.
                </p>

                <div class="contact-details">
                    <div class="contact-detail">
                        <span class="contact-icon">✉</span>
                        <div>
                            <small>E-mail</small>
                            <a href="mailto:contact@sb22agency.com">contact@sb22agency.com</a>
                        </div>
                    </div>

                    <div class="contact-detail">
                        <span class="contact-icon">☎</span>
                        <div>
                            <small>Téléphone</small>
                            <a href="tel:0673031202">06 73 03 12 02</a>
                        </div>
                    </div>

                    <div class="contact-socials">
                        <a href="https://www.instagram.com/sb22agency/" target="_blank" rel="noreferrer">Instagram</a>
                        <a href="https://www.facebook.com/people/SB-22/61580109419316/" target="_blank" rel="noreferrer">Facebook</a>
                    </div>
                </div>
            </div>

            <div class="contact-bottom-text">
                <strong>S’B 22 Agency</strong>
                <p>Relations publiques • Communication 360° • Marketing digital • Création de contenu • Bien-être en entreprise</p>
            </div>
        </div>

        <div class="contact-form-box">
            <div class="form-note">
                <span>i</span>
                <p>Formulaire de démonstration — aucun message n’est envoyé dans cette maquette.</p>
            </div>

            <form id="contact-form">
                <div class="form-row">
                    <div>
                        <label for="prenom">Prénom *</label>
                        <input id="prenom" type="text" placeholder="Votre prénom" required>
                    </div>

                    <div>
                        <label for="nom">Nom *</label>
                        <input id="nom" type="text" placeholder="Votre nom" required>
                    </div>
                </div>

                <div class="form-row">
                    <div>
                        <label for="email">E-mail *</label>
                        <input id="email" type="email" placeholder="adresse@email.com" required>
                    </div>

                    <div>
                        <label for="telephone">Téléphone</label>
                        <input id="telephone" type="tel" placeholder="06 00 00 00 00">
                    </div>
                </div>

                <div class="form-row">
                    <div>
                        <label for="entreprise">Entreprise</label>
                        <input id="entreprise" type="text" placeholder="Nom de l'entreprise">
                    </div>

                    <div>
                        <label for="besoin">Votre besoin</label>
                        <select id="besoin">
                            <option value="">Sélectionnez votre besoin</option>
                            <option>Relations publiques</option>
                            <option>Communication & stratégie</option>
                            <option>Marketing digital</option>
                            <option>Création photo & vidéo</option>
                            <option>Communication print & signalétique</option>
                            <option>Bien-être en entreprise</option>
                            <option>Autre demande</option>
                        </select>
                    </div>
                </div>

                <div class="form-message">
                    <label for="message">Message *</label>
                    <textarea id="message" rows="3" placeholder="Décrivez brièvement votre projet ou vos besoins..." required></textarea>
                </div>

                <button class="form-submit" type="submit">
                    Envoyer ma demande <span>→</span>
                </button>
            </form>

            <div class="form-success" id="form-success">
                <div class="success-icon">i</div>
                <h2>Démonstration</h2>
                <p>Le formulaire sera connecté dans la version finale du site.</p>
                <button type="button" id="show-form-again">Réafficher le formulaire</button>
            </div>
        </div>

    </section>
</main>

<?php include '../../includes/footer.php'; ?>
