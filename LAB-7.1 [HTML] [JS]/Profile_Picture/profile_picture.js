function validprofilepicture(){
    let userId = document.getElementById('userId').value;
    let picture = document.getElementById('image');

    if(userId == ''){
        alert("user id or picture must be selected.");
    }
    else if(parseInt(userId) > 0 && picture != ''){
        if (picture.files.length > 0) {
            alert("user id and picture has been selected.");
        }
    }
}