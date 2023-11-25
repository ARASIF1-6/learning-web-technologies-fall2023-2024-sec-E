function validRegistrationCheck(){
        
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let number = document.getElementById("number").value;
    let gender = document.getElementById("gender").value;
    let username = document.getElementById("username").value;
    let password = document.getElementById("paswword").value;
    let confirmpassword = document.getElementById("confirmpassword").value;
    let flag = 0;

        // Name validation
        if(name == ''){
                alert('Please enter your name');
            }else{
                for (let i = 0; i < name.length; i++){
                    let char = name[i];
        
                    if(char >= '0' && char <= '9' || char == '_' || char == '!' || char == '`' || char == '~' || char == '@' || char == '#' || char == '$' || char == '%' || char == '^' || char == '&' || char == '*' || char == '(' || char == ')' || char == '{' || char == '}' || char == '[' || char == ']' || char == '=' || char == '/' || char == '+' || char == '<' || char == '>' || char == ',' || char == '"' || char == ':' || char == ';' || char == '|' || char == '?'){
                        alert('Name can not contain numaric numbers & special characters just use . & -');
                        flag = 1;
                        break;
                    }
                }
                if(flag != 1){
                    flag = 2;
                }
            }

        // Email validation
        if(flag == 2){
            if(email = ''){
               alert('Please enter your email address');
            }
            else{
               flag = 3;
            }
        }

        // Mobile number validation
        if(flag == 3){
            if(number = ''){
              alert('Please enter your mobile number');
            }
            else if(number.length != 11){
               alert('Mobile number must be 11 digit.');
            }
            else if(number[0] != '0' && number[1] != '1'){
                alert('Mobile number start with 0 & 1.');
            }
            else{
                for (lrti = 0; i < number.length; i++){
                    let char = number[i];
                    if(char >= '0' && char <= '9'){
                       flag = 4;
                    }else{
                       alert('Invalid Phone Number.');
                       break;
                    }
                }
            }
        }

        // Gender validation
        if(flag == 4){
            if(!isset($gender)){
               alert('Please select your gender.');
            }else{
                flag = 5;
            }
        }

        // Username validation
        if(flag == 5){
            if(empty($username)){
               alert('Please enter your username');
            }
            else{
                for (let i = 0; i < username.length; i++) {
                    let char = username[i];
    
                    if(!ctype_alnum(char)){
                      alert('Username must contain alpha numaric characters');
                      flag = 6;
                      break;
                    }
                }
                if(flag != 6){
                    flag = 7;
                }
            }
        }

        // Password validation
        if(flag == 7){
            if(password = ''){
               alert('Please enter your password');
            }
            else if(password.length < 8){
               alert('Password must not be less than eight characters.');
            }else{
               let flagg = 0;
               if(password[0] >= '0' && password[0] <= '9' || password[0] >= 'A' && password[0] <= 'Z' || password[0] >= 'a' && password[0] <= 'z'){
                    for (let i = 1; i < password.length; i++){
                        let char = password[i];
            
                        if(char == '_' || char == '!' || char == '`' || char == '~' || char == '@' || char == '#' || char == '$' || char == '%' || char == '^' || char == '&' || char == '*' || char == '(' || char == ')' || char == '{' || char == '}' || char == '[' || char == ']' || char == '=' || char == '/' ||char == '+' || char == '<' || char == '>' || char == ',' || char == '"' || char == ':' || char == ';' || char == '|' || char == '.' || char == '-' || char == '?'){
                           flagg = 1;
                           break;
                        }
                    }
                }else{
                   alert('Password write start with letter or numeric characters.');
                }
            
                if(flagg != 1){
                    alert('Password must be with atleast one special characters.');  
                }else{
                   flag = 8;
                }
            }
        }

        // Confirm password validation
        if(flag == 8){
            if(password != confirmpassword){
               alert('Password do not match.');
            }else{
                flag = 9;
            }
        }

        if(name == "" && email == "" && number == "" && gender == "" && username == "" && password == "" && confirmpassword == "" && flag == 9){ 

            return true;

        }
        else{

            return false;
        }

}