<?php 
session_start();
include("filters/guest_filter.php");
require("db/database.php") ;
require("includes/functions.php") ;
require("includes/constants.php") ;

if(isset($_POST['login'])) {
    if (not_empty(['identifiant','password'])){
        extract($_POST);

    $q =  $db->prepare("SELECT id,pseudo FROM users 
                        WHERE (pseudo = :identifiant OR email = :identifiant)
                        AND password = :password AND active = '0'");
    $q->execute([
        'identifiant' => $identifiant,
        'password' => sha1($password)
    ]);
    $userHasBeenFound = $q->rowCount();
    if($userHasBeenFound){
        $user = $q->fetch(PDO::FETCH_OBJ);
            
        $_SESSION['user_id'] = $user->id;
        $_SESSION['pseudo'] = $user->pseudo;

        redirect('index.php?id='.$user->id);
    }else{
        set_flash('Combinaison identifiant / Mot de passe incorrecte');
        save_input_data();
    }
    }
 } else{
     clear_input_data();
 }
?>

<?php require("views/login.view.php"); ?> 