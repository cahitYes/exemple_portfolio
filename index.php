<?php

/*
controleur frontal
*/
// chargement des dépendances
require_once "config.php"; // configuration
        // si on a un fichier de fonctions on le charge ici

// si on a besoin de se connecter a une base de donnée, on se connecte ici !

// routeur
if(!isset($_GET['pages'])){
    // chargement de l'accueil
    include_once "import/homepage.php";
}
else{
    //on est pas sur l'accueil
    switch($_GET['pages']){
        case "cv":
            // import du cv
            include_once "import/curiculum.php";
            break;
        case "tuto":
            include_once "import/tutoriel.php";
            break;
        default:
            // chargement de l'accueil
            include_once "import/homepage.php";
    }
}

//si on veut fermer notre connexion, on le fais ici