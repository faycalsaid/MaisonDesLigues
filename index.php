
<!-- List Menu -->
<?php require 'controller/menuController.php';

/*Model BDD */
require "model/bddModel.php";

/* Login session
 * Her can test the login user if we have connetion exist we test him.
 * Else we request to login.
 */

session_start();

if(isset($_SESSION['login']) && isset($_SESSION['password'])){
  require 'controller/authentificationManaging/loginController.php';

}
else{
  if(isset($_GET['menu'])){
    if ($_GET['menu'] == "LOGIN") {
      $affiche = "controller/authentificationManaging/loginController.php";
      $titre = "M2L - Login";
    }
    else {
      header('Location: ?menu=LOGIN');
    }
  }
  else{
    header('Location: ?menu=LOGIN');
  }
  
}

/* Add Header */
require 'vue/header.php';

require $affiche;
?>


  
<?php require 'vue/footer.php' ?>

<!-- END ROUTEUR -->
