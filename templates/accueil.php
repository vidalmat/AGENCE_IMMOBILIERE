<?php


?>

<header>
    <!-- <div id="progress"></div> -->

                        <!-- ------------ Conteneur 1 ------------- -->
    <div class="conteneur1">
        <div class="logo_header">
            <img src="images/logo.png" alt="logo">
        </div>
        <div class="nav_user">
            <nav>
                <ul>
                    <li class="favoris"><img src="images/coeur_vert.png" alt="coeur" >favoris</li>
                    <li class="mon_compte"><a href="index.php?route=showform">Mon compte</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="row head_small"> <!-- création du bouton du menu de déroulement -->
        <div class="hamburger col-2">
            <a href="#menu">
                <span></span> <!--les span servent pour créer des traits dans le menu -->
                <span></span>
                <span></span>
            </a>
        </div>
    </div>
    <div id="menu" class="menu_header">
        <nav>
            <ul>
                <li><a href="#">&times;</a></li><!-- création de la croix pour la fermeture du menu -->
                <li><a href="#">Acheter</a><span></span></li>
                <li><a href="#">Louer</a><span></span></li>
                <li><a href="#">Vendre</a><span></span></li>
                <li><a href="#">Estimer</a><span></span></li>
                <li><a href="#">Faire gérer</a><span></span></li>
                <li><a href="#">Syndic</a><span></span></li>
                <li><a href="#">Immobilier professionnel</a><span></span></li>
                <li class="agence_vert"><a href="#">Nos agences</a><span></span></li>
            </ul>
        </nav>
    </div>
</header>

<section>
                        <!-- ------------ Conteneur 2 ------------- -->
    <div class="conteneur2">
        <div class="bloc_search">
            <div class="bloc">
                <p>Louer</p>
                <p>Acheter</p>
                <div id="vert">
                    <p><a href="#"  class="estimer_vert">Estimer</a></p>
                </div>
            </div>
            <p>Estimez votre bien en 5 minutes</p>
            <form action="#" method="">
                <input type="text" placeholder="  Adresse de votre bien" name="recherche" id="adresse_bien">
            </form>
            <div id="cadre_estimer">
                <button type="button" id="estimer"><img src="images/search.png" alt="search">Estimer le prix de vente</button>
                <img src="images/cle.png" alt="cle" id="cle">
                <button type="button" id="loyer">Estimer mon loyer</button>
            </div>
        <div class="mains">
            <h1 class="votre_bien"><img src="images/mains.png" alt="mains"><a href="#">Votre bien</a></h1>
        </div>
        </div>
                        <!-- ------------ Conteneur 3 ------------- -->
        <div class="conteneur3">
            <div class="bien">
                <img src="images/ordi.png" alt="ordi">
                <h1>Estimer votre bien</h1>
            </div>
            <div class="video">
                <img src="images/maison.png" alt="maison">
                <h1>Estimer votre bien en vidéo</h1>
            </div>
            <div class="alerte_mail">
                <img src="images/cloche.png" alt="cloche">
                <h1>Créer une alerte mail</h1>
            </div>
        </div>
    </div>
                        <!-- ------------ Conteneur 4 ------------- -->
    <div class="conteneur4">
        <div class="img_maison">
            <img src="images/page1/maison.jpg" alt="maison">
            <div class="prix_immo">
                <p class="prix">PRIX</p>
                <div class="arrow-right"></div>
                <p class="euros">1 150 000 €</p>
            </div>
        </div>
            <div class="bloc_droit_annonce">
                <div class="descr_maison">
                    <div class="band_blanche">
                        <div class="trait">
                            <div class="text_gris1">
                                <p>Maison standing vue et jardin</p>
                            </div>
                            <div class="text_vert1">
                                <p>Bien de  350 m² - 8 pièces - Bordeaux (33000)</p>
                            </div>
                        </div>
                    </div>   
                </div>
                <div  class="fond_gris">
                    <p>Découvrez cette superbe et spacieuse villa d'environ 350m² sur un terrain de 5136 m² avec piscine et dépendances. 
                        Idéal pour famille nombreuse ou maison de vacances, située à 5 minutes à pieds du centre ville, 
                        elle se compose d'un trés grand séjour de plus de 90 m², 6 chambres et 4 salles d'eau/de bain. 
                        Trés belle piscine avec pool house aménagé et grand garage. 
                    </p>
                </div>
                <div class="band_selection1">
                    <p>Sélectionner</p>
                    <p class="voir"><a href="index.php?route=showmaison">Voir le bien</a></p>
                </div>
            </div>
        </div>
                        <!-- ------------ Conteneur 5 ------------- -->
    <div class="conteneur5">
        <div class="img_maison">
            <img src="images/page2/appartement.jpg" alt="maison">
            <div class="prix_immo">
                <p class="prix">PRIX</p>
                <div class="arrow-right"></div>
                <p class="euros">1 470 000 €</p>
            </div>
        </div>
        <div class="bloc_droit_annonce">
            <div class="descr_maison">
                <div class="band_blanche">
                    <div class="trait">
                        <div class="text_gris2">
                            <p>Appartement standing ascenseur et vue</p>
                        </div>
                        <div class="text_vert2">
                            <p>Appartement de 161 m² - 5 pièces - Bordeaux (33000)</p>
                        </div>
                    </div>
                </div>   
            </div>
            <div  class="fond_gris">
                <p>Quartier Pey Berland, à 3mn du Triangle. Très bel et vaste appartement standing, situé au dernier étage d'une 
                    Résidence récente avec ascenseur. Beaucoup d'atouts à retenir : Très lumineux, ...
                </p>
            </div>
            <div class="band_selection2">
                <p>Sélectionner</p>
                <p class="voir"><a href="index.php?route=showappartement">Voir le bien</a></p>
            </div>
        </div>
    </div>
</section>
<footer>
                        <!-- ------------ Conteneur 6 ------------- -->
    <div class="conteneur6">
        <div class="logo_footer">
            <img src="images/logob&w.png" alt="">
        </div>
        <div class="par1">
            <ul>À découvrir
                <li>Nos conseils</li>
                <li>Découvrez votre futur quartier</li>
                <li>Nos actualités</li>
                <li>Vendez ou louez votre bien</li>
                <li>Trouvez une agence immobilière</li>
                <li>Guide et conseils immobiliers</li>
            </ul>
        </div>
        <div class="par2">
            <ul>À propos de nous
                <li>Notre agence</li>
                <li>Qui sommes nous</li>
                <li>Nous contacter</li>
                <li>Nous recrutons</li>
                <li>Besoin d'aide?</li>
                <li>Votre avis nous interesse</li>
            </ul>
        </div>
    </div>
    <div class="par3">
        <div class="bloc_applistore">
            <p>Retrouvez nous sur :</p>
            <img src="images/logo_apple.png" alt="logo_apple" id="apple">
            <img src="images/logo_playstore.png" alt="logo_playstore" id="google">
        </div>
    </div>
                        <!-- ------------ Conteneur 7 ------------- -->
    <div class="conteneur7">
        <div class="mentions">
            <p>Mentions légales</p>
        </div>
        <div class="mentions">
            <p>Politique de confidentialité</p>
        </div>
        <div class="mentions">
            <p>Paramétrer les cookies</p>
        </div>
    </div>
</footer>

