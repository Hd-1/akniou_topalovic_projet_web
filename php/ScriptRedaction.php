<?php

include_once('requetesSQL.php');
include_once('ScriptTheme.php');
include_once('ScriptNews.php');

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
?>