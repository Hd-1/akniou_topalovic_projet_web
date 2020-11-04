<?php
include('requetesSQL.php');

class CreationCompte {
    private $idredacteur;
    private $nom;
    private $prenom;
    private $email;
    private $motDePasse;

    function __construct($idredacteur, $nom, $prenom, $email, $motDePasse){
        $this->setIdredacteur($idredacteur);
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setEmail($email);
        $this->setMotDePasse($motDePasse);
    }

    //Setters des attributs de CreationCompte
    function setIdredacteur($idredacteur){
        try{
            //Test si l'ID' inséré est vide
            if(isEmpty($idredacteur)){
                throw new Exception("l'ID est vide");
            } else {
                $this->email = trim($idredacteur);
            }
        } catch(Exception $e) {
            echo '<script type="text/javascript"> alert("'.$e->getMessage().'");</script>';
        }
    }

    function setNom($nom){
        try{
            //Test si le nom inséré est vide
            if(isEmpty($nom)){
                throw new Exception("Attention ! Le nom est vide");
            } else {
                $this->email = trim($nom);
            }
        } catch(Exception $e) {
            echo '<script type="text/javascript"> alert("'.$e->getMessage().'");</script>';
        }
    }

    function setPrenom($prenom){
        try{
            //Test si le prenom inséré est vide
            if(isEmpty($prenom)){
                throw new Exception("Attention ! Le prenom est vide");
            } else {
                $this->email = trim($prenom);
            }
        } catch(Exception $e) {
            echo '<script type="text/javascript"> alert("'.$e->getMessage().'");</script>';
        }
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

    //Getters des attributs de CreationCompte
    function getIdredacteur() {
        return $this->idredacteur;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getEmail() {
        return $this->email;
    }

    function getMotDePasse() {
        return $this->motDePasse;
    }
}

function creationCompte($nom, $prenom, $email, $motDePasse){
    try{
        //Création d'un objet CreationCompte pour effectuer la verification des champs dans le php
        $compte = new CreationCompte(1, $nom, $prenom, $email, $motDePasse);
        $test = insertCompte($compte);

        if($test == true){
            header("Location:http://localhost/projet/akniou_topalovic_projet_web/html/authentification.php");
            exit();
        }
    } catch(Error $e) {

    }
}