<?php
include_once("ScriptNews.php");

function modifierNews($idnews, $idtheme, $titrenews, $datenews, $textenews, $idredacteur){
    try{    
        $news = new News($idnews,$idtheme, $titrenews, $datenews, $textenews, $idredacteur);
        if(!updateNews($news)){
            throw new Exception("Attention ! Impossible de modifier cet article");
        }
    } catch(Exception $e) {
        echo '<script type="text/javascript"> alert("'.$e->getMessage().'");</script>';
    }

}


?>