function searchName(){

    let username = document.getElementById('employeeusername').value;
    let xhttp = new XMLHttpRequest();

    xhttp.open('GET', '../view/registration.php?employeeusername='+username, true);
    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200){
            document.getElementById('forms').innerHTML = this.responseText;
        }
    }

    xhttp.send();
}