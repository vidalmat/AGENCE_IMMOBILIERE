<?php

var_dump($_POST);

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
<section>
    <p class="fildar">abri-nature-immobilier / <a href="index.php?route=showhome">accueil /</a><span class="span"> mon espace agent</span></p>


    <form action="index.php?route=insert_bien" method="POST" enctype="multipart/form-data">

        <select name="categorie" id="">
            <option value="1">Vente</option>
            <option value="2">Location</option>
        </select>
        <input type="text" placeholder="Nom" name="nom" id="nom">
        <input type="text" placeholder="Adresse" name="adresse" id="adresse">
        <input type="text" placeholder="Prix" name="prix" id="prix">
        <input type="file" name="image">
        <input type="submit" value="Ajouter un bien" id="ajout_bien">

    </form>



    <!--Affichage des biens-->

    <?php
    $biens = $toTemplate["biens"];
    ?>

    <table>
        <tr>
            <th>Image</th>
            <th>Nom</th>
            <th>Adresse</th>
            <th>Prix</th>
            <th>Action</th>
        </tr>

        <?php foreach($biens as $bien): ?>
            <tr>
            <td><img width="120" src="upload/<?= $bien["image"] ?>" alt="image"></td>
            <td><?= $bien["nom"] ?></td>
            <td><?= $bien["adresse"] ?></td>
            <td><?= $bien["prix"] ?></td>
            <td>Modifier | <a href="index.php?route=sup_bien&id_bien=<?= $bien["id_bien"] ?>"> Supprimer</a></td>
            </tr>

        <?php endforeach ?>
    </table>
</section>