<?php
/*
 * Towers Of Hanoi
 */
function prtAction($n, $from, $to) {
    //<br>:for web
    echo $n . " : " . $from . " -> " . $to . "\n<br>";
}

function hanoi($n, $start, $temp, $end){
    if( $n > 0 ) {
        hanoi($n-1, $start, $end, $temp);
        prtAction($n, $start, $end);
        hanoi($n-1, $temp, $start, $end);
    }
}

$n = $_GET[num];    //web
$start = 'A';
$temp = 'B';
$end = 'C';

hanoi($n, $start, $temp, $end);
?>
