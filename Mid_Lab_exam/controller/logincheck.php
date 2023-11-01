<?php
    require_once('../model/userModel.php');

    session_start();
    $userid = $_REQUEST['userid'];
    $password = $_REQUEST['password'];

    if($userid == "" || $password == "" ){
    
        echo "null userid or password!";
    
    }else{
        $status = login($userid, $password);
        
        if ($status['UserType'] == "Admin"){
            $_SESSION['flag'] = 'true';
            header('location: ../view/admin_home.php');
        }else{
            header('location: ../view/user_home.php');;
        }
    }
?>