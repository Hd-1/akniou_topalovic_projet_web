<?php

include_once('requetesSQL.php');
include_once('ScriptTheme.php');
include_once('ScriptNews.php');

function creeNews($idtheme, $titrenews, $datenews, $textenews){
    try{
        $email = $_SESSION['login'];
        $idredacteur = getIdRedacteurByEmail($email);
        $news = new News(1,$idtheme, $titrenews, $datenews, $textenews, $idredacteur);
        insertNews($news);
    } catch(Exception $e) {
        echo '<script type="text/javascript"> alert("'.$e->getMessage().'");</script>';
    }
}

function testSession() {
    session_start();
    if (!isset($_SESSION['login']) && !isset($_SESSION['pass'])){
        header("Location:http://localhost/projet/akniou_topalovic_projet_web/html/authentification.php") ;
    } else {
        echo "<script src='../javascript/ScriptAuthentification.js' type='text/javascript'> setBoutonDeco(".$_SESSION['etat']." </script>";
    }
}

function testBoutonDeco() {
    if (isset($_SESSION['login']) && isset($_SESSION['pass'])){
        echo '<li><a href="authentification.php" class="souligne elmtMenu">Deconnexion</a></li>';
    } else {
        echo '<li><a href="authentification.php" class="souligne elmtMenu">Connexion</a></li>';
    }
}

function affichageTheme(){
    $table = getTheme();
    foreach($table as $theme){
        $idtheme = $theme->getIdtheme();
        $description = $theme->getDescription();
        echo "<option value='".$idtheme."'>".$description."</option>";
    }
}
?>