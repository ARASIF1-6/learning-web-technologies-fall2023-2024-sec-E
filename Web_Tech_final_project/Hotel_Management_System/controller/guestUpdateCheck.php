<?php

    include('../model/guestModel.php');
    
    if(isset($_REQUEST['submit'])){
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $number = $_REQUEST['number'];
        $gender = $_REQUEST['gender'];
        $username = $_REQUEST['username'];
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

        if(!empty($name) && !empty($email) && !empty($number) && !empty($gender) && $flag == 5){
            $user = [$name, $email, $number, $gender, $username];

            updateguest($user);
            header('location: ../view/guests_profile_management.php');
        }
    }
?>