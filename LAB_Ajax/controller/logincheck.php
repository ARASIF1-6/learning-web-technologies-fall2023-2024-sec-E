<?php
    require_once('../model/userModel.php');

    session_start();
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username == "" || $password == "" ){
    
        echo "null username or password!";
    
    }else{
        $status = login($username, $password);
        
        if ($status['UserType'] == "Employee"){
            $_SESSION['flag'] = 'true';
            header('location: ../view/employee_dashboard.php');
        }
        else{
            $_SESSION['flag'] = 'true';
            header('location: ../view/employees_management.php');;
        }
    }
?>