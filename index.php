<?php

/**
 * 1. Créez une classe Habitation, elle contiendra les propriétés:
 *    - pays ( string )
 *    - ville ( string )
 *    - code postal ( entier ou string )
 *    - chambres ( entier )
 *    - pièces ( entier )
 *
 * Définissez tous les setters et les getters.
 *
 *
 *
 * 2. Créez une classe Maison qui étend de Habitation, elle contiendra les propriétés:
 *    - jardin ( booleen )
 *    - etages ( entier )
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 3. Créez une classe Appartement qui étend de habitation, elle contiendra les propriétés:
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 4. Créez deux instances de Maison et invoquez toutes les méthodes définies, sauf les setters ( dans index.php ).
 *
 *
 *
 * 5. Créez une instance de Appartement et invoquez toutes les méthodes définies, y compris les setters ( dans index.php ).
 */

require "./classes/Habitation.php";
require "./classes/Maison.php";
require "./classes/Appartement.php";

$maison1 = new Maison("France", "fourmies", 59186, 1, 4, false, 2, false);
echo $maison1->getPays()."<br>";
echo $maison1->getVille()."<br>";
echo $maison1->getCodePostal()."<br>";
echo $maison1->getChambres()."<br>";
echo $maison1->getPieces()."<br>";
echo $maison1->hasJardin()."<br>";
echo $maison1->getEtages()."<br>";
echo $maison1->hasGarage()."<br>";

echo "<br><br>";

$maison2 = new Maison("France", "Fourmies", 59610, 2, 5, true, 1, true);
echo $maison2->getPays()."<br>";
echo $maison2->getVille()."<br>";
echo $maison2->getCodePostal()."<br>";
echo $maison2->getChambres()."<br>";
echo $maison2->getPieces()."<br>";
echo $maison2->hasJardin()."<br>";
echo $maison2->getEtages()."<br>";
echo $maison2->hasGarage()."<br>";

echo "<br><br>";

$appart = new Appartement("France", "Fourmies", 59610, 4, 8, true);
echo $appart->getPays()."<br>";
echo $appart->getVille()."<br>";
echo $appart->getCodePostal()."<br>";
echo $appart->getChambres()."<br>";
echo $appart->getPieces()."<br>";
echo $appart->hasGarage()."<br>";

echo $appart->setPays("France")."<br>";
echo $appart->setVille("Vannes")."<br>";
echo $appart->setCodePostal(59260)."<br>";
echo $appart->setChambres(1)."<br>";
echo $appart->setPieces(3)."<br>";
echo $appart->setGarage(true)."<br>";