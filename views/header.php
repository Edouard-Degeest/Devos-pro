<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/templatemo-lava.css">
  <link rel="stylesheet" href="assets/css/owl-carousel.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/js/google-code-prettify/prettify.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/main.css">
  <link rel="shortcut icon" type="image/png" href="img/favicon-32x32.png"/>
  <script src="https://kit.fontawesome.com/cfe1be0712.js" crossorigin="anonymous"></script>
  <title>Devos-pro | Accueil</title>
</head>


<body>
  <!-- ***** Header Area Start ***** -->
  <header class="  header-area header-sticky ">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.php" class="logo">Devos-pro</a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                      <li class="nav-item">
                             
                              <li>
                          <li class="scroll-to-section">
                          <a class="nav-link" aria-current="page" href="index.php">Accueil</a>
                          <li class="scroll-to-section">
                          <?php if( is_logged_in() ): ?>
                              <a class="nav-link "  href="profile.php?id=<?= get_session('user_id') ?>">Mon Profil</a> </li>
                              <li class="nav-item">
                              <a class="nav-link" href="../share.php">Partager</a> </li>
                              <li>
                              <a class="nav-link" href="logout.php">Déconnexion</a>
                              </li>
                              <li class="nav-item">
                              <a class="nav-link" href="list_user.php">Liste des utilisateurs</a> 
                            </li>
                              <?php else: ?>
                                <li class="nav-item">
                              <a class="nav-link" href="../register.php">Inscription</a>
                                    </li>
                                <li class="nav-item">
                                  <a class="nav-link "  href="../login.php" >Connexion</a>
                              </li>
                                        <?php endif; ?>
                                        <li class="nav-item">
      
                      </ul>
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
<?php include('views/flash.php');?>