<?php
    //PHP dédié aux requêtes SQL !
    //Fonction qui crée une connexion à la bdd
    function creeConnexion(){
        try{
            $connexion = new PDO("jdbc:mysql://devbdd.iutmetz.univ-lorraine.fr", "topalovi1u_appli", "31900870");
            return $connexion;
        } catch(Exception $e) {
            die($e->getMessage());
        }
    }

    function testAuthentification($authentification){
        try {
            $requete = creeConnexion();
            $resultat = $requete->query('SELECT * FROM topalovi1u_projetweb.Redacteur WHERE adresseemail='.$authentification->getEmail().' AND motdepasse='.$authentification->getMotDePasse());
            if($resultat == null){
                return false;
            } else {
                return true;
            }
        } catch(Exception $e) {
            die($e->getMessage());
        }
    }


    //Test si une chaine est vide
    function isEmpty($str){
        $str = trim($str);
        if($str == ""){
            return true;
        } else {
            return false;
        }
    }
?>