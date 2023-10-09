<?php 

    $username = $_REQUEST['username'];
    
    if($username == ""){
        echo "null value";
    }else{
        echo "$username";
    }
?>