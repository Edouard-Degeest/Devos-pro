<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/profil.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="img/favicon-32x32.png"/>
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
                    <a class="header-menu-tab" href="logout.php">
                        <span class=" scnd-font-color"></span>Déconnexion</a>
                </li>
            </ul>
        </div>

        <div class="profile-menu">
            <p><?= e($user->pseudo)?><a href="#26"><span class="entypo-down-open scnd-font-color"></span></a></p>
            <div class="profile-picture small-profile-picture">
            <?php
            if(!empty($users['img']))
            {
                ?>
                <img src="/users/<?php echo $users['img'];?>" width="150"> 
                <?php
            }

            ?>
            </div>
        </div>
    </header>


    <div class="dieu">
        <!-- LEFT-CONTAINER -->

        <div class="middle-container container">
            <div class="profile block">
                <!-- PROFILE (MIDDLE-CONTAINER) -->
                <div class="profile-picture big-profile-picture clear"><?php
            if(!empty($users['img']))
            {
            ?>
             <img src="/users/<?php echo $users['img'];?>" width="150"> 
            <?php
            }
            ?> 
                </div>
                <br>
                <div class="container-fluid ">
	                <div class="myBg mx-auto d-flex flex-row align-items-center justify-content-center rounded" id="card2">
                <div class="infos">
                <h1 class="sub-btn">INFOS PROFILE</h1>
                <h2><?= e($user->pseudo)?></h2>
                <p class="sub-btn fa fa-envelope"> Email</p> 
                   <a href="mailto:<?=e($user->email) ?>"><?=e($user->email) ?></a></p>
                   <p class="fa fa-location-arrow sub-btn"> Ville / Pays</p>
                    <?= 
                    $user->city && $user->country ? ''.e($user->city).' - ' . e($user->country) . '<br/>' : '';
                     ?>
                     <p class="sub-btn fab fa-twitter"> Twitter</p>
                <?= 
                    $user->twitter ? ' <a href="//twitter.com/'.e($user->twitter).'">@'.e($user->twitter).'</a><br/>' : '';
                     ?>
                <p class="sub-btn fab fa-github"> Github</p> 
                <?= 
                    $user->github ? '<a href="//twitter.com/'.e($user->github).'">@'.e($user->github).'</a><br/>' : '';
                     ?>
                     <p class="sub-btn fa fa-male"> Sexe</p> 
                     <?= 
                    $user->sex = "H" ? '<i class="fa fa-male"></i>' : '<i class="fa fa-female"> </i>';
                    
                     ?>
                     <p class="sub-btn fas fa-users"> Disponibilité</p> 
                    <?= 
                    $user->available_for_job ? 'Disponible pour emploi' : 'Non disponible pour emploi';
                    
                     ?>
                     
                <div class="row">
                <div class="col-md-12 ">
                    <p class="sub-btn fas fa-book-reader"> Biographie de <?= e($user->name) ?></p>
                        <?=
                            $user->bio ? nl2br(e($user->bio)) : "Aucune biographie";
                        ?>
                    </p>
                    </div>
                    </div>
                    </div>
                    </div>
</div>

            </div>
        </div>
        <br>
        <div class="middle-container container">

            <div class="donut-chart-block block">

                <div class="panel-heading">
                    <h3 class="panel-title">Compléter mon profil</h3>
                </div>

                <div class="panel-body">
                    <?php include('views/errors.php') ?>
                </div>
                <ul class="form-list-pro">
                    <li>
                        <form method="post" autocomplete="off" action="" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6 w-input-prof">
                                    <div class="form-group">

                                        <input type="text" name="name" id="name" class="form-control" placeholder="Nom">
                                    </div>
                                </div>
                    </li>
                    <li>
                        <div class="form-group">

                            <input type="text" name="city" id="city" class="form-control" placeholder="Ville">
                        </div>

                    </li>
                    <li>
                        <div class="col-md-6 w-input-prof">
                            <div class="form-group">

                                <input type="text" name="country" id="country" class="form-control" placeholder="Pays">
                            </div>
                        </div>
                    </li>


                    <li>
                        <div class="">
                            <div class="form-group">

                                <input type="text" name="twitter" id="twitter" class="form-control"
                                    placeholder="Twitter">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="">
                            <div class="form-group textinput">

                                <input type="text" name="github" id="github" class="form-control " placeholder="Github">
                            </div>
                        </div>
                    </li>
                    <li>
                        <ul class="intralist">
                            <li class="intrali">
                                <div class="">
                                    <div class="">
                                        <div class="form-group taf">
                                            <label for="available_for_job"> <input type="checkbox"
                                                    name="available_for_job" id="available_for_job"> Disponible pour
                                                travailler ?
                                                </label?>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="intrali">
                                <div class="">
                                    <div class="form-group ">

                                        <textarea name="bio" id="bio" cols="30" rows="10" class="form-control textzone"
                                            placeholder="Racontez vos expérience"></textarea>
                                    </div>
                                </div>

                            </li>
                            <li class="intrali">
                                <div class="col-md-6 w-input-prof">
                                    <div class="form-group ">
                                                <select name="sex" id="sex" class="form-control">
                                    <option value="H" <?= $user->sex == "H" ? "selected" : ""?>>
                                    Homme
                                    </option>
                                    <option value="F"  <?= $user->sex == "F" ? "selected" : ""?>>
                                    Femme
                                    </option>
                                    </select>
                                    </div>
                                </div>
                            </li>
                            <li class="intrali">
                                <div class="col-md-6 w-input-prof">
                                <label for="file">Photo de profile</label>
                                <input type="file" id="img" name="img" accept="image/png, image/jpeg">
                            </li>
                            <li class="intrali">
                                <input type="submit" class="btn btn-primary sub-btn " value="Valider" name="update" />
                                </form>

                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    </div>



    </div>
    </div>

    </div>
    </div>
    </main>
    </div>
    </div>
    </div>
</body>

<?php include('views/flash.php');?>
</html>