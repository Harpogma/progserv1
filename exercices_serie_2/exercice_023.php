<?php

function truncate($string, $length) {
    if (strlen($string) > $length) {
        return substr($string, 0, $length) . "...";
    } else {
        return $string;
    }
}

$string = "Hello, world!";
$length = 18;

echo truncate($string, $length);
echo "<br>";