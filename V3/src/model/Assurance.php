<?php
// src/Product.php
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'assurance')]
class Assurance
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int|null $id = null;

    #[ORM\Column(type: 'string', length: 50)]
    private string $libelle;

    #[ORM\Column(type: 'float')]
    private float $bonus;

    #[ORM\Column(type: 'integer')]
    private int $montant;


    function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    function setBonus($bonus)
    {
        $this->bonus = $bonus;
    }

    function setMotant($montant)
    {
        $this->montant = $montant;
    }
 
    function getId()
    {
        return $this->id;
    }
    function getLibelle()
    {
        return $this->libelle;
    }
    
    function getBonus()
    {
        return $this->bonus;
    }
    function getMontant()
    {
        return $this->montant;
    }
}
