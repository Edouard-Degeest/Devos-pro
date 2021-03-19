<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/templatemo-lava.css">
  <link rel="stylesheet" href="assets/css/owl-carousel.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/form.css">
  <link rel="shortcut icon" type="image/png" href="img/favicon-32x32.png"/>
  <script src="https://kit.fontawesome.com/cfe1be0712.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Devos-pro | S'incrire </title>
</head>
<header class="header-area header-sticky background-header">
  <div class="container">
      <div class="row">
          <div class="col-12">
              <nav class="main-nav">
                  <!-- ***** Logo Start ***** -->
                  <a href="index.php" class="logo">
                      Devos-pro
                  </a>
                  <!-- ***** Menu Start ***** -->
                  <ul class="nav">
                      <li class="scroll-to-section"><a href="index.php">Accueil</a></li>
                      <li class="scroll-to-section"><a href="register.php">S'incrire</a></li>
                      <li class="scroll-to-section"><a href="login.php">Se Connecter</a></li>
                      
                  </ul>
                  <a class="menu-trigger">
                      <span>Menu</span>
                  </a>
                  <!-- ***** Menu End ***** -->
              </nav>
          </div>
      </div>
  </div>
</header>
<div id="main-content">

<div class="container">
  <br>
  <br>
<br>
<br>
<h1 class="text-center text-white">Devenez membre ! </h1>
<?php include('views/errors.php') ?>

<div class="wrapper">
    <form class="login" method="post">
      <p class="title">S'incrire sur Devos-pro :)</p>
      <input type="text" id="name" name="name"  value="<?= get_input('name') ?>" placeholder="Entrer votre nom">
      <i class="fa fa-user"></i>
      <input type="text" id="pseudo" name="pseudo" id="pseudo" value="<?= get_input('pseudo') ?>" required="required"  placeholder="Entrer votre Pseudo" autofocus/>
      <i class="fa fa-user"></i>
      <input type=email id="email" name="email" id="email" value="<?= get_input('email') ?>" required="required" placeholder="Entrer votre email"/>
      <i class="fa fa-envelope"></i>
      <input type="password" id="password" name="password" required="required" placeholder="Mot de passe"/>
      <i class="fa fa-key"></i>
      <input type="password" id="password_confirm" name="password_confirm" required="required" placeholder="Mot de passe"/>
      <i class="fa fa-key"></i>
      <button type="submit" value="Inscription" name="register" >
        <span class="state">Inscription</span>
      </button>
    </form>
  </div>

</body>
<script src="assets/js/jquery-2.1.0.min.js"></script>


<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>


<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script>


<script src="assets/js/custom.js"></script>
</html>