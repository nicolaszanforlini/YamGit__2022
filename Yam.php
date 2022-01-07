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
    public function generateDes( int $nb ): array
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

    // retourne le tableau d'occurences des dés lancés
    public function occurenceTab(): array
    {
        $i=0;
        foreach( $this->generateTabDes as $sequence )
        {
            $res = ["1"=>0,"2"=>0,"3"=>0,"4"=>0,"5"=>0,"6"=>0];
            foreach($this->tabFaceDe as $elem)
            {
                $cpt = 0;
                foreach( $sequence as $nbseq )
                {
                    if ($nbseq == $elem)
                    {
                        $cpt++;
                        $res["$elem"] = $cpt;
                    }
                }
            }
            $this->tabOccurenceDes[$i] = $res;
            $i++;
        }
        return $this->tabOccurenceDes;
    }
    
    // trie des résultats
    public function tableResult(): array
    {
        foreach($this->tabOccurenceDes as $elres)
        {
            rsort($elres);
            switch ($elres[0])
            {
                case 5:
                    $this->resultFinal["yam"] += 1;
                    break; 
                case 4:
                    $this->resultFinal["carre"] += 1;
                    break; 
                case 3:
                    $this->resultFinal["brelan"] += 1;
                    break;
                default:
                    break;
            }
        }
        return $this->resultFinal;
    }

}
