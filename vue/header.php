<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?= $titre ?></title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="public/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="public/css/mdb.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="public/css/style.css" rel="stylesheet">
<<<<<<< HEAD

  <!-- Login js -->
  <script src="public/js/auth.js"></script>
  <!-- Jquery 3.3.1 -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
=======
  <!-- Jquery for Ajax calls -->
  <script type="text/javascript" src="public/js/jquery-3.3.1.min.js"></script>
>>>>>>> Faycal_Users
</head>

<body>
  <nav class="navbar navbar-dark elegant-color-dark justify-content-between">
    <a class="navbar-brand" href="#">Masion Des Ligues</a>

    <a href="?menu=USER">Utilisateur</a>
    <a href="?menu=SALLE">Salle</a>
    <a href="?menu=ASSOCIATION">Association</a>
    <?php if (isset($_SESSION['login'])): ?> <a href="?menu=DISCONNECT">Déconnexion</a> <?php endif; ?>
  </nav>