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



function showEspaceAgent() {

    $bien = new Modeles\Bien();
    $bien = $bien->selectAll();
    // if(!isset($_SESSION["id_agent"])) {
    //     header("Location:index.php?route=showhome");
    // }
    return [
        "template" => "templates/espace_agent.php",
        "biens" => $bien
    ];

}


function showEspaceMembre() {
    if(!isset($_SESSION["id_client"])) {
        header("Location:index.php?route=showhome");
    }
    return [
        "template" => "templates/espace_membre.php"
    ];
}



function showBien() {
    if(!isset($_SESSION["id_bien"])) {
        header("Location:index.php?route=showhome");
    }
    return [
        "template" => "templates/page_bien.php"
    ];
}



//Fonctions redirigées
function connectUser() {

    // L'utilisateur envoie ses emails et mot de passe
    // Reçues dans $_POST["mail"] et $_POST["password"]
    // Il s'agit de : 
    // 1) Vérifier s'il existe un utilisateur enregistré correspondant à l'adresse mail 
    $user = new Modeles\Client();
    $user->setMail($_POST["mail"]);
    $verif = $user->selectByMail();

    var_dump($verif);


    // 2) Vérifier, si oui, si les mots de passe coïcident
    if($verif) {

        // 3) Si tout est ok, on place l'utilisateur en session
        if(password_verify($_POST["mdp"], $verif["mdp"])) {

            //Je peux connecter mon utilisateur
            $_SESSION["id_client"] = $verif["id_client"];
            $_SESSION["mail"] = $verif["mail"];

            // 4) On renvoie sur son espace perso
            header("location:index.php?route=espace_membre");
            exit;

        }else {
            echo "Le mot de passe est incorrect";
        }

    }

    // header("location:index.php?route=showform");
    exit;

}



function insertClient() {
        
    var_dump($_POST);


    $client = new Modeles\Client();
    $client->setNom($_POST["nom"]);
    $client->setPrenom($_POST["prenom"]);
    $client->setAdresse($_POST["adresse"]);
    $client->setMail($_POST["mail"]);
    $client->setTel($_POST["tel"]);
    $client->setMdp(password_hash(($_POST["mdp"]), PASSWORD_DEFAULT));
    $client->insert();


    header("Location:index.php?route=showform");
    exit;

}



function insertAgent() {

    var_dump($_POST);


    $agent = new Modeles\Agent();
    $agent->setNom($_POST["nom"]);
    $agent->setPrenom($_POST["prenom"]);
    $agent->setMail($_POST["mail"]);
    $agent->setTel($_POST["tel"]);
    $agent->setMdp(password_hash(($_POST["mdp"]), PASSWORD_DEFAULT));
    $agent->insert();


    header("Location:index.php?route=showformagent");
    exit;

}



function insertBien() {

    var_dump($_POST);
    var_dump($_FILES);

    $bien = new Modeles\Bien();
    $bien->setIdCategorie($_POST["categorie"]);
    $bien->setNom($_POST["nom"]);
    $bien->setAdresse($_POST["adresse"]);
    $bien->setPrix($_POST["prix"]);

    // variable pour nouvelle image
    $uploader = new Conf\UploadImage($_FILES["image"], 1200, 1200); // 1200 correspond au width et height qui veut dire 1200px

    $bien->setImage($uploader->set_image());
    $bien->insert();


    header("Location:index.php?route=showbien");
    exit;

}



function deconnectUser() {

    $_SESSION = [];
    session_destroy();

    // retour à la page d'accueil après la déconnexion 
    header("location:index.php?route=showhome");
    exit;


}




?>