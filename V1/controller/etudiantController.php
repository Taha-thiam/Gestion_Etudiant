<?php


    function listEtudiant(){
       $Etudiants = getAllEtudiant();//model
       require_once './view/etudiant/list.php'; // view
    }

    function addFormEtudiant(){
         require_once './view/etudiant/add.php'; // view
    }

    function saveFormEtudiant($nom,$prenom,$email,$filiere){ 
         addEtudiant($nom, $prenom, $email, $filiere); // model
         header('location:index.php');
    }

    function deleteOneEtudiant($id){
        deleteEtudiant($id); //model
        header('location:index.php');
    }

    function editEtudiant($id){
        $Etudiant =  getEtudiantById($id); //model
       require_once './view/etudiant/edit.php'; // view

    }

    function updateOneEtudiant($id,$nom,$prenom,$email,$filiere){
         updateEtudiant($id,$nom, $prenom, $email,$filiere); //model
         header('location:index.php');
    }

?>