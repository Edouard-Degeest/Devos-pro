<?php
session_start();

include("filters/auth_filter.php");
require("includes/functions.php");
require("db/database.php");
if (isset($_GET['id']) AND $_GET['id'] >0){
    $getid = intval($_GET['id']);
    $q = $db->prepare('SELECT * FROM users WHERE id = ? ');
    $q->execute(array($getid));
    
    $users = $q->fetch();
}

if(!empty($_GET['id'])){
    $user = find_user_by_id($_GET['id']);


    if(!$user){
        redirect('index.php');
    } else{
        $q = $db->prepare('SELECT content, created_at at FROM post WHERE user_id = :user_id ORDER BY created_at DESC');

        $q->execute([
            'user_id' => get_session('user_id')
        ]);
        $post = $q->fetchAll(PDO::FETCH_OBJ);
       
    }
} else{
    redirect('profile.php?id='.get_session('user_id'));
}

if(isset($_POST['update'])) {

    $errors = [];
    if (not_empty(['name','city','country','sex','bio'])){
        extract($_POST);

    $q = $db->prepare('UPDATE users SET name = :name, city = :city, country = :country, sex = :sex, twitter = :twitter, github = :github, available_for_job = :available_for_job, img = :img, bio = :bio WHERE id = :id');
    $q->execute([
        'name' => $name,
        'city' => $city, 
        'country' => $country, 
        'sex' => $sex, 
        'twitter' => $twitter, 
        'github' => $github, 
        'available_for_job' => !empty($available_for_job) ? '1' : '0',
        'bio' => $bio, 
        'id' =>$_SESSION['user_id'],
        'img' =>$img

    ]);
    set_flash('Votre profil a était mis à jour !');
    } else{
        
        $errors[] = "Veuillez remplir tout les champs";
       }
 } else{
     clear_input_data();
 }
 if(isset($_FILES['img']) AND !empty($_FILES['img']['name']))
 {
     $tailleMax = 2097152;
     $extensionValides = array('jpg','png','jpeg', 'gif');
     if($_FILES['img']['size'] <= $tailleMax)
     {
        $extensionUpload = strtolower(substr(strrchr($_FILES['img']['name'], '.'), 1));
        if(in_array($extensionUpload, $extensionValides))
        {
            $chemin = "users/".$_SESSION['user_id'].".".$extensionUpload;
            $resultat = move_uploaded_file($_FILES['img']['tmp_name'], $chemin);
            if($resultat)
            {
               $updateimg = $db->prepare('UPDATE users SET img = :img WHERE id = :id');
               $updateimg->execute(array(
                'img' => $_SESSION['user_id'].".".$extensionUpload,
                'id' => $_SESSION['user_id']
               ));
               header('Location: profile.php?id='.$_SESSION['user_id']);
            }
            else
            {
                $msg = "Erreur durant l'importation de votre photo de profil";
            }
        }
        else
        {
            $msg = "Votre photo de profil doit être au format jpg, jpeg, png ou gif";
        }
     }
     else
     {
         $msg = "Votre photo de profil ne doit pas dépasser 2Mo";
     }
 }
  require("views/profile.view.php");
?>
