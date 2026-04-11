<?php
function srednia($a, $b) {
    return ($a + $b) / 2;
}
function srednia_wazona($a, $b) {
    $waga1 = 9;
    $waga2 = 1;
    
    return ($a * $waga1 + $b * $waga2) / ($waga1 + $waga2);
}

?>
