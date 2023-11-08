function validname(){
    let username = document.getElementById('name').value;

    if(username == ''){
        alert('Please enter your name!');
    }else if(getWordCount(username)>= 2){
        for(let i = 0; i < getWordCount(username); i++){
            let words = username[i];
            let length = words.length;
            let firstchar = length[0];
            for(let j = 0; j < length; j++){
                let char = length[j];

                if (char >= '0' && char <= '9'){
                    alert('number can not use within name');
                    break;
                }
                else if (char == '_' || char == '!' || char == '`' || char == '~' || char == '@' || char == '#' || char == '$' || char == '%' || char == '^' || char == '&' || char == '*' || char == '(' || char == ')' || char == '{' || char == '}' || char == '[' || char == ']' || char == '=' || char == '/' || char == '+' || char == '<' || char == '>' || char == ',' || char == '"' || char == ':' || char == ';' || char == '|'){
                    alert('This sign can not use within name');
                    break;
                }
            }
            if(firstchar == startsWith('A-Z')){
                alert('validated');
            }

        }
        
    }
}