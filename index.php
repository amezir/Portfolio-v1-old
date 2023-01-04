<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="keywords"
        content="Amézir Messaoud, France, front-end développeur, back-end développeur, full-stack développeur, graphic designer, ui designer, portfolio, designer français, développeur français">

    <meta name="description"
        content="Mon portfolio est un dossier physique ou un espace numérique  contenant des exemples de mes réalisations. Il vise à démontrer mes compétences par rapport à mes objectif professionnel.">

    <meta property="og:site_name" content="Amézir Messaoud">
    <meta property="og:locale" content="fr_fr">
    <meta property="og:title" content="Amézir Messaoud – Développeur & Créative designer">
    <meta property="og:type" content="siteweb" />
    <meta property="og:image" content="https://amezirmessaoud.fr/img/logo.png">
    <meta property="og:url" content="https://amezirmessaoud.fr/">
    <meta property="og:description" content="Je m'appelle Amézir Messaoud, je suis un
                développeur web et un designer UI passionné, basé en
                France.">

    <meta name="author" content="Amézir Messaoud">

    <link rel="icon" type="icon" href="img/fav-ico.png">

    <title>Amézir Messaoud | Portfolio</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/kursor/dist/kursor.css">
    <script src="js/script.js"></script>
</head>

<body>
    <?php
//code pour envoyer les données du formulaire dans la base de données
INCLUDE ("connexion.php");

