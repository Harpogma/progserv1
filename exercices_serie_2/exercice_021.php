<?php

function isStringOrInteger($varialbe) {
    if (is_int($varialbe)) {
        return "Integer<br>";
    } else if (is_string($varialbe)) {
        return "String<br>";
    } else {
        return "Unkown<br>";
    }
}

$variable1 = "Hello, world!";
$variable2 = 42;
$variable3 = 3.14;
$variable4 = true;

echo isStringOrInteger($variable1);
echo isStringOrInteger($variable2);
echo isStringOrInteger($variable3);
echo isStringOrInteger($variable4);