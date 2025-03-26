<?php

function isDivisibleBy($a, $b) {
    if ($b == 0) {
        return false;
    } else if ($a % $b == 0) {
        return true;
    } else {
        return false;
    }
}

echo isDivisibleBy(10, 2) ? "true" : "false";
echo "<br>";
echo isDivisibleBy(10, 3) ? "true" : "false";
echo "<br>";