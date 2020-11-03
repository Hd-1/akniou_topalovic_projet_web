<?php
    //PHP dédié aux requêtes SQL !
    //Fonction qui crée une connexion à la bdd
    function creeConnexion(){
        try{
            $connexion = new PDO('mysql:host=devbdd.iutmetz.univ-lorraine.fr;port=3306;dbname=topalovi1u_projetweb', 'topalovi1u_appli', '31906060');
            return $connexion;
        } catch(Exception $e) {
            die($e->getMessage());
        }
    }

    function testAuthentification($authentification){
        try {
            $statement = creeConnexion();
            $requete = "SELECT COUNT(*) AS nbLigne FROM topalovi1u_projetweb.Redacteur WHERE adressemail='".$authentification->getEmail()."' AND motdepasse = '".$authentification->getMotDePasse()."'";
            $resultat = $statement->query($requete);
            $nbLigne = 0;
            while($row = $resultat->fetch(PDO::FETCH_ASSOC)){
                $nbLigne = $row['nbLigne'];
            }
            if($nbLigne == 0){
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