?>
    <!-- navigation Section-->
    <nav class="navbar navbar-expand-lg navbar-white bg-white p-3 fixed-top" data-aos="fade-down"
        data-aos-duration="1000">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.png" class="img-fluid" width="50" height="50" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="https://amezirmessaoud.fr/index.php#apropos">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="https://amezirmessaoud.fr/index.php#projets">Projets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="https://amezirmessaoud.fr/index.php#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header -->
    <header class="head text-black text-left">
        <div class="d-flex align-items-left flex-column">
            <h1 class="head-heading mb-0" data-aos="fade-in" data-aos-duration="1500">Développeur &</h1>
            <h1 class="head-heading mb-0 blue" data-aos="fade-in" data-aos-duration="600" data-aos-delay="1500">Designer
                CréaTif.</h1>
            <br>
            <p class="head-subheading font-weight-light mb-0" data-aos="fade-up" data-aos-duration="1000"
                data-aos-delay="2100">Bonjour, je m'appelle Amézir Messaoud, je suis un
                développeur web et un designer UI passionné, basé en
                France.</p>
        </div>
        <!-- social Section-->
        <div class="social position-fixed" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="2100">
            <a href="https://www.linkedin.com/in/am%C3%A9zir-messaoud-6b2862221/" target="_blank"
                class="social-hover"><img src="img/Vectorin.svg" alt=""></a>
            <a href="https://github.com/amezir" target="_blank" class="social-hover"><img src="img/Vectorgithub.svg"
                    alt=""></a>
            <a href="https://dev.to/amezir" target="_blank" class="social-hover"><img src="img/Vectordevto.svg"
                    alt=""></a>
            <a href="https://codepen.io/ame75" target="_blank" class="social-hover"><img
                    src="img/ant-design_codepen-circle-filledcodepen.svg" alt="" class="social-hover"></a>
        </div>

        <a href="#apropos" class="scroll-down-btn" data-aos="fade-down" data-aos-duration="1000"
            data-aos-delay="2100">scroll down&nbsp;&nbsp;<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"
                fill-rule="evenodd" clip-rule="evenodd">
                <path d="M11 21.883l-6.235-7.527-.765.644 7.521 9 7.479-9-.764-.645-6.236 7.529v-21.884h-1v21.883z" />
            </svg></a>
    </header>
    <!-- up Section-->

    <a href="#" class="scroll-up-btn position-fixed" data-aos="fade-up" data-aos-duration="1000"
        data-aos-delay="2100"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
            clip-rule="evenodd">
            <path d="M11 2.206l-6.235 7.528-.765-.645 7.521-9 7.479 9-.764.646-6.236-7.53v21.884h-1v-21.883z" />
        </svg></a>

    <!-- About Section -->
    <section id="apropos">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center me-auto" data-aos="fade-in"
                data-aos-duration="2000" data-aos-delay="100">
                <img src=" img/amézir.jpg" alt="" class="img-fluid" width="400" height="400">
            </div>
            <br>
            <div class="row">
                <div class="col-lg-2" data-aos="fade-down" data-aos-duration="1000">
                    1/ HISTOIRE
                </div>
                <div class="col" data-aos="fade-up" data-aos-duration="1000">
                    <p class="lead">Plus qu’une histoire, un rêve d’enfant.</p>
                    <p class="lead">J'ai une forte passion pour la technologie et le
                        design . Je suis
                        spécialisé dans le
                        développement web front/back et le design UI et ma passion est de créer des interfaces
                        utilisateur et des sites Web élégants et professionnels.
                    </p>
                    <p class="lead">Je vis en France. Je suis actuellement en BUT MMI métiers du multimédia et de
                        l'internet en 2ème année à l'université Gustave Eiffel. J'ai commencé à développer et à
                        concevoir dès mon plus jeune âge et la plupart de mes compétences et connaissances en matière de
                        conception sont autodidactes. J'ai commencé à m'intéresser à la programmation lorsque je me suis
                        intéressé aux jeux vidéo. Cela m'a fasciné et m'a accroché, j'ai donc décidé de poursuivre cette
                        carrière. Par conséquent, je me suis formé à la conception multimédia. En combinant mes
                        compétences en design numérique et mes connaissances en programmation.</p>
                    <p class="lead">Mon objectif est de passer au niveau supérieur en devenant un développeur complet et
                        de
                        devenir l'un des meilleurs concepteurs au monde. Je me suis préparé à relever les défis de ce
                        monde
                        en constante évolution et je ferai de mon mieux pour réaliser mes rêves et mes objectifs.</p>
                </div>
            </div>
    </section>

    <!-- Outils Section-->
    <section class="outils-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2" data-aos="fade-down" data-aos-duration="1000">
                    2/ LES OUTILS
                </div>
                <div class="col" data-aos="fade-up" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-sm">
                            <span><b>Conception créative</b></span>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Figma</li>
                                <li class="list-group-item">Adobe Photoshop</li>
                                <li class="list-group-item">Adobe Illustrator</li>
                                <li class="list-group-item">Adobe InDesign</li>
                                <li class="list-group-item">Adobe LightRoom</li>
                                <li class="list-group-item">Adobe Premiere Pro</li>
                            </ul>
                        </div>
                        <div class="col-sm">
                            <span><b>Développement Web</b></span>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">HTML 5</li>
                                <li class="list-group-item">CSS 3</li>
                                <li class="list-group-item">JavaScript</li>
                                <li class="list-group-item">Php</li>
                                <li class="list-group-item">Mysql</li>
                                <li class="list-group-item">Wordpress</li>
                            </ul>
                        </div>
                        <div class="col-sm">
                            <span><b>Bibliothèque</b></span>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Chart.js</li>
                                <li class="list-group-item">Bootstrap</li>
                                <li class="list-group-item">AOS</li>
                                <li class="list-group-item">Leaflet</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div id="projets" class="text-center esp" data-aos="fade-in" data-aos-duration="1000">
                <a class="hover-underline more-projets-btn" href="/docs/AMEZIR MESSAOUD CV.pdf">
                    Télécharger mon CV !
                </a>
            </div>

        </div>

    </section>

    <!--projets  Section-->
    <div class=" esp">
        <div class="container">
            <div class="row">
                <div class="col-sm" data-aos="fade-down" data-aos-duration="1000">
                    <p class="catavalo-b">Portfolio</p>
                    <div>
                        <h2>Voir mes travaux de création</h2>
                    </div>
                </div>
                <div class="col-sm" data-aos="fade-up" data-aos-duration="1000">
                    <p>Mon portfolio est une collection de mes travaux les plus récents et les plus pertinents. Il
                        montre ma
                        créativité, mes compétences techniques et mon expérience professionnelle.</p>
                    <p>J'ai soigné la présentation de mon portfolio afin qu'il soit agréable à parcourir et facile à
                        comprendre. J'ai sélectionné les images et les textes les plus pertinents pour illustrer mes
                        travaux et les mettre en valeur.</p>
                    <p>N'hésitez pas à me contacter si vous avez des questions ou si vous souhaitez en savoir plus sur
                        mon travail. Je suis disponible pour discuter de mes projets et de mes aspirations
                        professionnelles.</p>
                    <a href="projets.php" class="hover-underline more-projets-btn" data-aos="fade-in"
                        data-aos-duration="1000">Explorer tous les projets &nbsp;<svg width="24" height="24"
                            stroke="#2062CD" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                            <path
                                d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z" />
                        </svg></a>
                </div>
            </div>


            <div class="esp">
                <div class="container">

                    <div class="card-container row">

                        <?php
            $requete="SELECT * FROM projets ORDER BY id_projets DESC LIMIT 6 ";

            $stmt=$db->query($requete);
            $resultat=$stmt->fetchall(PDO::FETCH_ASSOC);
            foreach($resultat as $projets){
                echo"<div class='col-md' data-aos='fade-in' data-aos-duration='1000' data-aos-delay='500'>
                        <div class='hover-color' style='background-image: url({$projets["image_projets"]});'>
                            <div class='hover-txt d-flex align-items-center text-center justify-content-center'>
                                <a href='projets-details.php?id_projets={$projets["id_projets"]}'>
                                    <h1 class='catavalo-b'>{$projets["nom_projets"]}</h1>
                                </a>
                            </div>
                        </div>
                    </div>";
            }
