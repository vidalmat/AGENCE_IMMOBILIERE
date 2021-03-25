<?php

//INSERT INTO clients VALUES ('', 'Dupont', 'Jean', '15 rue de la République 84000 Avignon', 'jeandupont@dupont.fr', '06060606006', 'dupont');

?>

<header>
    <div class="conteneur1">
        <div class="logo_header">
            <a href="index.php?route=showhome"><img src="images/logo.png" alt="logo"></a>
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
<section>
    <p class="fildar">abri-nature-immobilier / <a href="index.php?route=showhome">accueil /</a><span class="span"> mon espace</span></p>
    <ul>
        <li><a href="#">Messages</a></li>
        <li><a href="#">Favoris</a></li>
        <li><a href="#">Visites</a></li>
        <li><a href="index.php?route=deconnect">Déconnecter</a></li>
    </ul>
</section>



