
<?php


require_once "index.php";





?>





<p class="fildar">abri-nature-immobilier / <a href="index.php?route=showhome">accueil /</a><span class="span"> connexion</span></p>

<div class="conteneur_connexion">

    <div class="connexion">

        <p class="parconnexion">Vous tentez d'accéder à un contenu qui nécessite que vous soyez connecté(e).</p>

        <form action="index.php?route=connect" method="POST">
            
                <h1><img src="images/fleche_bas.png" alt="fleche bas">Se connecter</h1>
            
                <input type="email" placeholder="Email" name="mail" required>
                
                    <input type="password" placeholder="Mot de passe" name="password" required >
                
            <input type="submit" id='submit' value='LOGIN' >
        </form>
    </div>

    <span class="span2"></span>
            
    <div class="creation_compte">

                <form action=" " method="POST">
                    <h2>Vous n'avez pas de compte?</h2>

                    <input type="submit" id='submit' value='Créer un compte' >
                </form>
            </div>
    
</div>


<div class="conteneur_form">

    <div class="formulaire">

        <form action="index.php?route=insert_client" method="POST">

            <input type="text" placeholder="Nom" name="nom" id="nom">
            <input type="text" placeholder="Prénom" name="prenom" id="prenom">
            <input type="text" placeholder="Adresse" name="adresse" id="adresse">
            <input type="number" placeholder="Téléphone" name="telephone" id="telephone">
            <input type="text" placeholder="Email" name="mail" id="mail">
            <input type="password" placeholder="Mot de passe" name="password" required >
            <input type="submit" value="S'inscrire" name="inscription" id="inscription">



        </form>


    </div>

</div>