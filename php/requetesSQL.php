<?php
    //PHP dédié aux requêtes SQL !
    //Fonction qui crée une connexion à la bdd grace à PDO pour prévenir des SQL Injections 
    function creeConnexion(){
        try{
            $pdo = new PDO('mysql:host=devbdd.iutmetz.univ-lorraine.fr;port=3306;dbname=topalovi1u_projetweb', 'topalovi1u_appli', '31906060');
            return $pdo;
        } catch(Exception $e) {
            die($e->getMessage());
        }
    }

    //Verifie si les identifiants inséré sont dans la bdd pour authentifier le redacteur
    function testAuthentification($authentification){
        try {
            $pdo = creeConnexion();
            $email = $authentification->getEmail();
            $motDePasse = $authentification->getMotDePasse();
            $statement = $pdo->prepare("SELECT COUNT(*) AS nbLigne FROM topalovi1u_projetweb.Redacteur WHERE adressemail=? AND motdepasse = ?;");
            $statement->execute([$email, $motDePasse]);
            $nbLigne = 0;
            while($row = $statement->fetch(PDO::FETCH_ASSOC)){
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

    //Test si un comtpe est deja existant
    function compteExistant($email){
        $pdo = creeConnexion();
        $statement = $pdo->prepare("SELECT COUNT(*) AS nbLigne FROM Redacteur WHERE adressemail=?;");
        $statement->execute([$email]);
        $nbLigne = 0;
        while($row = $statement->fetch(PDO::FETCH_ASSOC)){
            $nbLigne = $row['nbLigne'];
        }
        if($nbLigne == 0){
            return false;
        } else {
            return true;
        }
    }

    //Insertion d'un nouveau redacteur dans la base de données
    function insertCompte($compte){
        $pdo = creeConnexion();
        $nom = $compte->getNom();
        $prenom = $compte->getPrenom();
        $email = $compte->getEmail();
        $motDePasse = $compte->getMotDePasse();
        $statement = $pdo->prepare("INSERT INTO Redacteur (nom, prenom, adressemail, motdepasse) VALUES (?, ?, ?, ?);");
        return $statement->execute([$nom,$prenom,$email,$motDePasse]);
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