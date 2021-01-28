<?php


session_start();

require_once "conf/fonctions.php";
require_once "conf/fonctions.php";
require_once "controllers.php";

var_dump($_GET);

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
    case "espace_membre" : $toTemplate = showEspaceMembre();
    break;
    case "connect" : $toTemplate = connectUser();
    break;
    case "insert_client" : insertClient();
    break;
    case "deconnect" : $toTemplate = deconnectUser();
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
</html>