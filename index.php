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
</html>