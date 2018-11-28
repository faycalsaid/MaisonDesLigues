<?php

if((!isset($_GET['menu'])) || ($_GET['menu'] == "")) {
    $affiche = "controller/userManaging/userController.php";
    $titre = "M2L - Utilisateur";
}
elseif($_GET['menu'] == "USER") {
        $affiche = "controller/userManaging/userController.php";
        $titre = "M2L - Utilisateur";
    }
elseif ($_GET['menu'] == "SALLE") {
    $affiche = "controller/salleManaging/salleController.php";
    $titre = "M2L - Salle";
}
elseif ($_GET['menu'] == "ASSOCIATION") {
    $affiche = "controller/associationManaging/assoController.php";
    $titre = "M2L - Association";
} 