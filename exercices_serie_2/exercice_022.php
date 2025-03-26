<?php

function isSetAndNotEmpty($variable) {
    if (isset($variable) && !empty($variable)) {
        return "Set and not empty<br>";
    } else if (isset($variable) && empty($variable)) {
        return "Set and empty<br>";
    } else {
        return "Not set<br>";
    }
}

$variable5 = "Hello, world!";
$variable6 = "";
$variable7 = 42;
$variable8 = null;

echo isSetAndNotEmpty($variable5);
echo isSetAndNotEmpty($variable6);
echo isSetAndNotEmpty($variable7);
echo isSetAndNotEmpty($variable8);