function validbloodgroup(){
    let blood = document.getElementById('blood').value;

    if(blood == ''){
        alert('Please choose your blood group');
    }
    else{
        alert('blood group selected');
    }
}