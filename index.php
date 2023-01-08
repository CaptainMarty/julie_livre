<!DOCTYPE html>
<html lang="en">


<!-- ---head--- -->

<head>
    <?php
    include './config/head.php'
    ?>
    <title>JulieFra</title>
</head>
<!-- ---head END--- -->


<link rel="stylesheet" href="./css/style.css">

<body>

    <!-- ---header--- -->
    <?php
    include './config/header.php'
    ?>
    <!-- ---header END--- -->
    <a name="top"></a>
    <!-- section les livres -->
    <section class="section-1" id="acceuil">
        <div class="container">
            <div class="row">
                <div class="col-lg-4" id="img-book-1">
                    <div class="div-overflow">
                        <img class="image__img" src="../images/concept_book/dreamcatcherd.png" alt="">
                        <div class="image__overlay">
                            <p id="dreamcatcher-text">Le monde est de moins en moins joyeux, les gens commencent à perdre espoir,
                                à se renfermer sur eux même.
                                Une entreprise inconnue au bataillon a fait des tests sur des personnes et chaque participant
                                a reçu un colis assez particulier...
                            </p>
                        </div>
                    </div>
                    <h1 id="dreamcatcher">Dreamcatcher</h1>
                    <i>En préparation...</i>

                </div>

                <div class="col-lg-4" id="img-book-2">
                    <div class="div-overflow">
                        <img src="../images/starwolf_book.jpeg" alt="">
                        <div class="image__overlay">
                            <p id="starwolf-text">Un voyage à bord d'un vaisseau spatial va faire prendre conscience à
                                Camélia qu'il n'y a pas que la Terre qui pourrait être habitée...<br><br>
                                <i>Au fil des différents chapitres, découvrez les membres de l’équipe Star Wolf,
                                    leurs histoires et leurs voyages dans l’espace.</i>
                            </p>
                        </div>
                    </div>
                    <h1 id="starwolf">Starwolf</h1>
                    <button>
                        <a href="https://www.amazon.fr/STARWOLF-JulieFra-ebook/dp/B09R7VZ7HP" target="blank">
                            Acheter
                        </a>
                    </button>
                </div>


                <div class="col-lg-4" id="img-book-3">
                    <div class="div-overflow">
                        <img class="image__img" src="../images/concept_book/new-blue-size.png" alt="">
                        <div class="image__overlay">
                            <p id="dreamcatcher-text">Dans "New Blue", une ancienne civilisation voyage depuis de nombreuses
                                générations dans de grands vaisseaux spatiaux pour échapper à leur planète d'origine.
                                Ils attendent patiemment que la nouvelle planète, New Blue, soit prête à les accueillir.
                                Des colonies ont été créées sur cette planète, habitées par des êtres vivants qui vivent dans
                                des sphères pour se protéger de la nature hostile de New Blue.
                                Des explorateurs sont envoyés pour trouver un autre endroit où la civilisation pourra s'installer et
                                découvrir les secrets de cette planète étrange et immense.
                            </p>

                        </div>

                    </div>
                    <h1 id="new-blue">New Blue</h1>
                    <i>En Préparation...</i>
                </div>

            </div>
        </div>
    </section>
    <!-- section les livres END -->

    <!-- section Personnage  -->
    <section class="section-2">
        <div class="container">
            <div class="row">
                <div class="div col-lg-12">
                    <h2 id="personnages">Personnages de Starwolf</h2>
                    <?php
                    include './config/slider_miniature.php'
                    ?>
                </div>
            </div>
        </div>
    </section>
    <a href="#" id="back-to-top">Retour en haut</a>
    <!-- section Personnage END -->

    <!-- section Qui suis-je -->
    <!-- section Qui suis-je END -->


</body>

</html>