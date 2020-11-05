<?php

include('requetesSQL.php');

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
                throw new Exception("L'ID du theme est vide");
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

function creeNews($idnews,$idtheme, $titrenews, $datenews, $textenews, $idredacteur){
    try{
        $news = new News($idnews,$idtheme, $titrenews, $datenews, $textenews, $idredacteur);

        insertNews($news);
    } catch(Exception $e) {

    }
}
?>