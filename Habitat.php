<?php 

// classes abstraite qui ne peut pas être instanciée , je ne peux pas avoir juste un objet Habitat
abstract class Habitat {


    const COLORS = ["green", "blue", "white"];
    public $size;
    protected $color = "blue";

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
        if(in_array($color, self::COLORS)) {
            $this->color = $color;
        }
        else {
            throw new Exception("Warning unknown color");
        }
    }
}