<?php
require "House.php";

// On instancie un objet de classe House
$house = new House(150, "blue");
$house2 = new House(125, "green");

$habitat = new Habitat(75, "white");

echo "<p>" . House::describe() . "</p>" ;

echo "<p> Tax rate : " . House::getTaxe() . "</p>" ;

// Ici on fait appel à l'attribut size (attention sans le dollar)
echo "<p>la maison fait en mètres carrés : " . $house->size . "</p>";
// Fait appel au getter car l'attribut est protégé
echo "<p>La maison est de couleur " . $house->getColor() . "</p>";
$house->welcome();
echo "<p> Vous allez payer :" . $house->getInstanceTaxe() . "</p>";

echo "<p>la maison fait en mètres carrés : " . $house2->size . "</p>";
echo "<p>La maison est de couleur " . $house2->getColor() . "</p>";
$house2->welcome();
echo "<p> Vous allez payer :" . $house2->getInstanceTaxe() . "</p>";

House::setTaxe(8);
echo "<p> Tax rate : " . House::getTaxe() . "</p>" ;

echo "<p>la maison fait en mètres carrés : " . $house->size . "</p>";
// Fait appel au getter car l'attribut est protégé
echo "<p>La maison est de couleur " . $house->getColor() . "</p>";
$house->welcome();
echo "<p> Vous allez payer :" . $house->getInstanceTaxe() . "</p>";

echo "<p>la maison fait en mètres carrés : " . $house2->size . "</p>";
echo "<p>La maison est de couleur " . $house2->getColor() . "</p>";
$house2->welcome();
echo "<p> Vous allez payer :" . $house2->getInstanceTaxe() . "</p>";


