<?php

class AssuranceController{

     private $model;
     
     function __construct($model){
          $this->model = $model;
     }

    function listAssurance(){
       $assurances = $this->model->getAllAssurance();//model
       require_once './view/assurance/list.php'; // view
    }

    function addFormAssurance(){
         require_once './view/assurance/add.php'; // view
    }

    function saveFormAssurance($libelle,$montant,$bonus){
        $this->model->addAssurance($libelle, $montant, $bonus); // model
         header('location:index.php');
    }

    function deleteOneAssurance($id){
        $this->model->deleteAssurance($id); //model
        header('location:index.php');
    }

    function editAssurance($id){
        $assurance =   $this->model->getAssuranceById($id); //model
       require_once './view/assurance/edit.php'; // view

    }

    function updateOneAssurance($id,$libelle,$montant,$bonus){
          $this->model->updateAssurance($id,$libelle, $montant, $bonus); //model
         header('location:index.php');
    }

}