function validname(){
    let username = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let gender = document.getElementsByName("gender");
    let date = document.getElementById('date').value;
    let month = document.getElementById('month').value;
    let year = document.getElementById('year').value;
    let degree = document.getElementsByName("degree");
    let picture = document.getElementById('image');
    let blood = document.getElementById('blood').value;
    let flagg = 0;

    // Name validation
    if(username == ''){
        alert('Please enter your name!');
    }else if(getWordCount(username)>= 2){
        for(let i = 0; i < getWordCount(username); i++){
            let words = username[i];
            let length = words.length;
            let firstchar = length[0];
            for(let j = 0; j < length; j++){
                let char = length[j];

                if (char >= '0' && char <= '9'){
                    alert('number can not use within name');
                    break;
                }
                else if (char == '_' || char == '!' || char == '`' || char == '~' || char == '@' || char == '#' || char == '$' || char == '%' || char == '^' || char == '&' || char == '*' || char == '(' || char == ')' || char == '{' || char == '}' || char == '[' || char == ']' || char == '=' || char == '/' || char == '+' || char == '<' || char == '>' || char == ',' || char == '"' || char == ':' || char == ';' || char == '|'){
                    alert('This sign can not use within name');
                    break;
                }
            }
            if(firstchar == startsWith('A-Z')){
                alert('validated');
            }

        }
        
    }

    // Email validation
    if(email == ''){
        alert('please enter your email address');
    }else{
        for(let i = 0; i < email.length; i++){
            let char = email[i];

            if (char == '@'){
                let emailParts = email.split('@');
                let emailname = emailParts[0];
                let emaildomain = emailParts[1];
                if (emaildomain.length !== 0 && emailname.length !== 0){
                    for (let j = 0; j < emaildomain.length; j++){
                        let domainchar = emaildomain[j];
                        if (domainchar == '.'){
                            alert("Valid Email");
                            flagg = 1;
                            break;
                        }
                    }
                } 
                
              break;  
            }
                
        }
    }

    // Gender validation
    if(flagg == 1){
        let flag = false;
        for (let option of gender){
            if (option.checked){
                flag = true;
                break;
            }
        }
        if (flag){
            alert("option selected.");
            flagg = 2;
        }
        else{
            alert("please select a option!");
        }
    }

    // Date of Birth validation
    if(flagg == 2){
        if (parseInt(date) > 0 && parseInt(date) <= 31){
            if (parseInt(month) > 0 && parseInt(month) <= 12){
                if (parseInt(year) > 1900 && parseInt(year) <= 2024){
                    alert("Valid");
                    flagg = 3;
                }
            }
        }
        else {
            alert("Please enter a date of Birth");
        }
    }

    // Blood Group validation
    if(flagg == 3){
        if(blood == ''){
            alert('Please choose your blood group');
        }
        else{
            alert('blood group selected');
            flagg = 4;
        }

    }

    // Degree validation
    if(flagg == 4){
        let flags = false;

        for (let option of degree){
            if (option.checked){
                flags = true;
                break;
            }
        }
        if (flags){
            alert("option selected.");
            flagg = 5;
        }
        else{
            alert("please select a option!");
        }
    }

    // Picture file validation
    if(flagg == 5){
        if(picture != ''){
            if (picture.files.length > 0) {
                alert("user id and picture has been selected.");
            }
        }
    }
}