<?php
    require_once('../model/userModel.php');

    session_start();
    $username = $_REQUEST['username'];
    $_SESSION['username'] = $username;

    if($username == ""){
    
        echo "null username";
    
    }else{
        $status = usersearch($username);
        
        if($status['UserName'] == $username){
            header('location: ../view/forget_password_2.php');
        }else{
            echo "Invalid user!";
        }
    }
?>