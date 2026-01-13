<?php

class AssuranceModel
{

    private $database;

    function __construct($database)
    {
        $this->database = $database;
    }

    function addAssurance($libelle, $montant, $bonus)
    {
        global $entityManager;
        $assurance = new Assurance;
        $assurance->setLibelle($libelle);
        $assurance->setMotant($montant);
        $assurance->setBonus($bonus);

        $entityManager->persist($assurance);
        $entityManager->flush();
    }


    function deleteAssurance($id)
    {
        global $entityManager;
        $assurance = getAssuranceById($id);
        $entityManager->remove($assurance);
        $entityManager->flush();
    }

    function updateAssurance($id, $libelle, $montant, $bonus)
    {
        global $entityManager;
        // $sql = "UPDATE assurance set montant = ?, libelle = ?
        // , bonus = ? where id = ?";
        // $result = $this->database->prepare($sql);
        // $result->execute([$montant, $libelle, $bonus, $id]);
    }

    function getAllAssurance()
    {
        global $entityManager;
        return $entityManager->getRepository(Assurance::class)->findAll();
    }

    function getAssuranceById($id)
    {
        global $entityManager;
        return $entityManager->find("Assurance", $id);
    }
}
