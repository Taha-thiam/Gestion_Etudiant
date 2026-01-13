<?php

      require_once './view/header.php';
      require_once './model/database.php';
      require_once './model/assuranceModel.php';
      require_once './controller/assuranceController.php';
      $database = new Database();
      $model = new AssuranceModel($database->get_Connexion());
      $controller = new AssuranceController($model);

      if(isset($_GET['action']) && !empty($_GET['action'])){

        if($_GET['action']=="addAssurance"){
            $controller->addFormAssurance(); //controller
        }
        if($_GET['action']=="saveAssurance"){ 
           $libelle = $_POST['libelle'];
           $montant = $_POST['montant'];
           $bonus = $_POST['bonus'];
           $controller->saveFormAssurance($libelle,$montant,$bonus);//controller
        }

       if($_GET['action']=="updateAssurance"){ 
         extract($_POST);
         $controller->updateOneAssurance($id,$libelle,$montant,$bonus);
       }

         if(isset($_GET['id']) && !empty($_GET['id'])){
            if($_GET['action']=="deleteAssurance"){
                $id= $_GET['id'];
                $controller->deleteOneAssurance($id); // controller
            }

             if($_GET['action']=="editAssurance"){
                $id= $_GET['id'];
                $controller->editAssurance($id); //controller
             }
         }
        
      }else{
       $controller->listAssurance(); //controller
      }

?>