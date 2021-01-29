<?php








?>


<form action="index.php?route=insert_bien" method="POST">

    <select name="categorie" id="">
        <option value="1">Vente</option>
        <option value="2">Location</option>
    </select>
    <input type="text" placeholder="Nom" name="nom" id="nom">
    <input type="text" placeholder="Adresse" name="adresse" id="adresse">
    <input type="text" placeholder="Prix" name="prix" id="prix">
    <input type="submit" value="Ajouter un bien" id="ajout_bien">

</form>


<h2>Ajouter une formule</h2>

<form action="index.php?route=insert_bien" method="POST" enctype="multipart/form-data">

    <input type="file" name="image">
    <input type="submit" value="Ajouter une nouvelle photo">

</form>