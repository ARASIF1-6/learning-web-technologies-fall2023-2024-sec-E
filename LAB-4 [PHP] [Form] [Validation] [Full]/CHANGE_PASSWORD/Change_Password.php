<?php 
    
    $currentpassword = $_REQUEST['currentpassword'];
    $newpassword = $_REQUEST['newpassword'];
    $retypenewpassword = $_REQUEST['retypenewpassword'];

    if($currentpassword == "" || $newpassword == "" || $retypenewpassword == ""){
        echo "null value";
    }
    else if($currentpassword != $newpassword){
        
        if($newpassword == $retypenewpassword){
            echo "Password Changed";
        }
           
        else{
           echo "Password not Changed";
        }
    }
    else {
        echo "Invalid password";
    }
    
?>