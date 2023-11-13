function validemail(){
    let email = document.getElementById('email').value;

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
                            break;
                        }
                    }
                } 
                
              break;  
            }
                
        }
    }
}