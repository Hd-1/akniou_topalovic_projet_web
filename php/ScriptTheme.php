<?php
include_once("requetesSQL.php");

class Theme{

    function __construct($idtheme, $description){
        $this->setIdtheme($idtheme);
        $this->setDescription($description);
    }

    function setIdtheme($idtheme){
        if(isEmpty($idtheme)==true){
            throw new Exception("L'id est vide");
        } else {
            $this->idtheme = $idtheme;
        }
    }

    function setDescription($description){
        if(isEmpty($description)==true){
            throw new Exception("La description est vide");
        } else {
            $this->description = $description;
        }
    }

    function getIdtheme(){
        return $this->idtheme;
    }

    function getDescription(){
        return $this->description;
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