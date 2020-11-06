<?php
include_once("ScriptTheme.php");
include_once("ScriptNews.php");
include_once("ScriptRedacteur.php");

/*###############################################   Connexion   ###############################################*/

//Fonction qui crée une connexion à la bdd grace à PDO pour prévenir des SQL Injections 
function creeConnexion(){
    try{
        $pdo = new PDO('mysql:host=devbdd.iutmetz.univ-lorraine.fr;port=3306;dbname=topalovi1u_projetweb', 'topalovi1u_appli', '31906060');
        return $pdo;
    } catch(Exception $e) {
        die($e->getMessage());
    }
}

/*###############################################   Redacteur   ###############################################*/

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

//Recupere l'id d'un redacteur grace a son email
function getIdRedacteurByEmail($email){
    $id = 0;
    $pdo = creeConnexion();
    $statement = $pdo->prepare("SELECT idredacteur FROM Redacteur WHERE adressemail=?;");
    $statement->execute([$email]);
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
        $id = $row['idredacteur'];
    }
    return $id;
}

function getRedacteurById($idredacteur){
    $pdo = creeConnexion();
    $statement = $pdo->prepare("SELECT * FROM Redacteur WHERE idredacteur=?;");
    $statement->execute([$idredacteur]);
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
        $idreacteur = $row['idredacteur'];
        $nom = $row['nom'];
        $prenom = $row['prenom'];
        $adressemail = $row['adressemail'];
        $motDePasse = $row['motdepasse'];
        $redacteur = new Redacteur($idredacteur, $nom, $prenom, $adressemail, $motDePasse);
    }
    return $redacteur;
}

/*###############################################   News   ###############################################*/

//Insertion d'une news dans la base de données
function insertNews($news){
    $pdo = creeConnexion();
    $idtheme = $news->getIdtheme();
    $titrenews = $news->getTitrenews();
    $datenews = $news->getDatenews();
    $textenews = $news->getTextenews();
    $idredacteur = $news->getIdredacteur();
    $statement = $pdo->prepare("INSERT INTO News (idtheme, titrenews, datenews, textenews, idredacteur) VALUES(?,?,?,?,?);");
    return $statement->execute([$idtheme, $titrenews, $datenews, $textenews, $idredacteur]);
}

//Recupere tous les themes
function getTheme(){ 
    $pdo = creeConnexion();
    $statement = $pdo->prepare("SELECT * FROM Theme;");
    $statement->execute();
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
        $idtheme = $row['idtheme'];
        $description = $row['description'];
        $theme = new Theme($idtheme, $description);
        $table[] = $theme;
    }
    
    return $table;
}

//Recupere tous les news
function getNews(){
    $pdo = creeConnexion();
    $statement = $pdo->prepare("SELECT * FROM News;");
    $statement->execute();
    while($row = $statement->fetch(PDO::FETCH_ASSOC)){
        $idnews = $row['idnews'];
        $idtheme = $row['idtheme'];
        $titrenews = $row['titrenews'];
        $datenews = $row['datenews'];
        $textenews = $row['textenews'];
        $idredacteur = $row['idredacteur'];
        $news = new News($idnews,$idtheme, $titrenews, $datenews, $textenews, $idredacteur);
        $table[] = $news;
    }
    return $table;
}

/*###############################################   Autre   ###############################################*/
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