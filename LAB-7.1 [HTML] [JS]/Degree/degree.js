function validdegree(){
    let degree = document.getElementsByName("degree");
    let flag = false;

    for (let option of degree){
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