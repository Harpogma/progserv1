<?php

function absoluteValue($number) {
    return $number < 0 ? -$number : $number;
}

echo absoluteValue(-15);
echo "<br>";