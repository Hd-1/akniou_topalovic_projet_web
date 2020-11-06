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

function afficheNews(){
    try{
        $table = getNews();
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
                <article class='articleNews' id=".$idnews.">
                    <h1>".$titrenews."</h1>
                    <h2>Par: ".$nom." ".$prenom." - ".$datenews."</h2>
                    <p>".$textenews."</p>
                    <a class='souligne btnEnSavoirPlus' href='###'>en savoir plus...</a>
                ";
                    adminNews($idnews);
            echo"
                </article>
            ";
        }
    } catch(Exception $e) {
        echo '<script type="text/javascript"> alert("'.$e->getMessage().'");</script>';
    }
}

function adminNews($idnews){
    try{
        //Si une session est deja demarré alors je peux directement récupérer le login de la session en cours
        $email = $_SESSION['login'];
        if($email == "admin@admin.com"){
            echo "
            <div class='footerArticle'>
                <a href='' class='souligne btnFooterArticle' onclick='return modifierNews(".$idnews.");'>Modifer</a>
                <a href='' class='souligne btnFooterArticle' onclick='return supprimerNews(".$idnews.");'>Supprimer</a>
            </div>
        </article>
            ";
        }
    } catch(Exception $e) {
        echo '<script type="text/javascript"> alert("'.$e->getMessage().'");</script>';
    }
}

?>