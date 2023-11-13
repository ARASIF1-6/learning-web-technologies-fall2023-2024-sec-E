function validdateOfBirth(){
    let date = document.getElementById('date').value;
    let month = document.getElementById('month').value;
    let year = document.getElementById('year').value;

    if (parseInt(date) > 0 && parseInt(date) <= 31){
        if (parseInt(month) > 0 && parseInt(month) <= 12){
            if (parseInt(year) > 1900 && parseInt(year) <= 2024){
                alert("Valid");
            }
        }
    }
    else {
        alert("Please enter a date of Birth");
    }
}