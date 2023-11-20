<?php

    include('../model/employeeModel.php');
    
    if(isset($_REQUEST['submit'])){
        $name = $_REQUEST['name'];
        $companyname = $_REQUEST['companyname'];
        $number = $_REQUEST['number'];
        $username = $_REQUEST['username'];
        $flag = 0;
        

        // Name validation
        if(empty($name)){
            echo "Please enter your name";
        }
        else{
                $flag = 1;
        }
            

        // Compane name validation
        if($flag == 1){
            if(empty($companyname)){
               echo "Please enter your company name";
            }
            else{
                $flag = 2;
            }
        }

        // Mobile number validation
        if($flag == 2){
            if(empty($number)){
              echo "Please enter your mobile number";
            }
            else{
                $flag = 3;
            }
        }


        if(!empty($name) && !empty($companyname) && !empty($number) && !empty($username) && $flag == 3){
            $user = [$name, $companyname, $number, $username];

            updateemployee($user);
            header('location: ../view/employees_management.php');
        }
    }
?>