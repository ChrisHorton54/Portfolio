<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/scripts/config.php'); 
    $email = $_POST['email'];
    $password = $_POST['password'];

    $get_user = "SELECT *  FROM users where email = '".$email."' AND password = '".$password."' AND active = '1'";
    
    $result = $sql->query($get_user);
    
    if($result->num_rows > 0){
       $found = true;
    } else {
        $found = false;
    }
    
    echo json_encode($found);
?>
