<?php

    require_once('db.php');
    
    function login($username, $password){
        $con = getConnection();
        $sql = "select * from login where UserName='{$username}' and Password='{$password}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if(count($user) > 0){
            session_start();
            $_SESSION['user'] = $username;
            return $user;
        }else{
            return false;
        }
    }

    function addemployeeuser($user){
        $con = getConnection();
        $sql = "insert into login (UserName, UserType, Password) values('{$user[3]}', 'Employee', '{$user[4]}')";
        $result = mysqli_query($con, $sql);

    }

    function deleteemployeeuser($employeeusername){
        $con = getConnection();
        $sql = "delete from login where UserName  = '{$employeeusername}'";
        $result = mysqli_query($con, $sql);

    }

    function viewprofile($username){
        $con = getConnection();
        $sql = "select * from guestinfo where GuestUserName='{$username}'";
        $result = mysqli_query($con, $sql);
        $users = mysqli_fetch_assoc($result);
                
        return $users;
    }

    function employeeviewprofile($username){
        $con = getConnection();
        $sql = "select * from employeeinfo where EmployeeUserName='{$username}'";
        $result = mysqli_query($con, $sql);
        $users = mysqli_fetch_assoc($result);
                
        return $users;
    }

    function usersearch($username){
        $con = getConnection();
        $sql = "select * from login where UserName='{$username}'";
        $result = mysqli_query($con, $sql);
        $users = mysqli_fetch_assoc($result);
                
        return $users;
    }
    
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
?>