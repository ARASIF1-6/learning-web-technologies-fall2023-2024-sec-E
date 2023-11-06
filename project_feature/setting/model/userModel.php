<?php

    require_once('db.php');
    session_start();
    function login($username, $password){
        $con = getConnection();
        $sql = "select * from login where UserName='{$username}' and Password='{$password}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if(count($user) > 0){
            $_SESSION['user'] = $username;
            return true;
        }else{
            return false;
        }
    }

    // setting 
    function getalluser(){
        $con = getConnection();
        $sql = "select * from login";
        $result = mysqli_query($con, $sql);
        $users = [];
        
        while($user = mysqli_fetch_assoc($result)){
            array_push($users, $user);
        }
        
        return $users;
        
    }

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