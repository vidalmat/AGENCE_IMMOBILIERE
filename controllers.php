<?php

// FONCTIONS "CONTROLLERS" = traitements appelés


// Fonction d'affichage de la page accueil.php
function showHome() {

    return ["template" => "templates/accueil.php"];
}



// Fonction d'affichage de la page formulaire (formulaire.php)
function showForm() {

    return ["template" => "templates/formulaire.php"];
}



function showMembre() {
    if(!isset($_SESSION["id_client"])) {
        header("Location:index.php?route=showhome");
    }
    return ["template" => "espace_membre.php"];
}


function showEspaceMembre() {
    if(!isset($_SESSION["id_client"])) {
        header("Location:index.php?route=showhome");
    }
    return [
        "template" => "espace_membre.php"
    ];
}



//Fonctions redirigées
function connectUser() {

    // L'utilisateur envoie ses emails et mot de passe
    // Reçues dans $_POST["mail"] et $_POST["password"]
    // Il s'agit de : 
    // 1) Vérifier s'il existe un utilisateur enregistré correspondant à l'adresse mail 
    $user = new Modeles\Client();
    $user->setMail($_POST["email"]);
    $verif = $user->selectByMail();


    // 2) Vérifier, si oui, si les mots de passe coïcident
    if($verif) {

        // 3) Si tout est ok, on place l'utilisateur en session
        if(password_verify($_POST["password"], $verif["password"])) {

            //Je peux connecter mon utilisateur
            $_SESSION["id_client"] = $verif["id_client"];
            $_SESSION["email"] = $verif["email"];

            // 4) On renvoie sur son espace perso
            header("location:index.php?route=espace_membre");
            exit;

        }else {
            echo "Le mot de passe est incorrect";
        }

    }

    header("location:index.php?route=showform");
    exit;

}



function insertClient() {

    $client = new Modeles\Client();
        if(preg_match("#^.{1,50}$#", trim($_POST["client"]))) { // la fonction trim() sert à supprimer les espaces au début et à la fin
            $client->setNom($_POST["client"]); // récupérer les données fournis par l'utilisateur
            if(!$client->select()){
                $client = $client->insert();
            }              
        }else {
            echo "La connexion est incorrect";
        }

        
        header("Location:index.php?route=espace_membre");

}



function insertAgent() {

    $agent = new Modeles\Agent();
        if(preg_match("#^.{1,50}$#", trim($_POST["agent"]))) { // la fonction trim() sert à supprimer les espaces au début et à la fin
            $agent->setNom($_POST["agent"]); // récupérer les données fournis par l'utilisateur
            if(!$agent->select()){
                $agent = $agent->insert();
            }              
        }else {
            echo "La connexion est incorrect";
        }

        
        header("Location:index.php?route=espace_membre");

}



function deconnectUser() {

    $_SESSION = [];
    session_destroy();

    // retour à la page d'accueil après la déconnexion 
    header("location:index.php?route=showhome");
    exit;


}




?>