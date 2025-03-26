<?php

function debug($variable) {
    return var_dump($variable);
}

$variable9 = "Hello, world!";
$variable10 = 42;
$variable11 = 3.14;
$variable12 = true;

echo debug($variable9) . "<br>";
echo debug($variable10) . "<br>";
echo debug($variable11) . "<br>";
echo debug($variable12) . "<br>";