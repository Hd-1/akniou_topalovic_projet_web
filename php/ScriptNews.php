<?php

include_once('requetesSQL.php');

class News{

    private $idnews;
    private $idtheme;
    private $titrenews;
    private $datenews;
    private $textenews;
    private $idredacteur;

    function __construct($idnews,$idtheme, $titrenews, $datenews, $textenews, $idredacteur){
        $this->setIdnews($idnews);
        $this->setIdtheme($idtheme);
        $this->setTitrenews($titrenews);
        $this->setDatenews($datenews);
        $this->setTextenews($textenews);
        $this->setIdredacteur($idredacteur);
    }

    function setIdnews($idnews){
        try{
            //Test si l'ID inséré est vide
            if(isEmpty($idnews)){
                throw new Exception("L'ID est vide");
            } else {
                $this->idnews = trim($idnews);
            }
        } catch(Exception $e) {
            echo '<script type="text/javascript"> alert("'.$e->getMessage().'");</script>';
        }       
    }

    function setIdtheme($idtheme){
        try{
            //Test si l'ID du theme inséré est vide
            if(isEmpty($idtheme)){
                throw new Exception("Aucun theme sélectionné");
            } else {
                $this->idtheme = trim($idtheme);
            }
        } catch(Exception $e) {
            echo '<script type="text/javascript"> alert("'.$e->getMessage().'");</script>';
        }       
    }

    function setTitrenews($titrenews){
        try{
            //Test si le titre inséré est vide
            if(isEmpty($titrenews)){
                throw new Exception("Le titre est vide");
            } else {
                $this->titrenews = trim($titrenews);
            }
        } catch(Exception $e) {
            echo '<script type="text/javascript"> alert("'.$e->getMessage().'");</script>';
        }       
    }

    function setDatenews($datenews){
        try{
            //Test si la date inséré est vide
            if(isEmpty($datenews)){
                throw new Exception("La date est vide");
            } else {
                $this->datenews = trim($datenews);
            }
        } catch(Exception $e) {
            echo '<script type="text/javascript"> alert("'.$e->getMessage().'");</script>';
        }       
    }

    function setTextenews($textenews){
        try{
            //Test si le texte inséré est vide
            if(isEmpty($textenews)){
                throw new Exception("Le texte est vide");
            } else {
                $this->textenews = trim($textenews);
            }
        } catch(Exception $e) {
            echo '<script type="text/javascript"> alert("'.$e->getMessage().'");</script>';
        }       
    }

    function setIdredacteur($idredacteur){
        try{
            //Test si l'ID du redacteur inséré est vide
            if(isEmpty($idredacteur)){
                throw new Exception("l'ID du redacteur est vide");
            } else {
                $this->idredacteur = trim($idredacteur);
            }
        } catch(Exception $e) {
            echo '<script type="text/javascript"> alert("'.$e->getMessage().'");</script>';
        }       
    }

    //Getters des attributs du redacteur
    function getIdnews(){
        return $this->idnews;
    }

    function getIdtheme(){
        return $this->idtheme;
    }

    function getTitrenews(){
        return $this->titrenews;
    }

    function getDatenews(){
        return $this->datenews;
    }

    function getTextenews(){
        return $this->textenews;
    }

    function getIdredacteur(){
        return $this->idredacteur;
    }
}

function creeNews($idtheme, $titrenews, $datenews, $textenews){
    try{
        $email = $_SESSION['login'];
        $idredacteur = getIdRedacteurByEmail($email);
        $news = new News(1,$idtheme, $titrenews, $datenews, $textenews, $idredacteur);
        insertNews($news);
    } catch(Exception $e) {
        echo '<script type="text/javascript"> alert("'.$e->getMessage().'");</script>';
    }
}

function afficheNews($table = null){
    try{
        if($table == null){
            $table = getNews();
        }
        if($table != null){
            if($table != "vide"){
                foreach($table as $news){
                    $idnews = $news->getIdnews();
                    $titrenews = $news->getTitrenews();
                    $datenews = $news->getDatenews();
                    $idredacteur = $news->getIdredacteur();
                    $redacteur = getRedacteurById($idredacteur);
                    $nom = $redacteur->getNom();
                    $prenom = $redacteur->getPrenom();
                    $textenews = $news->getTextenews();
                    echo "
                        <div class='articleNews marginCotesAuto' id=".$idnews.">
                            <h1>".$titrenews."</h1>
                            <h2>Par: ".$nom." ".$prenom." - ".$datenews."</h2>
                            <p>".$textenews."</p>
                        <div class='footerArticle'>
                            <p id='idNewsFooter'> News n°".$idnews."</p>
                        </div>
                        </div>
                    ";
                }
            }
        } else if($table == "vide"){
            echo "qsdqd";
        }
    } catch(Exception $e) {
        echo '<script type="text/javascript"> alert("'.$e->getMessage().'");</script>';
    }
}

