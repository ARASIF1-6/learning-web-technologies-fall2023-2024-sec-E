<?php
    include('../model/employeeModel.php');
    if(isset($_REQUEST['username'])){
        $username = $_REQUEST['username'];
        deleteemployee($username);
        header('location: ../view/registration.php');
    }
?>