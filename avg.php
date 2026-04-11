<?php
function srednia($a, $b) {
    return ($a + $b) / 2;
}
function srednia_wazona($a, $b) {
    $waga1 = 8;
    $waga2 = 2;
    
    return ($a * $waga1 + $b * $waga2) / ($waga1 + $waga2);
}

?>

