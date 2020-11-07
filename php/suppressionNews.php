<?php
include_once("requetesSQL.php");
session_start();
$idnews = $_SESSION['idnews'];
deleteNews($idnews);
header("Location:http://localhost/projet/akniou_topalovic_projet_web/html/admin.php");
?>