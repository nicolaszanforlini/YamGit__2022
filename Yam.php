<?php

/**
 * Fichier de la class Yam.
 */

namespace App;

/**
 * # class Yam
 *  
 * @author Nicolas Zanforlini <nicolas@nicolas.com>
 * 
 * 
 */
class Yam
{
    private array $tabFaceDe = [1,2,3,4,5,6];  // faces du dé
    private array $generateTabDes;             // tableau des lancés de dés
    private array $tabOccurenceDes;            // tableau des occurences du tableau des lancés de dés
    private array $resultFinal = ["brelan" => 0, "carre" => 0, "yam" => 0]; // résultat final

    // génère un tableau de dés lancés
    public function generateDes( int $nb ) : array
    {
        $j = 0;
        while($j<$nb)
        {
            $i = 0;
            $de = [];
            while($i<5)
            {
                $de [] = rand(1, 6);
                $i++;
            }
            $this->generateTabDes [] = $de;
            $j++;
        }
        return $this->generateTabDes;
    }
}
