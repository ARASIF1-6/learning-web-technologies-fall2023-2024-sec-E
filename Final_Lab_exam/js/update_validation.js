function validUpdate(){
        let name = document.getElementByName("name").value;
        let number = document.getElementByName("namber").value;
        

        // Name validation
        if(name == ''){
            alert('Please enter your name');
            return false;
        }

        // Mobile number validation
        if(number == ''){
            alert('Please enter your mobile number');
            return false;
        }
        
        return true;
}