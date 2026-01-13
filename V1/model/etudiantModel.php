<?php

function addEtudiant($nom, $prenom, $email,$filiere){ 
    global $connexion;
    $sql = "INSERT INTO etudiant (nom,prenom,email,filiere)
    values ('$nom,'$prenom','$email','$filiere')"; // insertion dans Etudiant (prenom, nom, email) lesvaleurs ($prenom,'$nom', $email)
    pg_query($connexion,$sql);
}


function deleteEtudiant($id){
    global $connexion;
    $sql = "DELETE FROM etudiant where id =$id" ; // suppression dans Etudiant ou id = $id
    pg_query($connexion,$sql);
}

function updateEtudiant($id,$nom, $prenom, $email, $filiere){// fonction pour modifier une Etudiant
    global $connexion;
    $sql = "UPDATE etudiant set prenom = '$prenom', nom = '$nom'
    , email = '$email ', filiere = '$filiere' where id = $id;" ; 

    pg_query($connexion,$sql);
}

function getAllEtudiant(){
    global $connexion;
    $sql = "SELECT * FROM etudiant" ;
    $result =  pg_query($connexion,$sql);

    return pg_fetch_all($result);
}

function getEtudiantById($id){
    global $connexion;
    $sql = "SELECT * FROM etudiant where id = $id" ;// selection un Etudiant par son id
    $result =  pg_query($connexion,$sql);

    return pg_fetch_all($result)[0];
}


?>