<?php 
session_start();
include("filters/auth_filter.php");
require("db/database.php") ;
require("includes/functions.php") ;
require("includes/constants.php") ;

    if(!empty($_GET['id'])){
      $data = find_code_by_id($_GET['id']);

            if(!$data){
                redirect('share_code.php');
            }
        
    } else{
        redirect('share.php');
    }

?>

<?php require("views/show_view.php"); ?> 