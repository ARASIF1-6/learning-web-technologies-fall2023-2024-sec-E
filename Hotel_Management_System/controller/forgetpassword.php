<?php

    include('../model/passwordModel.php');

    session_start();
    if(isset($_REQUEST['submit'])){
        $newpassword = $_REQUEST['newpassword'];
        $retypenewpassword = $_REQUEST['retypepassword'];
                      

        if($newpassword == "" || $retypenewpassword == ""){
           echo "null value";
        }
        elseif(strlen($newpassword) < 8 || strlen($retypenewpassword) < 8) {
             echo "Password must not be less than eight characters.";
        }else if($newpassword == $retypenewpassword){
            updatepassword($_SESSION['username'], $newpassword);
            header('location: ../view/login.php');
        }else{
        echo "Password do not match";
        }
    }

?>