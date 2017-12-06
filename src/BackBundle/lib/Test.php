<?php
#src/BackBundle/lib/Test.php
namespace BackBundle\lib;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class Test
{
    // Attributs.
    private $libelle;
    private $value;
    private $nb;

    // Constructeur.
    public function __construct()
    {
        $this->libelle = 'libelle de defaut';
        $this->value = 'valeur par defaut';
        $this->nb = 0;
    }

    // Accesseurs.
    public function getLibelle()
    {
        return $this->libelle;
    }

     public function getValue()
    {
        return $this->value;
    }

     public function getNb()
    {
        return $this->nb;
    }

}










?>