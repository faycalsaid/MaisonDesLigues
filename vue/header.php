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

  <!-- Login js -->
  <script src="public/js/auth.js"></script>
  <!-- Jquery 3.3.1 -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>

  <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark special-color-dark">

<!-- Navbar brand -->
<a class="navbar-brand text-uppercase" href="#">Masion Des Ligues</a>

<!-- Collapse button -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2"
  aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<!-- Collapsible content -->
<div class="collapse navbar-collapse" id="navbarSupportedContent2">

  <!-- Links -->
  <ul class="navbar-nav mr-auto">

    <!-- Features -->
    <li class="nav-item dropdown mega-dropdown active">
      <a class="nav-link text-uppercase" id="navbarDropdownMenuLink2"
        aria-haspopup="true" aria-expanded="false" href="?menu=USER">Utilisateur</a>
    </li>
    <!-- Technology -->
    <li class="nav-item dropdown mega-dropdown">
      <a class="nav-link text-uppercase" id="navbarDropdownMenuLink3"
        aria-haspopup="true" aria-expanded="false" href="?menu=SALLE">Salle</a>
    </li>
    <!-- Lifestyle -->
    <li class="nav-item dropdown mega-dropdown">
      <a class="nav-link text-uppercase" id="navbarDropdownMenuLink4"
        aria-haspopup="true" aria-expanded="false" href="?menu=ASSOCIATION">Association</a>
    </li>
    <!-- Logout -->
  <?php if (isset($_SESSION['login'])): ?>
      <li class="nav-item dropdown mega-dropdown">
        <a class="nav-link text-uppercase" id="navbarDropdownMenuLink4"
          aria-haspopup="true" aria-expanded="false" href="?menu=DISCONNECT">Déconnexion</a>
      </li>
  <?php endif; ?>
  </ul>
  <!-- Links -->

  <!-- Search form -->
  <form class="form-inline">
    <div class="md-form my-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
    </div>
  </form>

</div>
<!-- Collapsible content -->

</nav>
<!-- Navbar -->