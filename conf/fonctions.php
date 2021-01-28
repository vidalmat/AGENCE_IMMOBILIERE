<?php

// FONCTIONS "UTILITAIRES"

// chargement automatique des class

    //$class est automatiquement relié avec "new" models\label(); sur le spl_autoload_register(attention automatique)
    spl_autoload_register(function(string $class){

        // "Modeles\client"
        echo $class;

        // le but est de remplacer le backslach(\), en slach(/) pour pouvoir aller sur le bon chemin models/Label.php
        $class = str_replace("\\", "/", $class);
        //echo $class;

        //lcfirst() sert à mettre la première en minuscule
        $class = lcfirst($class);
        //echo $class;

        if (file_exists("$class.php")){
            require_once "$class.php";
            // ex : require "models/Client.php";
            return true;
        }
        
        throw new Exception("Une erreur est survenue lors du chargement");
    });

    /////////////////////////////////////////////////////////



    //strip_tags supprime toutes les balises d'une chaîne de caractère ex : JS en cas d'injection de script malveillant 
    function strip_xss(&$value) {

        if(is_array($value)) {

            array_walk($value, "strip_xss");

        } else if (is_string($value)) {

            $value = strip_tags($value);
        }

    }




    
    function ch_entities(&$value) {

        if(is_array($value)) {

            array_walk($value, "ch_entities");

        } else if (is_string($value)) {

            $value = htmlentities($value);
        }

    }

  



?>