<?php
function testBoutonDeco() {
    session_start();
    if (isset($_SESSION['login']) && isset($_SESSION['pass'])){
        echo '<li><a href="authentification.php" class="souligne elmtMenu">Deconnexion</a></li>';
    } else {
        echo '<li><a href="authentification.php" class="souligne elmtMenu">Connexion</a></li>';
    }
}
?>