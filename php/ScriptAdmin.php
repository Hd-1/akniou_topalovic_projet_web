<?php 

function testAdmin(){
    if(isset($_SESSION['login'])){
        $email = $_SESSION['login'];
        if($email != "admin@admin.com"){
            header("Location:http://localhost/projet/akniou_topalovic_projet_web/php/suppressionNews.php");
        }
    }
}

?>