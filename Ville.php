<?php 

class Ville {
    protected $nom;
    protected $département;

    public function __construct($nom, $département)
    {
        $this->nom = $nom;
        $this->setDépartement($département);
    }
    public function getNom() {
        return $this->nom;
    }
    public function getDépartement() {
        return $this->département;
    }
    public function setNom($nom) {
         $this->nom=$nom;
    }
    public function setDépartement($département) {
         $this->département=$département;
    }
}