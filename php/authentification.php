<?php

use requetesSQL;
use function requetesSQL\testAuthentification as testAuthentification;

class Authentification {
    private $email;
    private $motDePasse;

    function __construct($email, $motDePasse) {
        $this->setEmail($email);
        $this->setMotDePasse($motDePasse);
    }

    function setEmail($email){
        //Test si l'adresse email insérée est vide
        if(isEmpty($email)){
            throw new Error("Attention ! L'email est vide");
        } else {
            $this->email = trim($email);
        }
    }

    function setMotDePasse($motDePasse){
        //Test si le mot de passe inséré est vide
        if(isEmpty($motDePasse)){
            throw new Error("Attention ! Le mot de passe est vide");
        } else {
            $this->motDePasse = trim($motDePasse);
        }
    }

    function getEmail() {
        return $this->email;
    }

    function getMotDePasse() {
        return $this->email;
    }
}

function connexion($_POST){
    try{
        $authentification = new Authentification($_POST['email'], $_POST['motDePasse']);
        $test = testAuthentification($authentification);
        if($test == false) {
            throw new Error("Attention ! L'identifiant ou le mot de passe est incorrect");
        } else {
            header("Location: redaction.html");
            exit();
        }
    } catch(Exception $e) {
        echo 
            '<script language"javascript" type="text/javascript">
                alert('.$e->getMessage().');
            </script>';
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
