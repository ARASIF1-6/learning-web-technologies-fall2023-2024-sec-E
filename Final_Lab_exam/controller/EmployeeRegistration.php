<?php

    include('../model/employeeModel.php');
    include('../model/userModel.php');
    
    if(isset($_REQUEST['submit'])){
        $name = $_REQUEST['name'];
        $number = $_REQUEST['number'];
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        $user = [$name, $number, $username, $password];

        addemployee($user);
        addemployeeuser($user);
        header('location: ../view/registration.php');

    }
?>