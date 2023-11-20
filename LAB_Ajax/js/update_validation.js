function validUpdate(){
        let name = document.getElementByName("name").value;
        let companyname = document.getElementByName("companyname").value;
        let number = document.getElementByName("namber").value;
        let username = document.getElementByName("username").value;
        let flag = 0;
        

        // Name validation
        if(name == ''){
            alert('Please enter your name');
        }
        else{
                flag = 1;
        }
            

        // Compane name validation
        if(flag == 1){
            if(companyname == ''){
               alert('Please enter your company name');
            }
            else{
                flag = 2;
            }
        }

        // Mobile number validation
        if(flag == 2){
            if(number == ''){
              alert('Please enter your mobile number');
            }
            else{
                flag = 3;
            }
        }


        if(name != '' && companyname != '' && number != '' && username != '' && flag == 3){
            window.location.href = 'controller/EmployeeUpdateCheck.php';
        }
}