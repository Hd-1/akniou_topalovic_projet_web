<?php

function connexion($_POST){
    if(isset($_POST['valider'])){
        //Test si l'email ou le mot de passe est bien rempli.
        if(isEmpty($_POST['email'])) {
            echo '<script type="text/javascript">'
            . 'alert("Veuillez saisir l\'adresse e-mail");'
            . '</script>';
        } else if(isEmpty($_POST['motDePasse'])){
            echo '<script type="text/javascript">'
            . 'alert("Veuillez saisir le mot de passe");'
            . '</script>';
        } else {

        }
        
    }
}

function isEmpty($str){
    $str = trim($str);
    if($str == ""){
        return true;
    } else {
        return false;
    }
}

?>
