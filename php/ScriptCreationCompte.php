<?php
include_once('requetesSQL.php');
include_once('ScriptRedacteur.php');

function testEmail($email, $confirmationEmail){
    if(trim($email) == trim($confirmationEmail)){
        return true;
    } else {
        return false;
    }
}

//confirmation de l'adresse e-mail
function testCompteExistant($email){
    if(!compteExistant($email)){
        return true;
    } else {
        return false;
    }
}

//Confirmation du mot de passe
function testMotDePasse($motDePasse, $confirmationMotDePasse){
    if(trim($motDePasse) == trim($confirmationMotDePasse)){
        return true;
    } else {
        return false;
    }
}

function creationCompte($nom, $prenom, $email, $confirmationEmail, $motDePasse, $confirmationMotDePasse){
    //Création d'un objet CreationCompte pour effectuer la verification des champs dans le php
    try{
        $testEmail = testEmail($email, $confirmationEmail);
        $testMotDePasse = testMotDePasse($motDePasse, $confirmationMotDePasse);
        if($testEmail == true && $testMotDePasse == true){
            if(testCompteExistant($email)){
                $compte = new Redacteur(1, $nom, $prenom, $email, $motDePasse);
                $test = insertCompte($compte);
                if($test == true){
                    header("Location:http://localhost/projet/akniou_topalovic_projet_web/html/authentification.php");
                    exit();
                }
            } else {
                throw new Exception("Un compte est déjà associé à cette adresse e-mail !");
            }
        } else {
            throw new Exception("L'adresse e-mail ou le mot de passe ne sont pas identique");
        }
    } catch(Exception $e) {
        echo '<script type="text/javascript"> alert("'.$e->getMessage().'");</script>';
    }
}

function testSession() {
    $_SESSION['url']="../html/authentification.php";
    if (isset($_SESSION['login']) && isset($_SESSION['pass'])){
        echo "<script src='../javascript/ScriptAuthentification.js' type='text/javascript'> setBoutonDeco(".$_SESSION['etat']." </script>";
        header("Location:http://localhost/projet/akniou_topalovic_projet_web/html/deconnexion.php") ;
    }
}

function testBoutonDeco() {
    if (isset($_SESSION['login']) && isset($_SESSION['pass'])){
        echo '<a href="authentification.php" class="souligne elmtMenu">Deconnexion</a>';
    } else {
        echo '<a href="authentification.php" class="souligne elmtMenu">Connexion</a>';
    }
}
?>