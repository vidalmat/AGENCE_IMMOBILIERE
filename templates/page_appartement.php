<?php







?>



<header>

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
        <div class="hamburger_form col-2">
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
                <li><a href="#">Immobilier pro</a><span></span></li>
                <li class="agence_vert"><a href="#">Nos agences</a><span></span></li>
            </ul>
        </nav>
    </div>


</header>

<p class="fildar">Immo-Dev / <a href="index.php?route=showhome">accueil /</a><span class="span"> appartement</span></p>

<section class="page_biens">
    <div class="titre">
        <h1 class="descriptif_vert">À Avignon</h1>
        <h1>À VENDRE APPARTEMENT 5 PIÈCES 161 M²</h1>
        <h1 class="descriptif_vert">1 150 000 € **</h1>
    </div>
    <div class="container_page_biens">
        <div class="description">
            <div class="description_offre">
                <h1>> Description de l'offre</h1>
                <p>Quartier Pey Berland, à 3mn du Triangle. Très bel et vaste appartement standing, situé au dernier étage d'une 
                Résidence récente avec ascenseur. Beaucoup d'atouts à retenir : Très lumineux, au calme, très bien agencé, aménagement de qualité, 
                sans oublier une vue dégagée sur l'hypercentre de Bordeaux. Entrée couloir, trois chambres dont une suite parentale, 
                dressing, salle de bain, salle d'eau, une très grande pièce de vie donnant sur un grand balcon, cuisine moderne, arrière cuisine.
                Une place de parking avec accès ascenceur, complète ce joli bien. Nous contacter pour visiter.</p>
            </div>
            <div class="description_bien">
                <h1>> Descriptif du bien</h1>
                <div class="caracteristique">
                    <h3 class="general">Général</h3>
                    <h3>Détails +</h3>
                    <h3>Copropriété</h3>
                </div>
                <div class="code_postal">
                    <p>Code postal</p>
                    <p class="descriptif_vert">33000</p>
                </div>
                <div class="ville">
                    <p>Ville</p>
                    <p class="descriptif_vert">Bordeaux</p>
                </div>
                <div class="surface">
                    <p>Surface habitable (m²)</p>
                    <p class="descriptif_vert">161 m²</p>
                </div>
                <div class="nb_chambre">
                    <p>Nombre de chambre(s)</p>
                    <p class="descriptif_vert">3</p>
                </div>
                <div class="nb_piece">
                    <p>Nombre de pièces</p>
                    <p class="descriptif_vert">5</p>
                </div>
                <div class="etage">
                    <p>Étage</p>
                    <p class="descriptif_vert">4</p>
                </div>
                <div class="ascenseur">
                    <p>Ascenseur</p>
                    <p class="descriptif_vert">OUI</p>
                </div>
                <div class="vue">
                    <p>Vue</p>
                    <p class="descriptif_vert">DÉGAGÉE</p>
                </div>
            </div>
            <div class="description_contact">
                <div class="contact_info">
                    <img src="images/contact.jpg" alt="contact">
                    <div class="container_contact">
                        <p class="contact">Contact</p>
                        <div class="plus_dinfos">
                            <p class="infos">Plus d'infos</p>
                            <p class="plus">+</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
