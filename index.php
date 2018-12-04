
<!-- List Menu -->
<?php require 'controller/menuController.php';

/*Login session*/
if ($_GET['menu'] == "LOGIN") {
  $affiche = "controller/authentification/loginControlle.php";
}

/* Add Header */
require 'vue/header.php';

require $affiche;

?>


  
<?php require 'vue/footer.php' ?>

<!-- END ROUTEUR -->
