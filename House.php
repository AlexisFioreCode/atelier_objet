<?php

class House {
    // Ici on déclare un attribut avec une visibilité publique et un type int
    public $size = 100;
    protected $color = "blue";

    //Méthode appelée automatiquement à l'instanciation de l'objet
    //Les paramètres sont ceux passés à l'instance de l'objet
    
    public function __construct($size, $color)
    {
        //On stocke les valeurs dans les attributs correspondants
        $this->size = $size;
        $this->setColor($color);
    }

    public function getColor() {
        return $this->color;
    }
    // Setter qui me permet de protéger la propriété color et d'effectuer des vérifs
    public function setColor($color) {
        if(in_array($color, ["green", "blue", "white"])) {
            $this->color = $color;
        }
        else {
            throw new Exception("Warning unknown color");
        }
    }
    
    public function welcome() {
        echo "<p>Bienvenue dans votre maison </p>" ;
    }
}

?>