<?php
/*
 * Towers Of Hanoi
 */
function prtAction($n, $from, $to) {
    echo $n . " : " . $from . " to " . $to . "\n";
}

function hanoi($n, $start, $temp, $end){
    if( $n > 0 ) {
        hanoi($n-1, $start, $end, $temp);
        prtAction($n, $start, $end);
        hanoi($n-1, $temp, $start, $end);
    }
}

$n = 3;
$start = 'A';
$temp = 'B';
$end = 'C';

hanoi($n, $start, $temp, $end);
?>
