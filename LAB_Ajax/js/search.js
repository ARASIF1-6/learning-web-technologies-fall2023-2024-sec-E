function ajax(){
    let username = document.getElementById('employeeusername').value;
    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', 'view/employees_management.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200){
            document.getElementById('table').innerHTML = this.responseText
        }
    }

    xhttp.send('uname='+username);
}