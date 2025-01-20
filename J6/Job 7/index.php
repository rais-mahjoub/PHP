<?php
function bubblesort($tab, $croissant) {
    $lnTab = 0;
    for ($i = 0; isset($tab[$i]); $i++) {
        $lnTab++;
    }
    for ($i = 1; $i<$lnTab; $i++) {
        if ($croissant == true) {
            if ($tab[$i] < $tab[$i -1]) {
                [$tab[$i], $tab[$i-1]] = [$tab[$i -1], $tab[$i]];
            }
        } else {
            if ($tab[$i] > $tab[$i -1]) {
                [$tab[$i], $tab[$i-1]] = [$tab[$i -1], $tab[$i]];
            }
        }
    }
    return $tab;
}
$tab = ["abc","ghi","def"];
var_dump(bubblesort($tab, $croissant = false)); 
