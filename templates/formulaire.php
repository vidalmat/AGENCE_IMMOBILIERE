
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
    <p class="fildar">abri-nature-immobilier / <a href="index.php?route=showhome">accueil /</a><span class="span"> connexion</span></p>
    <div class="conteneur_connexion">
        <div class="connexion">
            <p class="parconnexion">Vous tentez d'accéder à un contenu qui nécessite que vous soyez connecté(e).</p>
            <form action="index.php?route=connect" method="POST">
                    <h1><img src="images/fleche_bas.png" alt="fleche bas">Se connecter</h1>
                    <input type="email" placeholder="Email" name="mail" required>
                        <input type="password" placeholder="Mot de passe" name="mdp" required >
                <input type="submit" id='submit' value='LOGIN' >
            </form>
        </div>
        <span class="span2"></span>
        <div class="creation_compte">
            <h2>Vous n'avez pas de compte?</h2>
            <button class="switchbutton" type="button">Créer un compte</button>
        </div>
    </div>
    <div id="form_button">
        <div class="conteneur_form">
            <div class="formulaire">
                <form action="index.php?route=insert_client" method="POST">
                    <input type="text" placeholder="Nom" name="nom" id="nom">
                    <input type="text" placeholder="Prénom" name="prenom" id="prenom">
                    <input type="text" placeholder="Adresse" name="adresse" id="adresse">
                    <input type="number" placeholder="Téléphone" name="tel" id="telephone">
                    <input type="text" placeholder="Email" name="mail" id="mail">
                    <input type="password" placeholder="Mot de passe" name="mdp" required >
                    <input type="submit" value="S'inscrire" id="inscription">
                </form>
            </div>
        </div>
    </div>

    <script src="js/button_showform.js"></script><!-- utilisation de js pour faire apparaître le formulaire -->
</section>