<?php
include_once('requetesSQL.php');
include_once('ScriptTheme.php');
include_once('ScriptNews.php');

function testSession() {
    if (!isset($_SESSION['login']) && !isset($_SESSION['pass'])){
        header("Location:http://localhost/projet/akniou_topalovic_projet_web/html/authentification.php") ;
    } else {
        echo "<script src='../javascript/ScriptAuthentification.js' type='text/javascript'> setBoutonDeco(".$_SESSION['etat']." </script>";
    }
}

?>