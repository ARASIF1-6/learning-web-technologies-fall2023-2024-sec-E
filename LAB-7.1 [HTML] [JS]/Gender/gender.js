function validgender(){
    let gender = document.getElementsByName("gender");
    let flag = false;
    for (let option of gender){
        if (option.checked){
            flag = true;
            break;
        }
    }
    if (flag){
        alert("option selected.");
    }
    else{
        alert("please select a option!");
    }
}