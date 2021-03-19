<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/profil.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <title>Devos-pro | Profile</title>
</head>

<body class="bod">
    <!-- HEADER -->
    <header class="headblock ">
        <div class="col">
            <ul class="header-menu horizontal-list prof-menu">
            <li class="scroll-to-section">
                    <a class="header-menu-tab" href="index.php">
                        <span class="scnd-font-color"></span>Accueil</a>
                </li>
                <li class="scroll-to-section">
                    <a class="header-menu-tab" href="profile.php">
                        <span class="scnd-font-color"></span>Votre Profil</a>
                </li>
                <li class="scroll-to-section">
                    <a class="header-menu-tab" href="page.php">
                        <span class=" scnd-font-color"></span>Flux</a>
                </li>
                <li class="scroll-to-section">
                    <a class="header-menu-tab" href="logout.php">
                        <span class=" scnd-font-color"></span>Déconnexion</a>
                </li>
            </ul>
        </div>

        <div class="profile-menu">
            </div>
        </div>
    </header>



<div id="main-content">
<div id="main-content-share-code">
        <pre class="prettyprint linenums"><?= e($data->code); ?> </pre>
         <div class="btn-group nav">
        <a  href="share.php?id=<?= $_GET['id'] ?>" class="btn btn-secondary"
        >Modifier</a>
        <a href="share.php" class="btn btn-primary">Nouveau</a>

        
        </div>
</div>
</div>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/google-code-prettify/prettify.js"></script>
<script>
        prettyPrint();
</script>


</body>
</html>
