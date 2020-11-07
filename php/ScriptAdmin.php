<?php 

include_once('requetesSQL.php');
include_once('suppressionNews.php');

function testAdmin(){
    if(isset($_SESSION['login'])){
        $email = $_SESSION['login'];
        if($email != "admin@admin.com"){
            
        }
    }
}

?>