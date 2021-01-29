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
