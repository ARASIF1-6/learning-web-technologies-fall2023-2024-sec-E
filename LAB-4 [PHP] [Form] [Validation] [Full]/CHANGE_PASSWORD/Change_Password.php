<?php 
    
    $password = $_REQUEST['password'];
    $newpassword = $_REQUEST['newpassword'];
    $rnewpassword = $_REQUEST['retypenewpassword'];

    if($password == $_SESSION['user']['password']){
        $_SESSION['flag'] = 'true';
    }
    

    else {
        echo "Invalid password";
    }
?>