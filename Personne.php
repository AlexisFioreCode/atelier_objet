<?php 

class Personne {
    protected $nom;
    protected $prenom;
    protected $adresse;

    public function __construct(array $nom) 
    {
        $this = [
            $this->setNom($nom),
            $this->setPrenom($prenom),
            $this->setAdresse($adresse),
        ];
    }
    public function getNom() {
        return $this->nom;
    }
    public function getPrenom() {
        return $this->prenom;
    }
    public function getAdresse() {
        return $this->adresse;
    }
    public function setNom($nom) {
         $this->nom=$nom;
    }
    public function setPrenom($prenom) {
         $this->prenom=$prenom;
    }
    public function setAdresse($adresse) {
        $this->adresse=$adresse;
   }
}