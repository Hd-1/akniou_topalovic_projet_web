<?php
    //PHP dédié aux requêtes SQL !
    //Classe connexion pour passer par un objet PDO
    class Connexion{
        var $url;
        var $identifiant;
        var $motDePasse;

        function __construct($url,$identifiant,$motDePasse){
            $this->setUrl($url);
            $this->setIdentifiant($identifiant);
            $this->setMotDePasse($motDePasse);
        }

        function setUrl($url){
            if(isEmpty($url)){
                throw new Error("L'URL est vide");
            } else {
                $this->url = $url;
            }
        }

        function setIdentifiant($identifiant){
            if(isEmpty($identifiant)){
                throw new Error("L'identifiant est vide");
            } else {
                $this->identifiant = $identifiant;
            }
        }

        function setMotDePasse($motDePasse){
            if(isEmpty($motDePasse)){
                throw new Error("Le mot de passe est vide");
            } else {
                $this->motDePasse = $motDePasse;
            }
        }
    }

    //Test si 
    function isEmpty($str){
        $str = trim($str);
        if($str == ""){
            return true;
        } else {
            return false;
        }
    }
?>