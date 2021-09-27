<?php
namespace App;

class RectangleToSquares{

    public function convert($x,$y)
    {
        $coords = [$x, $y];
        
        while ($coords[0] != 0 && $coords[1] != 0){      
            $min = min($coords);
            $res[] = $min;
        
            $coords[array_search(max($coords), $coords)] -= $min;
        }

        return $res;
    }    
}
