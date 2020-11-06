<?php
function deconnexion(){
    session_unset();
    session_destroy();
    header("Location: http://localhost/projet/akniou_topalovic_projet_web/html/accueil.php");
}
?>