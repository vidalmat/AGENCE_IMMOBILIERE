<?php


session_start();
//var_dump($_SESSION); // vue sur d'éventuels messages d'erreurs tel qu'un mail identique voir insertClient() dans controllers

require_once "conf/fonctions.php";
require_once "controllers.php";
require_once "conf/global.php";

//var_dump($_GET);

$route = (isset($_GET["route"]))? $_GET["route"] : "showhome";

//Traduction de la ligne ci-dessus

    // if(isset($_GET["route"])) {
    //     $route = $_GET["route"];
    // }else {
    //     $route = "default";
    // }



// Début du routeur
switch ($route) {

    case "showhome" : $toTemplate = showHome();
    break;
    case "showform" : $toTemplate = showForm();
    break;
    case "showformagent" : $toTemplate = showFormAgent();
    break;
    case "espace_agent" : $toTemplate = showEspaceAgent();
    break;
    case "espace_membre" : $toTemplate = showEspaceMembre();
    break;
    case "showbien" : $toTemplate = showBien();
    break;
    case "showmaison" : $toTemplate = showMaison();
    break;
    case "showappartement" : $toTemplate = showAppartement();
    break;
    case "connect" : connectUser();
    break;
    case "connect_agent" : connectAgent();
    break;
    case "insert_agent" : insertAgent();
    break;
    case "insert_client" : insertClient();
    break;
    case "insert_bien" : insertBien();
    break;
    case "sup_bien" : supBien();
    break;
    case "deconnect" : deconnectUser();
    break;
    default : $toTemplate = showHome(); // fonction par défaut

}
// Fin du routeur




?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="templates/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence</title>
</head>
<body>
    

    <!-- Contenu spécifique de chacune des pages -->

<!-- utilisation du require pour afficher le contenu de la variable $toTemplate voir fichier controllers.php (function showHome())-->
    <?php require $toTemplate["template"] ?>


</body>
<footer>
                        <!-- ------------ Conteneur 6 ------------- -->
    <div class="conteneur6">
        <div class="logo_footer">
        <a href="index.php?route=showhome"><img src="images/logob&w.png" alt="logo_footer"></a>
        </div>
        <div class="bloc_text_footer">
            <div class="par1">
                <ul>À découvrir
                    <li><a href="#">Nos conseils</a></li>
                    <li><a href="#">Découvrez votre futur quartier</a></li>
                    <li><a href="#">Nos actualités</a></li>
                    <li><a href="#">Vendez ou louez votre bien</a></li>
                    <li><a href="#">Trouvez une agence immobilière</a></li>
                    <li><a href="#">Guide et conseils immobiliers</a></li>
                </ul>
            </div>
            <div class="par2">
                <ul>À propos de nous
                    <li><a href="#">Notre agence</a></li>
                    <li><a href="#">Qui sommes nous</a></li>
                    <li><a href="#">Nous contacter</a></li>
                    <li><a href="#">Nous recrutons</a></li>
                    <li><a href="#">Besoin d'aide?</a></li>
                    <li><a href="#">Votre avis nous interesse</a></li>
                </ul>
            </div>
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
            <p><a href="#">Mentions légales</a></p>
        </div>
        <div class="mentions">
            <p><a href="#">Politique de confidentialité</a></p>
        </div>
        <div class="mentions">
            <p><a href="#">Paramétrer les cookies</a></p>
        </div>
    </div>
</footer>
</html>