<?php
$tab1 = ["amal", "lisa", "mona", "selsabil"];
$tab2 = ["selsabil", "alexis", "amel", "amal"];
function redondant($tab1, $tab2){
    $redondant = [];
    $trouve=false;
    for ($i = 0; $i < count($tab1); $i++) {
        for ($j = 0; $j < count($tab2); $j++) {
            if ($tab1[$i] == $tab2[$j]) {
                array_push($redondant, $tab1[$i]);
            }
        }
    }
    return $redondant;
}
print_r(redondant($tab1,$tab2));