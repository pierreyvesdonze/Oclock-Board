<?php

function Loto() {
    $numbers = [];

    for ($i = 0; $i < 5; $i++) {
        $numbers[] = mt_rand(1, 49);
    } 
    $numbers[] = mt_rand(1, 10);

    return $numbers;
}

function Grids($nbGrids) {
    $grilles = [];

    for ($i = 0; $i < $nbGrids; $i++) {
        $grilles[] = Loto();
    }
   return $grilles;
}


Grids(3);

var_dump(Grids(5));
?>
