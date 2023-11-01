<?php
    
    include('../model/userModel.php');
    
    $userid = $_REQUEST['userid'];
    $password = $_REQUEST['password'];
    $confirmpassword = $_REQUEST['confirmpassword'];
    $name = $_REQUEST['name'];
    $usertype = $_REQUEST['usertype'];

    $user = [$userid, $name, $password, $usertype];

    if($userid == "" || $password == "" || $confirmpassword == "" || $name == "" || $usertype == "" ){
        echo "null username or password or email!";
    }else{
        signup($user);
        user($user);
        header('location: ../view/login.php');
    }

?>