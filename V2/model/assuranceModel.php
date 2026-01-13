<?php

class AssuranceModel{

    private $database;

    function __construct($database){
        $this->database = $database;
    }

    function addAssurance($libelle, $montant, $bonus){
        global $connexion;
        $sql = "INSERT INTO assurance (montant,libelle,bonus)
        values (?,?,?)";
        $result = $this->database->prepare($sql);
        $result->execute([$montant,$libelle,$bonus]);
    }


    function deleteAssurance($id){
        global $connexion;
        $sql = "DELETE FROM assurance where id = :id" ;
        $result = $this->database->prepare($sql);
        $result->execute(['id'=>$id]);
       
    }

    function updateAssurance($id,$libelle, $montant, $bonus){
        global $connexion;
        $sql = "UPDATE assurance set montant = ?, libelle = ?
        , bonus = ? where id = ?" ;
         $result = $this->database->prepare($sql);
         $result->execute([$montant, $libelle, $bonus, $id]);
    }

    function getAllAssurance(){
        global $connexion;
        $sql = "SELECT * FROM assurance" ;
        $result = $this->database->prepare($sql);
        $result->execute();
        return $result->fetchAll();
    }

    function getAssuranceById($id){
        global $connexion;
        $sql = "SELECT * FROM assurance where id = ?" ;
        $result = $this->database->prepare($sql);
        $result->execute([$id]);
        return $result->fetch();
    }


}