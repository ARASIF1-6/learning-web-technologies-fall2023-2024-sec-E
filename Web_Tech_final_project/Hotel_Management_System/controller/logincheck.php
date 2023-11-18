<?php
    require_once('../model/userModel.php');

    session_start();
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username == "" || $password == "" ){
    
        echo "null username or password!";
    
    }else{
        $status = login($username, $password);
        
        if ($status['UserType'] == "Admin"){
            $_SESSION['flag'] = 'true';
            header('location: ../view/admin_dashboard.php');
        }elseif($status['UserType'] == "Receptionist"){
            $_SESSION['flag'] = 'true';
            header('location: ../view/receptionist_dashboard.php');
        }elseif($status['UserType'] == "Guest"){
            $_SESSION['flag'] = 'true';
            header('location: ../view/guest_dashboard.php');
        }else{
            echo "invalid user!";
        }
    }
?>