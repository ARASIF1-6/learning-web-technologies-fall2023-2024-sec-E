function validRegistration(){
    let name = document.getElementById("name").value;
    let number = document.getElementById("namber").value;
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    

    // Name validation
    if(name == ''){
        alert('Please enter your name');
        return false;
    }

    // Mobile number validation
    else if(number == ''){
        alert('Please enter your mobile number');
        return false;
    }


    // username validation
    else if(username == ''){
        alert('Please enter your username');
        return false;
    }

    // password validation
    else if(password == ''){
        alert('Please enter your password');
        return false;
    }

    return true;

}