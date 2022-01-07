<?php

/**
*Créez une classe qui permet de lancer une simulatio d'un lancer de 3 dés à 6 faces, 
*et de calculer respectivement pour le jeu de Yam les probabilités d'obtenir :
*Un Yam.
*Un carré.
*Un brelan de 1.
*Faites 4 méthodes respectivement pour simuler un lancer de 3 dés à 6 faces, 
*une méthode pour calculer les Yam, un carré et un brelan. Créez deux branches dev et main. 
*Chaque commit pour être parfaitement écrit en respectant les conventions du cours. 
*Produisez la documentation PHPDoc de la classe correctement identée.
*/

namespace App;

/**
 * Fichier de lancement de la simulation.
 */

$yam = new Yam;

echo PHP_EOL."==== partie générée ( input du nombre de lancé ) ====".PHP_EOL;
$genGame = $yam->generateDes(10);
print_r($genGame);

echo "==== occurence de la partie générée ====".PHP_EOL;
$occurenceGame = $yam->occurenceTab();
print_r($occurenceGame);

echo "==== résultat de la partie ====".PHP_EOL;
$result = $yam->tableResult();
print_r($result);

