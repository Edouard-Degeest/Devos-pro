<?php 
include("filters/guest_filter.php");
require "includes/functions.php";
require "db/database.php";

if(!empty($_GET['p']) && is_already_in_use('pseudo',$_GET['p'],'users')){

} else{
    redirect('index.php');
}