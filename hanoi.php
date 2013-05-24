<?php
/*
 * Towers Of Hanoi
 */
function prtAction($n, $from, $to) {
    //print $n . 'move from:' . $from . 'to' . $to . '\n';
    echo $n . 'move from:' . $from . 'to' . $to . "\n";
}

function hanoi($n, $start, $temp, $end){
    if( $n > 1 ) {
        hanoi($n-1, $start, $end, $temp);
        prtAction($n, $start, $end);
        hanoi($n-1, $temp, $start, $end);
    }
}

$n = 4;
$start = 'A';
$temp = 'B';
$end = 'C';

hanoi($n, $start, $temp, $end);
?>
