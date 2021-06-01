<?php
require "House.php";
require "Ville.php";
// On instancie un objet de classe House
$house = new House(150, "blue");
$house2 = new House(125, "green");

// Ici on fait appel à l'attribut size (attention sans le dollar)
echo "<p>la maison fait en mètres carrés : " . $house->size . "</p>";
// Fait appel au getter car l'attribut est protégé
echo "<p>La maison est de couleur " . $house->getColor() . "</p>";
$house->welcome();

echo "<p>la maison fait en mètres carrés : " . $house2->size . "</p>";
echo "<p>La maison est de couleur " . $house2->getColor() . "</p>";
$house2->welcome();

$ville = new Ville("Evreux", "Eure");
echo "<p> La ville " . $ville->getNom() . " est situé dans le département " . $ville->getDépartement() . "</p>";
