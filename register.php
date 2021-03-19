<?php 
session_start();
include("filters/guest_filter.php");
require("db/database.php") ;
require("includes/functions.php") ;
require("includes/constants.php") ;

if(isset($_POST['register'])) {

    if(not_empty(['name','pseudo','email','password','password_confirm'])){

    $errors = [];

     extract($_POST);

    if(mb_strlen($pseudo) <4){
            $errors[] = "Pseudo trop court ! Minimum 4 caractères";
    }

    if(! filter_var($email, FILTER_VALIDATE_EMAIL)){
         $errors[] = "Email non valide !";

    }

      if(mb_strlen($password) < 6){
            $errors[] = "Mot de passe est trop court ! Minimum 6 caractères";
    } else{
        if ($password != $password_confirm){
            $errors[] = "Les deux mots de passe ne sont pas pareil!";
        
        }
    }
    if(is_already_in_use('pseudo', $pseudo, 'users')){
        $errors[] ="Pseudo déjà utiliser";
    }
     if(is_already_in_use('email', $email, 'users')){
        $errors[] ="Email  déjà utiliser";
    }
     if(count($errors) == 0){
         $to = $email;
         $subject = WEBSITE_NAME. "- ACTIVATION DE VOTRE COMPTE";
         $token = sha1($pseudo.$email.$password);

         ob_start();
         require('templates/emails/activation.tmpl.php');
         $content = ob_get_clean();

         $headers = 'MIME-Version 1.0' . "\r\n";
         $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

         mail($to, $subject, $content, $headers);

         set_flash("Mail d'activation envoyer", 'success');
       $q =  $db->prepare('INSERT INTO users(name,pseudo,email,password)
       VALUES(:name, :pseudo, :email, :password)');
       $q->execute([
        'name' => $name,
        'pseudo' => $pseudo,
        'email' => $email,
        'password' => sha1($password)
       ]);
         redirect('index.php');
     }

} else{

    $errors[] = "Veuillez remplir tout les champs !";
}  }
?>

<?php require("views/register.view.php"); ?> 