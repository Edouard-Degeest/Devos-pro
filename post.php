<?php 
session_start();
include("filters/auth_filter.php");
require("db/database.php") ;
require("includes/functions.php") ;


if(isset($_POST['publish'])){
    
    if(!empty($_POST['content'])){
        extract($_POST);

        $q = $db->prepare('INSERT INTO post(content, user_id, created_at) VALUES(:content, :user_id, NOW())');
        $q->execute([
            'content' => $content,
            'user_id' => get_session('user_id')
        ]);
        set_flash('Votre statut a été posté');
    }
}

redirect('profile.php?id='.get_session('user_id'));