?>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <br>

    <!-- Témoignages section -->
    <div class="esp ">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <p class="catavalo-b">Témoignages</p>
                    <div>
                        <h2>Ce que mes clients et collègues disent de mon travail.</h3>
                    </div>
                </div>
                <div class="col-sm">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <div class="slider_item col">

                                    <div class="quote_icon">
                                        <svg width="67" height="54" viewBox="0 0 67 54" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M30.2096 38.5591C30.2096 47.5825 23.9128 53.4943 15.4658 53.4943C6.86521 53.4943 0.568359 47.4269 0.568359 38.5591C0.568359 34.5142 1.18269 31.5583 4.71506 23.0016L13.6228 0.598877H28.8274L22.0698 25.3353C27.138 27.5133 30.2096 32.1806 30.2096 38.5591V38.5591ZM66.4549 38.5591C66.4549 47.5825 60.158 53.4943 51.7111 53.4943C43.1105 53.4943 36.8136 47.4269 36.8136 38.5591C36.8136 34.5142 37.428 31.5583 40.9603 23.0016L49.8681 0.598877H65.0727L58.3151 25.3353C63.3833 27.5133 66.4549 32.1806 66.4549 38.5591V38.5591Z"
                                                stroke="#646464" stroke-miterlimit="10" />
                                        </svg>
                                    </div>
                                    <p>
                                        Je me suis tout de suite très bien entendu avec Amézir. Nous sommes vraiment sur
                                        la même longueur d'onde !
                                        Il a toujours été une source d'inspiration pour moi et pour d'autres étudiants.
                                        Il est toujours prêt à partager ses connaissances et à aider les autres à
                                        résoudre leurs problèmes. Amézir a fait preuve de créativité et d'ingéniosité
                                        pour trouver des solutions aux difficultés.
                                        Je souhaite qu'il poursuive son chemin avec succès et qu'il continue à donner le
                                        meilleur de lui-même pour atteindre ses objectifs !
                                    </p>
                                    <div class="client_info">
                                        <div class="line"></div>
                                        <h4 class="client_name text-uppercase">Anna Hassani</h4>
                                        <span class="client_title">UI designer</span>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <div class="quote_icon">
                                    <svg width="67" height="54" viewBox="0 0 67 54" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M30.2096 38.5591C30.2096 47.5825 23.9128 53.4943 15.4658 53.4943C6.86521 53.4943 0.568359 47.4269 0.568359 38.5591C0.568359 34.5142 1.18269 31.5583 4.71506 23.0016L13.6228 0.598877H28.8274L22.0698 25.3353C27.138 27.5133 30.2096 32.1806 30.2096 38.5591V38.5591ZM66.4549 38.5591C66.4549 47.5825 60.158 53.4943 51.7111 53.4943C43.1105 53.4943 36.8136 47.4269 36.8136 38.5591C36.8136 34.5142 37.428 31.5583 40.9603 23.0016L49.8681 0.598877H65.0727L58.3151 25.3353C63.3833 27.5133 66.4549 32.1806 66.4549 38.5591V38.5591Z"
                                            stroke="#646464" stroke-miterlimit="10" />
                                    </svg>
                                </div>
                                <p>
                                    Divided by arches into stiff sections. The bedding was hardly able to cover
                                    it and seemed ready to slide off any momentMagazine and housed in a nice,
                                    gilded frame. It showed a lady fitted out organization boa who sat upright
                                </p>
                                <div class="client_info">
                                    <div class="line"></div>
                                    <h4 class="client_name text-uppercase">Amel Chabah</h4>
                                    <span class="client_title">Secior marketing expert</span>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="quote_icon">
                                    <svg width="67" height="54" viewBox="0 0 67 54" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M30.2096 38.5591C30.2096 47.5825 23.9128 53.4943 15.4658 53.4943C6.86521 53.4943 0.568359 47.4269 0.568359 38.5591C0.568359 34.5142 1.18269 31.5583 4.71506 23.0016L13.6228 0.598877H28.8274L22.0698 25.3353C27.138 27.5133 30.2096 32.1806 30.2096 38.5591V38.5591ZM66.4549 38.5591C66.4549 47.5825 60.158 53.4943 51.7111 53.4943C43.1105 53.4943 36.8136 47.4269 36.8136 38.5591C36.8136 34.5142 37.428 31.5583 40.9603 23.0016L49.8681 0.598877H65.0727L58.3151 25.3353C63.3833 27.5133 66.4549 32.1806 66.4549 38.5591V38.5591Z"
                                            stroke="#646464" stroke-miterlimit="10" />
                                    </svg>
                                </div>
                                <p>
                                    Divided by arches into stiff sections. The bedding was hardly able to cover
                                    it and seemed ready to slide off any momentMagazine and housed in a nice,
                                    gilded frame. It showed a lady fitted out organization boa who sat upright
                                </p>
                                <div class="client_info">
                                    <div class="line"></div>
                                    <h4 class="client_name text-uppercase">Michel deno</h4>
                                    <span class="client_title">Secior marketing expert</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer section -->

    <Footer class="text-center text-lg-start text-white esp" id="contact">
        <section>
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-1 col-lg-2 col-xl-2 mx-auto mb-4 text-center">
                        <h6 class="text-uppercase fw-bold text-black">Contact</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" />
                        
                        <a href="mailto:amezirmessaoud.pro@gmail.com"
                                class="hover-underline more-projets-btn">
                            amezirmessaoud.pro@gmail.com</a>
                        
                        <p class="text-black">
                            +33 06 73 36 56 31
                        </p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 text-center">
                        <h6 class="text-uppercase fw-bold text-black">Navigation</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" />
                        <p>
                            <a href="https://amezirmessaoud.fr/index.php#apropos"
                                class="hover-underline more-projets-btn">À propos</a>
                        </p>
                        <p>
                            <a href="https://amezirmessaoud.fr/index.php#projets"
                                class="hover-underline more-projets-btn">Projets</a>
                        </p>
                        <p>
                            <a href="https://amezirmessaoud.fr/index.php#contact"
                                class="hover-underline more-projets-btn">Contact</a>
                        </p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 text-center">
                        <h6 class="text-uppercase fw-bold text-black">Mes Réseaux</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: black; height: 2px" />
                        <p>
                            <a href="https://www.linkedin.com/in/am%C3%A9zir-messaoud-6b2862221/" target="_blank"
                                class="hover-underline more-projets-btn">Linkedin</a>
                        </p>
                        <p>
                            <a href="https://github.com/amezir" target="_blank"
                                class="hover-underline more-projets-btn">Github</a>
                        </p>
                        <p>
                            <a href="https://dev.to/amezir" target="_blank"
                                class="hover-underline more-projets-btn">Dev.to</a>
                        </p>
                        <p>
                            <a href="https://codepen.io/ame75" target="_blank"
                                class="hover-underline more-projets-btn">Codepen</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <div class="text-center p-3 bg-black">
            © 2023 Copyright:
            <a class="text-white more-projets-btn" href="https://amezirmessaoud.fr">Amézir Messaoud</a>
        </div>
    </footer>

    <script src="https://unpkg.com/kursor"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>