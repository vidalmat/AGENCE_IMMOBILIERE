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

    <div class="menu_header">
        <nav>
            <ul>
                <li><a href="#">Acheter</a></li>
                <li><a href="#">Louer</a></li>
                <li><a href="#">Vendre</a></li>
                <li><a href="#">Estimer</a></li>
                <li><a href="#">Faire gérer</a></li>
                <li><a href="#">Syndic</a></li>
                <li><a href="#">Immobilier professionnel</a></li>
                <li class="agence_rouge"><a href="#">Nos agences</a></li>
            </ul>
        </nav>
    </div>


</header>

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