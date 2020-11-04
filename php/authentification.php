<?php
include('requetesSQL.php');

class Authentification {
    private $email;
    private $motDePasse;

    function __construct($email, $motDePasse){
        $this->setEmail($email);
        $this->setMotDePasse($motDePasse);
    }

    function setEmail($email){
        try{
            //Test si l'adresse email insérée est vide
            if(isEmpty($email)){
                throw new Exception("Attention ! L'email est vide");
            } else {
                $this->email = trim($email);
            }
        } catch(Exception $e) {
            echo '<script type="text/javascript"> alert("'.$e->getMessage().'");</script>';
        }

    }

    function setMotDePasse($motDePasse){
        try{
            //Test si le mot de passe inséré est vide
            if(isEmpty($motDePasse)){
                throw new Error("Attention ! Le mot de passe est vide");
            } else {
                $this->motDePasse = trim($motDePasse);
            }
        } catch(Exception $e) {
            echo '<script type="text/javascript"> alert("'.$e->getMessage().'");</script>';
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
        //Création d'un objet authentification pour effectuer la verification des champs dans le php
        $authentification = new Authentification($email, $motDePasse);
        $test = testAuthentification($authentification);
        if($test == true){
            header("Location:http://localhost/projet/akniou_topalovic_projet_web/html/redaction.php");
            exit();
        } else {
            throw new Error("Attention ! L'adresse email ou le mot de passe est incorrect");
        }
    } catch(Error $e) {
        echo 
            '<script language"javascript" type="text/javascript">
                alert("'.$e->getMessage().'");
            </script>';
    }
}
