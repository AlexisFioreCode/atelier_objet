<?php
require "Habitat.php";
class House extends Habitat {

    // Ici on déclare un attribut avec une visibilité publique et un type int   
    protected static $taxe = 3;
    //Méthode appelée automatiquement à l'instanciation de l'objet
    //Les paramètres sont ceux passés à l'instance de l'objet
    
    public function __construct($size, $color)
    {
        parent::__construct($size, $color);
    }

   
    
    public function welcome() {
        echo "<p>Bienvenue dans votre maison </p>" ;
    }

    public static function describe():string {
        return "This class represents a house with a size and a color. 
        Authorized colors are : ". implode(", ", self::COLORS);
    }
    public static function setTaxe(int $taxe) {
        self::$taxe = $taxe;
    }
    public static function setInstanceTaxe(int $taxe) {
        self::$taxe = $taxe;
    }
    public static function getTaxe() {
        return self::$taxe;
    }
    public function getInstanceTaxe() {
        return self::$taxe;
    }
    
}

?>