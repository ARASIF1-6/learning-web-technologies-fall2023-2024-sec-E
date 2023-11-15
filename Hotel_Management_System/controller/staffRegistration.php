<?php

    include('../model/staffModel.php');
    include('../model/salarysheetModel.php');
    $userId = AutoIdGenerate();
    
    if(isset($_REQUEST['submit'])){
        $userid = $userId;
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $number = $_REQUEST['number'];
        $gender = $_REQUEST['gender'];
        $address = $_REQUEST['address'];
        $usertype = $_REQUEST['usertype'];
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $confirmpassword = $_REQUEST['confirmpassword'];
        $flag = 0;
        

        // Name validation
        if(empty($name)){
            echo "Please enter your name";
        }
        else if(str_word_count("$name") <= 1){
            echo "Please write your name with atleast 2 words";
        }else{
            for ($i = 0; $i < strlen($name); $i++) {
                $char = $name[$i];
    
                if($char >= '0' && $char <= '9' || $char == '_' || $char == '!' || $char == '`' || $char == '~' || $char == '@' || $char == '#' || $char == '$' || $char == '%' || $char == '^' || $char == '&' || $char == '*' || $char == '(' || $char == ')' || $char == '{' || $char == '}' || $char == '[' || $char == ']' || $char == '=' || $char == '/' || $char == '+' || $char == '<' || $char == '>' || $char == ',' || $char == '"' || $char == ':' || $char == ';' || $char == '|' || $char == '?'){
                    echo "Name can not contain numaric numbers & special characters just use . & -";
                    $flag = 1;
                    break;
                }
            }
            if($flag != 1){
                $flag = 2;
            }
        }
            

        // Email validation
        if($flag == 2){
            if(empty($email)){
               echo "Please enter your email address";
            }
            else if(filter_var($email, FILTER_VALIDATE_EMAIL)){
               $flag = 3;
            }else{
               echo "email address is not valid.";
            }
        }

        // Mobile number validation
        if($flag == 3){
            if(empty($number)){
              echo "Please enter your mobile number";
            }
            else if(strlen($number) != 11){
               echo "Mobile number must be 11 digit.";
            }
            else if($number[0] != '0' && $number[1] != '1'){
                echo "Mobile number start with 0 & 1.";
            }
            else{
                for ($i = 0; $i < strlen($number); $i++){
                    $char = $number[$i];
                    if($char >= '0' && $char <= '9'){
                       $flag = 4;
                    }else{
                       echo "Invalid Phone Number.";
                       break;
                    }
                }
            }
        }

        // Gender validation
        if($flag == 4){
            if(!isset($gender)){
               echo "Please select your gender.";
            }else{
                $flag = 5;
            }
        }

        // Address validation
        if($flag == 5){
            if(!isset($address)){
               echo "Please write your address.";
            }else{
                $flag = 6;
            }
        }

        // Usertype validation
        if($flag == 6){
            if(!isset($usertype)){
               echo "Please select your usertype.";
            }else{
               $flag = 7;
            }
        }

        // Username validation
        if($flag == 7){
            if(empty($username)){
               echo "Please enter your username";
            }
            else{
                for ($i = 0; $i < strlen($username); $i++) {
                    $char = $username[$i];
    
                    if(!ctype_alnum($char)){
                      echo "Username must contain alpha numaric characters";
                      $flag = 8;
                      break;
                    }
                }
                if($flag != 8){
                    $flag = 9;
                }
            }
        }

        // Password validation
        if($flag == 9){
            if(empty($password)){
               echo "Please enter your password";
            }
            else if(strlen($password) < 8){
               echo "Password must not be less than eight characters.";
            }else{
               $flagg = 0;
               if($password[0] >= '0' && $password[0] <= '9' || $password[0] >= 'A' && $password[0] <= 'Z' || $password[0] >= 'a' && $password[0] <= 'z'){
                    for ($i = 1; $i < strlen($password); $i++){
                        $char = $password[$i];
            
                        if($char == '_' || $char == '!' || $char == '`' || $char == '~' || $char == '@' || $char == '#' || $char == '$' || $char == '%' || $char == '^' || $char == '&' || $char == '*' || $char == '(' || $char == ')' || $char == '{' || $char == '}' || $char == '[' || $char == ']' || $char == '=' || $char == '/' || $char == '+' || $char == '<' || $char == '>' || $char == ',' || $char == '"' || $char == ':' || $char == ';' || $char == '|' || $char == '.' || $char == '-' || $char == '?'){
                           $flagg = 1;
                           break;
                        }
                    }
                }else{
                   echo "Password write start with letter or numeric characters.";
                }
            
                if($flagg != 1){
                    echo "Password must be with atleast one special characters.";  
                }else{
                   $flag = 10;
                }
            }
        }

        // Confirm password validation
        if($flag == 10){
            if($password != $confirmpassword){
               echo "Password do not match.";
            }else{
                $flag = 11;
            }
        }


        if(!empty($name) && !empty($email) && !empty($number) && !empty($gender) && !empty($address) && !empty($usertype) && !empty($username) && !empty($password) && !empty($confirmpassword) && $flag == 11){

            $checkstaff = staffsearch($username);
            $checkstaffuser = searchStaffUser($username);

            if($username == $checkstaff['StaffUserName']){
               echo "Please give unique username.";
            }else if($username == $checkstaffuser['UserName']){
                echo "Please give unique username.";
            }else{
                $user = [$userid, $name, $email, $number, $address, $usertype, $gender, $username, $password];

                addstaff($user);
                addstaffuser($user);
                addsalarysheet($user);
                header('location: ../view/staffs_management.php');
            }
        }
    }
?>