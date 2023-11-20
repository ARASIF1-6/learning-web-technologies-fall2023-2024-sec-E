<?php

    include('../model/employeeModel.php');
    include('../model/userModel.php');
    
    if(isset($_REQUEST['submit'])){
        $name = $_REQUEST['name'];
        $companyname = $_REQUEST['companyname'];
        $number = $_REQUEST['number'];
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        $user = [$name, $companyname, $number, $username, $password];

        addemployee($user);
        addemployeeuser($user);
        header('location: ../view/employees_management.php');

    }
?>