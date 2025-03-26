<?php

function isEven($number) {
    return $number % 2 == 0 ? true : false;
}

if (isEven(11)) {
    echo "Even<br>";
} else {
    echo "Odd<br>";
}