<?php

/*
controleur frontal
*/
// chargement des dépendances
require_once "config.php";

// routeur
if(!isset($_GET[`pages`])){
    // chargement de l'accueil
}
else{
    //on est pas sur l'accueil
    switch($_GET[`pages`]){
        case "cv":
            // import du cv
            break;
        case "tuto":
            
            break;
    }
}