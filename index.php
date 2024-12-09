<?php

include_once("perso.php");
include_once("elfe.php");
include_once("nain.php");

$elfe = new Elfe();  
$nain = new Nain(); 

// Afficher les informations des personnages
echo "<strong>Elfe :</strong><br><br>";
echo "Nom : {$elfe->getName()}<br>";
echo "PV : {$elfe->getPV()}<br>";
echo "Endurance : {$elfe->getEndurance()}<br>";
echo "Force : {$elfe->getForce()}<br>";
echo "Arme : {$elfe->getArme()}<br><br>";

echo "<strong>Nain :</strong><br><br>";
echo "Nom : {$nain->getName()}<br>";
echo "PV : {$nain->getPV()}<br>";
echo "Endurance : {$nain->getEndurance()}<br>";
echo "Force : {$nain->getForce()}<br>";
echo "Arme : {$nain->getArme()}<br><br>";

// Faire attaquer l'Elfe le Nain
echo "<strong>Combat :</strong><br><br>";
$elfe->attaquer($nain);

// Vérifier si le Nain peut se défendre
if ($nain->getPV() > 0) {
    echo "<br>Le Nain se défend !<br><br>";
    $degatsSubis = $elfe->getForce();
    $nain->defense($degatsSubis);
}

// Afficher les résultats après le combat
echo "<strong>Résultats finaux :</strong><br><br>";
echo "Elfe : {$elfe->getName()} - PV restant : {$elfe->getPV()} - En vie : {$elfe->getEnVie()}<br>";
echo "Nain : {$nain->getName()} - PV restant : {$nain->getPV()} - En vie : {$nain->getEnVie()}<br><br>";

echo "<br><strong>Fin de la partie.</strong>";
?>
