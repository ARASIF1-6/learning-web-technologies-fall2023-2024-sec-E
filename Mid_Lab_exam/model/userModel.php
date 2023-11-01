<?php
    session_start();
    require_once('db.php');
    function login($userid, $password){
        $con = getConnection();
        $sql = "select * from login where Id='{$userid}' and Password='{$password}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if(count($user) > 0){
            $_SESSION['user'] = $userid;
            return $user;
        }else{
            return false;
        }
    }

    function signup($user){
        $con = getConnection();
        $sql = "insert into registration (Id, Name, UserType) values ('{$user[0]}', '{$user[1]}', '{$user[3]}')";
        $result = mysqli_query($con, $sql);

    }

    function user($user){
        $con = getConnection();
        $sql = "insert into login (Id, Password, UserType) values ('{$user[0]}', '{$user[2]}', '{$user[3]}')";
        $result = mysqli_query($con, $sql);

    }

    function getAllUser(){
        $con = getConnection();
        $sql = "select * from registration";
        $result = mysqli_query($con, $sql);
        $users = [];
        
        while($user = mysqli_fetch_assoc($result)){
            array_push($users, $user);
        }
        
        return $users;
    }

    function viewprofile($userid){
        $con = getConnection();
        $sql = "select * from registration where Id = '{$userid}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);

        return $user;

    }


?>