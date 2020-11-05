function valider(){
    var regexEmail = /^\w+[\+\.\w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)$/i;
    if(!regexEmail.test(email.value)){
        alert("Attention ! L'adresse mail n'est pas correct");
        return false;
    }
    return true;
}