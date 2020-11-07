<?php
include_once("ScriptNews.php");

function modifierNews($idnews, $idtheme, $titrenews, $datenews, $textenews, $idredacteur){
    $news = new News($idnews,$idtheme, $titrenews, $datenews, $textenews, $idredacteur);
    updateNews($news);
}


?>