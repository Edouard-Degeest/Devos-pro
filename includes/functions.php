<?php

if(!function_exists('not_empty')){
function not_empty($fields = []){

    if(count($fields) != 0){
        foreach($fields as $field){
            if(empty($_POST[$field]) || trim($_POST[$field]) == ""){ 
                return false;
            }
        }

        return true;
    }
} 
}

if(!function_exists('e')){
    function e($string){
        if($string){
            return htmlspecialchars($string);
        }
    }
}
if(!function_exists('is_already_in_use')){
function is_already_in_use($field, $value, $table ){
    global $db;

    $q = $db->prepare("SELECT id FROM $table WHERE $field =?");
    $q->execute([$value]);
    $count = $q->rowCount();
    $q->closeCursor();

    return $count;
    }

    }

    if(!function_exists('set_flash')){
    function set_flash($message, $type = 'info'){
        $_SESSION['notification']['message'] = $message;
        $_SESSION['notification']['type'] = $type;

    }
}

if(!function_exists('redirect')){
    function redirect($page){
        header('Location: ' . $page);
        exit(); 
    }
}


if(!function_exists('save_input_data')){
    function save_input_data(){
        foreach($_POST as $key => $value){
       if(strpos($key,'password') === false){
           $_SESSION['input'][$key] = $value;
       }
         }
    }
    }


if(!function_exists('get_input')){
    function get_input($key){
        if(!empty($_SESSION['input'][$key])){
             return $_SESSION['input'][$key];
        } else{
            return null;
        }
         return !empty($_SESSION['input'][$key])
         ? e($_SESSION['input'][$key])
         : null;
         }
    }



if(!function_exists('clear_input_data')){
    function clear_input_data(){
       if(isset($_SESSION['input'])){ 
        $_SESSION['input'] = [];
    }
    }
    }



    if(!function_exists('get_session')){
    function get_session($key){
        if($key){
      return !empty($_SESSION[$key])
         ? e($_SESSION[$key])
         : null;
         }
    }
    }
    
    if(!function_exists('is_logged_in')){
    function is_logged_in(){
        return isset($_SESSION['user_id']) || isset($_SESSION['pseudo']);
    }
    }
    

    if(!function_exists('find_user_by_id')){
    function find_user_by_id($id){
      global $db;

       $q = $db-> prepare('SELECT name, pseudo, email, city, country, twitter, github, sex, available_for_job, bio FROM users WHERE id = ? ');
       $q->execute([$id]);

       $data = current($q->fetchAll(PDO::FETCH_OBJ));
       $q->closeCursor();
       return $data;
    }
    }
    
    if(!function_exists('find_code_by_id')){
    function find_code_by_id($id){
      global $db;

  

      $q = $db->prepare('SELECT code FROM codes WHERE id = ?');
      $q->execute([$id]);

     $data = $q->fetch(PDO::FETCH_OBJ);
       $q->closeCursor();
       return $data;
    }
    }



if (!function_exists('get_avatar_url')) {
    function get_avatar_url($email){
        return "http://gravatar.com/avatar/".md5(strtolower(trim(e($email))));
    }
}
