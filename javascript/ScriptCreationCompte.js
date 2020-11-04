function Valider(){
    var regexNom = /^[a-z]+[\-']?[[a-z]+[\-']?]*[a-z]+$/;
    var regexPrenom = /^[a-z]+[\-']?[[a-z]+[\-']?]*[a-z]+$/;
    var regexEmail = /^\w+[\+\.\w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)$/i;
    var regexMotDePasse= /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$/;
    if(!regexNom.test(nom.value)){
        alert("Attention ! Le nom n'est pas correct");
        return false;
    } else if(!regexPrenom.test(prenom.value)) { 
        alert("Attention ! Le prénom n'est pas correct");
        return false;
    } else if(!regexEmail.test(email.value)){
        alert("Attention ! L'adresse mail n'est pas correct");
        return false;
    } else if(!regexMotDePasse.test(motDePasse.value)) {
        alert("Attention ! Le mot de passe doit contenir 8 caractères:\n minuscules\n majuscules\n chiffres\n caractères spéciaux");
        return false;
    }
    return true;
}