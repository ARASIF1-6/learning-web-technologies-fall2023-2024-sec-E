<?php

    require_once('db.php');

    function getpassword($username){
        $con = getConnection();
        $sql = "select Password from login where UserName = '{$username}'";
        $result = mysqli_query($con, $sql);
        $password = mysqli_fetch_assoc($result);
                
        return $password;
        
    }

    function updatepassword($username, $newpassword){
        $con = getConnection();
        $sql = "update login set Password = '{$newpassword}' where UserName = '{$username}'";
        $result = mysqli_query($con, $sql);
        
    }

?>