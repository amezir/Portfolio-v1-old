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
    <meta property=”og:type” content=”siteweb” />
    <meta property="og:url" content="https://amezirmessaoud.fr/">
    <meta property="og:description" content="Amezir Messaoud est un développeur et un designer UI basé en France. ">

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
<nav class="navbar navbar-expand-lg navbar-white bg-white p-3 fixed-top" data-aos="fade-down"
        data-aos-duration="1000">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.png" class="img-fluid" width="50" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto text-center">
                    <!-- <li class="nav-item">
                        <a class="nav-link mx-2 active" aria-current="page" href="#">Accueil</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="https://amezirmessaoud.fr/index.php#apropos">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="https://amezirmessaoud.fr/index.php#projets">Projets</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link mx-2" href="#">Mon blog</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="https://amezirmessaoud.fr/index.php#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class=" esp">
        <div class="container">
        <?php
        INCLUDE ("connexion.php");
        
$requete="SELECT * FROM projets WHERE id_projets={$_GET['id_projets']}";

$stmt=$db->query($requete);
$resultat=$stmt->fetchall(PDO::FETCH_ASSOC);

foreach($resultat as $projets){
    echo"            <div class='row align-items-center justify-content-center d-flex'>
    <div class='col-lg'>
        <img src='{$projets["image_projets"]}' alt='' width='' class='img-fluid'>
    </div>
    <div class='col'>
        <h1>{$projets["nom_projets"]}</h1>
        <a href='{$projets["lien_projets"]}' class='hover-underline more-projets-btn'>lien vers le projets</a>&nbsp;&nbsp;&nbsp;
        <a href='{$projets["github_projets"]}' class='hover-underline more-projets-btn'>lien github</a>
        <br>&nbsp;
        <p>{$projets["texte_projets"]}
        </p>
        <br>&nbsp;
        <h3>Technologies utilisées</h3>
        <p>{$projets["competences_projets"]}
        </p>
    </div>
</div>";
}
?>
        </div>
    </div>

    <!-- Footer section -->

    <Footer class="text-center text-lg-start text-white esp">
        <section>
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-1 col-lg-2 col-xl-2 mx-auto mb-4 text-center">
                        <h6 class="text-uppercase fw-bold text-black">Contact</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" />
                        <p class="text-black">
                            amezirmessaoud.pro@gmail.com
                        </p>
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