<?php
namespace App;

class HammingDistance{

    public function compare($dna1,$dna2)
    {
        $sequence1 = str_split($dna1);
        $sequence2 = str_split($dna2);
        $diff = 0;

        if (count($sequence1) === count($sequence2)){
            foreach($sequence1 as $index => $letter){
                if ($letter !== $sequence2[$index]){
                    $diff++;
                }
            }
            return $diff;
        }

        return "Les séquences doivent être de même longueur";

    }    
}
