<?php
declare(strict_types=1);
$alert = false;
if (!empty($_GET) && (!empty($_GET['error']))) {
    $alert = true;
    if (!empty($_GET['error'] == 'missingInput')) {
        $errorMsg = "Vous n'avez rien indiqué dans les champs. Forcément, ça ne va pas marcher.";
    }
    if (!empty($_GET['error'] == 'invalidEmail')) {
        $errorMsg = "Ce n'est pas ce que j'appellerais un e-mail";
    }
    if (!empty($_GET['error'] == 'invalidName')) {
        $errorMsg = "Le nom est trop court. Désolé par avance si vous vous appelez, par exemple, K";
    }
    if (!empty($_GET['error'] == 'invalidMessage')) {
        $errorMsg = "Ah désolé, le message semble trop court";
    }
    if (!empty($_GET['error'] == 'unknownError')) {
        $errorMsg = "Une erreur inconnue est survenue. Là je ne peux pas vous aider.";
    }
}
if (!empty($_GET) && (!empty($_GET['success']))) {
    $alert = true;
    if (!empty($_GET['success'] == 'messageSent')) {
        $errorMsg = "Félicitation, votre message a été envoyé !";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Développeur web et web designer basé sur Périgueux, en Dordogne. Je vous propose mes services en terme de maquettage, réalisation de charte graphique et d'intégration web front-end, tout en veillant au bon référencement naturel de votre site sur les moteurs de recherche">
    <link rel="alternate" hreflang="fr-FR">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Aloïs Patoor, Développeur web et web designer en Périgord</title>
    <meta property="og:title" content="Aloïs Patoor, Développeur web et web designer en Périgord"/>
    <meta property="og:description"
          content="Développeur web et web designer basé sur Périgueux, en Dordogne. Je vous propose mes services en terme de réalisation de charte graphique et d'intégration web front-end, tout en veillant au bon référencement naturel de votre site sur les moteurs de recherche"/>
    <meta property="og:image" content="assets/img/og_img.png"/>
</head>
<body>
<header>
    <!-- BACKGROUND IMAGE WITH TITLE AND LOGO -->
    <div id="headerImage">
        <h1>aloïs</h1>
        <img class="logo" src="assets/img/logo.png" alt="Logo d'Aloïs Patoor">
        <h1>patoor</h1>
    </div>
    <!-- DESKTOP NAV -->
    <nav id="nav-bar" class="desktopNav">
        <ul>
            <li><a href="#about">à propos</a></li>
            <li><a href="#skills">compétences</a></li>
            <li><a href="#services">services</a></li>
            <li><a href="#gallery">réalisations</a></li>
            <li><a href="#contact">contact</a></li>
        </ul>
    </nav>
    <!-- MENU BURGER -->
    <div role="button" tabindex="0" id="menu-burger" aria-controls="nav-bar" class="displayNone">
        <a id="link" href="#">
            <span id="bars"></span>
            <span class="sr-only">Menu</span>
        </a>
    </div>
</header>

<main>
    <!-- A PROPOS -->
    <section id="about">
        <h2 class="green">à propos</h2>
        <article>
            <p>Avant toute chose, sachez que ce portfolio est aussi chaotique que mon parcours professionnel.
                Diplômé d’un BTS Assistant de Manager, j’excellais bien plus dans le <strong>SQL</strong> que les autres
                matières.
                Ensuite, aprés des annèes à chercher ma voie, le métier de développeur web m’est paru comme une évidence
                le jour où j'ai développé ma propre <strong>application web</strong> pour présenter mes dessins.
            </p>

            <p>
                C'est ainsi que je me suis lancé dans une formation de <strong>Développeur web / web mobile</strong> que
                j'ai réussi !
            </p>

            <p>
                Ma fibre <strong>artistique / graphiste</strong> a trouvé une façon de se sortir du placard dans ce
                métier qui demande <strong>curiosité et créativité</strong>. Véritable ermite vivant devant son écran
                d'ordinateur, c'est un véritable plaisir pour moi de prendre du temps sur vos demandes (<strong>sites
                    web</strong>, <strong>UX Design</strong>, création de logo...) pour les chérir et les peaufiner.
            </p>
        </article>
    </section>
    <!-- COMPETENCES -->
    <section id="skills">
        <h2 class="green">compétences</h2>
        <div class="flexboxSkills">
            <article>
                <div class="skillsImgSizing">
                    <img src="assets/img/pexels-mikechie-esparagoza-1601773.jpg"
                         alt="Photo d'illustration de design vintage">
                </div>
                <h3>Compétences Graphiques</h3>
                <ul>
                    <li>Photoshop</li>
                    <li>Illustrator</li>
                    <li>Figma</li>
                </ul>
            </article>
            <article>
                <div class="skillsImgSizing">
                    <img src="assets/img/pexels-kevin-ku-577585.jpg" alt="Photo d'illustration d'un écran de pc">
                </div>
                <h3>Compétences Développement</h3>
                <ul>
                    <li>HTML / CSS / SASS</li>
                    <li>JavaScript / React / Vue / Angular</li>
                    <li>PHP / SYMFONY</li>
                    <li>Java / Spring Boot</li>
                    <li>API REST</li>
                    <li>MYSQL / PostgreSQL</li>
                </ul>
            </article>
        </div>
    </section>
    <!-- SERVICES -->
    <section id="services">
        <h2 class="green">services</h2>
        <div class="flexboxServices">
            <article>
                <h3>Référencement SEO</h3>
                <p>Affichage sémantique des informations,
                    des pages propres pour un <strong>référencement optimal</strong>.</p>
            </article>
            <article>
                <h3>Intégration Web</h3>
                <p>Intégration <strong>HTML/CSS</strong> respectueuse des standards du web et des exigences en terme d'accessibilité (conformément au RGAA)</p>
            </article>
        </div>
        <div class="flexboxServices">
            <article>
                <h3>Site Vitrine statique ou dynamique</h3>
                <p>Création de votre <strong>site vitrine</strong> et/ou de votre <strong>blog</strong></p>
            </article>
            <article>
                <h3>Responsive Design</h3>
                <p>Votre site <strong>adapté</strong> à tout type d’écran</p>
            </article>
        </div>
    </section>
    <!-- GALLERY -->
    <section id="gallery">
        <div id="titleGallery">
            <h2 class="green">réalisations</h2>
            <p>Voici quelques exemples de mes réalisations.</p>
            <p>Cliquez sur les images pour les agrandir et avoir plus d’informations</p>
        </div>
        <div class="flexboxGallery">
            <article>
                <div role="button" tabindex="0" id="firstModal" class="boxSizing" onclick="getImg('close')">
                    <img src="assets/img/f_plomberie.png" alt="Maquette du site François Plomberie">
                    <p>
                        Maquette réalisée sur <strong>Figma</strong>. Le but était de revoir l'<strong>UX Design</strong>
                        du site François Plomberie
                    </p>
                </div>
                <div role="button" class="miniature" tabindex="0" aria-controls="firstModal">
                    <img src="assets/img/f_plomberie.png" alt="Maquette du site François Plomberie"
                         class="modal-content" onclick="getImg('firstModal')">
                </div>
            </article>
            <article>
                <div role="button" tabindex="0" id="secondModal" class="boxSizing" onclick="getImg('close')">
                    <img src="assets/img/adn.png" alt="Maquette du site ADN - Au-delà des Normes">
                    <p>Maquettage du site de <strong>l'association ADN</strong> réalisée sur <strong>Figma</strong>.
                        Développement en <strong>PHP / SYMFONY</strong>. Site consultable
                        <a href="https://audeladesnormes.org/" target="_blank">ici</a>
                    </p>
                </div>
                <div role="button" class="miniature" tabindex="0" aria-controls="secondModal">
                    <img src="assets/img/adn.png" alt="Maquette du site Gaming Campus" class="modal-content"
                         onclick="getImg('secondModal')">
                </div>
            </article>
            <article>
                <div role="button" tabindex="0" id="thirdModal" class="boxSizing" onclick="getImg('close')">
                    <img src="assets/img/amejisuto7.jpeg" alt="Screenshot du site Amejisuto7.art">
                    <p>
                        Portfolio artistique réalisé en <strong>Javascript / React</strong>. Site consultable
                        <a href="https://amejisuto7.art/" target="_blank">ici</a>
                    </p>
                </div>
                <div role="button" class="miniature" tabindex="0" aria-controls="thirdModal">
                    <img src="assets/img/amejisuto7.jpeg" alt="Screenshot du site Amejisuto7.art" class="modal-content"
                         onclick="getImg('thirdModal')">
                </div>
            </article>
        </div>
        <div class="flexboxGallery">
            <article>
                <div role="button" tabindex="0" id="fourthModal" class="boxSizing" onclick="getImg('close')">
                    <img src="assets/img/n_genest.png" alt="Maquette du site Nathalie Genest">
                    <p>
                        Maquette réalisée sur <strong>Figma</strong>. Le but était de revoir l'<strong>UX Design</strong>
                        du site Nathalie Genest
                    </p>
                </div>
                <div role="button" class="miniature" tabindex="0" aria-controls="fourthModal">
                    <img src="assets/img/n_genest.png" alt="Maquette du site Nathalie Genest" class="modal-content"
                         onclick="getImg('fourthModal')">
                </div>
            </article>
            <article>
                <div role="button" tabindex="0" id="fifthModal" class="boxSizing" onclick="getImg('close')">
                    <img src="assets/img/pokepet.png" alt="Maquette du site Pokepet">
                    <p>
                        Site factice réalisé en projet de groupe. Codé en <strong>HTML et SCSS</strong>, maquetté sur
                        <strong>Figma</strong>
                    </p>
                </div>
                <div role="button" class="miniature" tabindex="0" aria-controls="fifthModal">
                    <img src="assets/img/pokepet.png" alt="Maquette du site Pokepet" class="modal-content"
                         onclick="getImg('fifthModal')">
                </div>
            </article>
            <article>
                <div role="button" tabindex="0" id="sixthModal" class="boxSizing" onclick="getImg('close')">
                    <img src="assets/img/redscorpio4.jpg" alt="Maquette du site RedScorpio4">
                    <p>
                        Maquettage du site de musique <strong>RedScorpio4</strong> réalisé sur <strong>Figma</strong>.
                        Site consultable <a href="https://redscorpio4.com" target="_blank">ici</a>
                    </p>
                </div>
                <div role="button" class="miniature" tabindex="0" aria-controls="sixthModal">
                    <img src="assets/img/redscorpio4.jpg" alt="Maquette du site RedScorpio4" class="modal-content"
                         onclick="getImg('sixthModal')">
                </div>
            </article>
        </div>
    </section>
    <section id="contact">
        <h2 class="green">me contacter</h2>
        <p>
            Envie de me soumettre vos idées et qu'on travaille ensemble ? Ou tout simplement besoin de renseignement ?
            Voici tout mes contacts
        </p>
        <div id="flexboxForm">
            <form action="../src/controller.php" method="post">
                <input type="text" id="name" name="name" aria-label="Votre Nom" placeholder="Votre Nom">
                <input type="email" id="email" name="email" aria-label="Votre adresse e-mail" placeholder="Votre Adresse e-mail">
                <input type="hidden" id="botcheck" name="botcheck">
                <textarea name="message" id="message" aria-label="Votre Message" placeholder="Votre Message"></textarea>
                <?php if ($alert) : ?>
                    <div class="alert" role="alert">
                        <?php echo "<p>" . $errorMsg . "</p>"; ?>
                    </div>
                <?php endif; ?>
                <button type="submit" value="submit" class="button">Envoyer</button>
            </form>
            <div id="address">
                <p>
                    Aloïs Patoor
                    <br>
                    palois89@posteo.net
                </p>
            </div>
        </div>
    </section>
</main>
<!-- FOOTER -->
<footer>
    <div role="button" id="returnToHeader" aria-label="Retourner en haut de page">
        <a href="#headerImage"><i class="fas fa-angle-double-up"></i></a>
    </div>
    <section id="topFooter">
        <img src="assets/img/logo.png" alt="Logo de Aloïs Patoor">
        <div id="icons">
            <a href="https://github.com/aloispatoor" target="_blank" title="Github"><i class="fab fa-github"></i></a>
            <a href="https://www.linkedin.com/in/aloïs-patoor-67a676199" target="_blank" title="Linkedin"><i class="fab fa-linkedin"></i></a>
        </div>
    </section>
    <section id="middleFooter">
        <ul>
            <li><a href="#about">à propos</a></li>
            <li><a href="#skills">compétences</a></li>
            <li><a href="#services">services</a></li>
            <li><a href="#gallery">réalisations</a></li>
            <li><a href="#contact">contact</a></li>
        </ul>
    </section>
    <section id="bottomFooter">
        <p>Copyright 2025 Aloïs Patoor - SIRET 920 274 982 00015</p>
    </section>
</footer>
<script src="assets/js/menuburger.js"></script>
<script src="assets/js/modal.js"></script>
<script src="assets/js/sticky.js"></script>
<script src="assets/js/arrow.js"></script>
</body>
</html>
