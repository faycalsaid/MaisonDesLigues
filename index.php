

<?php require 'vue/header.php'; ?>

<body>


<?php require "vue/Login/homeLogin.php" ; ?>

<?php 

//Chercher les salles de la db
require "controller/userManaging/userController.php";
?>


  
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>



</html>

<!-- END ROUTEUR -->
