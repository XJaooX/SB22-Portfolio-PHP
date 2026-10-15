<?php
// Esta página está dentro de pages/agence, por isso voltamos duas pastas para chegar à raiz.
$basePath = '../../';

// Indica à navbar qual é a página atual.
$currentPage = 'agence';

// Título mostrado no separador do navegador.
$pageTitle = "L’agence — SB22 Agency";

// Valores da agência.
// Guardamos os textos num array para depois os mostrar com um foreach.


// Etapas da forma de trabalhar da agência.


// Adiciona o header e a navbar que são usados em todas as páginas.
require_once __DIR__ . '/../../functions/agency.php';
$values = getAgencyValues();
$method = getAgencyMethod();
include '../../includes/header.php';
include '../../includes/navbar.php';
?>

<!-- Conteúdo principal da página L'agence -->
<main>

    <!-- Primeira metade da página, com apresentação e valores -->
    <div class="agency-panel">

    <!-- Apresentação da agência -->
    <section class="agency-intro">
        <div class="agency-intro-title">
            <p class="eyebrow">SB22 Agency</p>

            <h1>
                L'humain au cœur
                <span>de chaque projet.</span>
            </h1>
        </div>

        <div class="agency-intro-text">
            <p>
                Chaque projet est pensé selon votre identité, vos enjeux et votre public.
            </p>
        </div>
    </section>

    <!-- Valores principais da agência -->
    <section class="agency-values">

        <?php
        // O foreach percorre o array $values e cria um bloco para cada valor.
        foreach ($values as $value) {
        ?>
            <article class="value-card">
                <p class="card-number"><?php echo $value['number']; ?></p>
                <h2><?php echo $value['title']; ?></h2>
                <p><?php echo $value['description']; ?></p>
            </article>
        <?php
        }
        ?>

    </section>

    </div>

    <!-- Secção que explica o método de trabalho -->
    <section class="agency-method">

        <div class="method-heading">
            <div>
                <p class="eyebrow">Parcours client</p>
                <h2>Notre méthode</h2>
            </div>

            <p>
                Un parcours clair, de la première écoute au suivi des actions.
            </p>
        </div>

        <!-- Etapas do método -->
        <div class="method-grid" id="method-grid">

            <?php
            // O mesmo princípio é usado aqui para mostrar as cinco etapas.
            foreach ($method as $step) {
            ?>
                <article class="method-card">
                    <p class="card-number"><?php echo $step['number']; ?></p>
                    <h3><?php echo $step['title']; ?></h3>
                    <p><?php echo $step['description']; ?></p>
                </article>
            <?php
            }
            ?>

        </div>

        <!-- Indicador que aparece apenas no telemóvel -->
        <div class="method-mobile-info">
            <div class="method-dots">
                <?php foreach ($method as $index => $step) { ?>
                    <span class="method-dot <?php echo $index === 0 ? 'active' : ''; ?>"></span>
                <?php } ?>
            </div>

            <span id="method-counter">1/5</span>
        </div>

    </section>

</main>

<?php
// Adiciona o footer no fim da página.
include '../../includes/footer.php';
?>