function afficheNewsAccueil(){
    try{
        $table = getNews();
        $i = 0;
        if($table != null){
            foreach($table as $news){
                if($i<4){
                    $i++;
                    $idnews = $news->getIdnews();
                    $titrenews = $news->getTitrenews();
                    $datenews = $news->getDatenews();
                    $idredacteur = $news->getIdredacteur();
                    $redacteur = getRedacteurById($idredacteur);
                    $nom = $redacteur->getNom();
                    $prenom = $redacteur->getPrenom();
                    $textenews = $news->getTextenews();
                    echo "
                        <div class='articleNews marginCotesAuto' id=".$idnews.">
                            <h1>".$titrenews."</h1>
                            <h2>Par: ".$nom." ".$prenom." - ".$datenews."</h2>
                            <p>".$textenews."</p>
                        <div class='footerArticle'>
                            <p id='idNewsFooter'> News n°".$idnews."</p>
                        </div>
                        </div>
                    ";
                }
            }
        }
    } catch(Exception $e) {
        echo '<script type="text/javascript"> alert("'.$e->getMessage().'");</script>';
    }
}

function afficheNewsRedacteur(){
    try{
        if(isset($_SESSION['login'])){
            $idredacteur = getIdRedacteurByEmail($_SESSION['login']);
            $table = getNewsByIdRedacteur($idredacteur);
            if($table != null){
                foreach($table as $newsTable){
                    $idnews = $newsTable->getIdnews();
                    $titrenews = $newsTable->getTitrenews();
                    $datenews = $newsTable->getDatenews();
                    $redacteur = getRedacteurById($idredacteur);
                    $nom = $redacteur->getNom();
                    $prenom = $redacteur->getPrenom();
                    $textenews = $newsTable->getTextenews();
                    echo "
                        <div class='articleNews marginCotesAuto' id=".$idnews.">
                            <h1>".$titrenews."</h1>
                            <h2>Par: ".$nom." ".$prenom." - ".$datenews."</h2>
                            <p>".$textenews."</p>
                        <div class='footerArticle'>
                            <p id='idNewsFooter'> News n°".$idnews."</p>
                        </div>
                        </div>
                    ";
                }
            }
        }
    } catch(Exception $e) {
        echo '<script type="text/javascript"> alert("'.$e->getMessage().'");</script>';
    }
}

function boutonAdmin(){
    if(isset($_SESSION['login'])){
        $email = $_SESSION['login'];
        if($email == "admin@admin.com"){
            echo'
                <div id="divAdmin"><a href="admin.php"><button type="submit" class="bouton" name="admin"><span>Admin</span></button></a></div>
            ';
        }
    }
}

function filtreTitre($titrenews){
    try{
        $table = rechercheByTitre($titrenews);
        if($table != null){
            return $table;
        }else {
            $table = "vide";
        }
    } catch(Exception $e) {

    }
}

function filtreDuree($dateDeb, $dateFin){
    try{
        $table = rechercheByDuree($dateDeb, $dateFin);
        if($table != null){
            return $table;
        }else {
            return $table = "vide";
        }
    } catch(Exception $e) {

    }
}

function filtreDateDeb($dateDeb){
    try{
        $table = rechercheByDateDebut($dateDeb);
        if($table != null){
            return $table;
        } else {
            return $table = "vide";
        }
    } catch(Exception $e) {

    }
}

function filtreDateFin($dateFin){
    try{
        $table = rechercheByDateFin($dateFin);
        if($table != null){
            return $table;
        }else {
            return $table = "vide";
        }
    } catch(Exception $e) {

    }
}

function filtreTheme($idtheme){
    try{
        $table = rechercheByIdTheme($idtheme);
        if($table != null){
            return $table;
        }else {
            return $table = "vide";
        }
    } catch(Exception $e) {

    }
}
?>
