<?php

$number = 4;
if ($number % 3 == 0 && $number % 5 == 0) {
    echo "Divisible by 3 and 5<br>";
} else if ($number % 5 == 0 && !($number % 3 == 0)) {
    echo "Divisible by 5<br>";
} else if ($number % 3 == 0 && !($number % 5 == 0)) {
    echo "Divisible by 3<br>";
} else {
    echo "Not divisible by 3 or 5<br>";
}