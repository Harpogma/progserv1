<?php

function shuffleRange($start, $end) {
    $array = range($start, $end);
    shuffle($array);
    return $array;
}

$start = 1;
$end = 10;

foreach(shuffleRange($start, $end) as $number) {
    echo $number . " ";
};
