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

    //Verifie si les identifiants inséré sont dans la bdd pour authentifier le redacteur
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

    //Insertion d'un nouveau redacteur dans la base de données
    function insertCompte($compte){
        $statement = creeConnexion();
        $requete = "INSERT INTO 'topalovi1u_projetweb'.'Redacteur' ('nom', 'prenom', 'adressemail', 'motdepasse') VALUES (?, ?, ?, ?);";
        $preparedStatement = $statement->prepare($requete);
            $preparedStatement->bindValue(1, $compte->getNom());
            $preparedStatement->bindValue(2, $compte->getPrenom());
            $preparedStatement->bindValue(3, $compte->getEmail());
            $preparedStatement->bindValue(4, $compte->getMotDePasse());
        $resultat = $preparedStatement->execute();
        return $resultat;
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