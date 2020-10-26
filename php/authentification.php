<?php

function connexion($_POST){
    if(isset($_POST['valider'])){
        if(isEmpty($_POST['email'])) {
            echo '<script type="text/javascript">'
            . 'alert("Veuillez saisir l\'adresse e-mail");'
            . '</script>';
        }
        if(isEmpty($_POST['motDePasse'])){
            echo '<script type="text/javascript">'
            . 'alert("Veuillez saisir le mot de passe");'
            . '</script>';
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