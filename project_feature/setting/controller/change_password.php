<?php

    include('../model/userModel.php');

    $password = getpassword($_SESSION['user']);

    if(isset($_REQUEST['submit'])){
    $currentpassword = $_REQUEST['currentpassword'];
    $newpassword = $_REQUEST['newpassword'];
    $retypenewpassword = $_REQUEST['retypenewpassword'];
                      

    if($currentpassword == "" || $newpassword == "" || $retypenewpassword == ""){
        echo "null value";
    }
    elseif(strlen($currentpassword) < 8 || strlen($newpassword) < 8 || strlen($retypenewpassword) < 8) {
        echo "Password must not be less than eight characters.";
    }
    elseif($currentpassword != $password['Password']){
        echo "current password not matched.";
    }  
    elseif($currentpassword != $newpassword){
        
        if($newpassword == $retypenewpassword){
            updatepassword($_SESSION['user'], $newpassword);
            echo "Password Changed";
        }
        else{
           echo "Password not Changed";
        }
    }
    else{
        echo "Invalid password";
    }

    }

?>