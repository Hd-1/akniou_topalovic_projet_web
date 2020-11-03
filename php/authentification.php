<?php
include('requetesSQL.php');

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
        return $this->motDePasse;
    }
}

function authentification($email, $motDePasse){
    try{
        $authentification = new Authentification($email, $motDePasse);
        $test = testAuthentification($authentification);
        if($test == true){
            echo 
            '<script language"javascript" type="text/javascript">
                alert("Connexion établie !");
            </script>';
        } else {
            throw new Error("Attention ! L'adresse email ou le mot de passe est incorrect");
        }

    } catch(Error $e) {
        echo 
            '<script language"javascript" type="text/javascript">
                alert('.$e->getMessage().');
            </script>';
    }
}
?>