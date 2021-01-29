<?php








?>


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