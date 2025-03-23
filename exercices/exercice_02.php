<?php
echo "Bienvenue dans les exercices de l'unité d'enseignement Programmation serveur 1 !<br>";

//exercice 1
function greet($name) {
    echo "Hello $name";
}
greet("Greg<br>");

//exercice 2
function square($number) {
    return $number * $number;
}

echo square(4);
echo "<br>";

//exercice 3
function multiply($a, $b) {
    return $a * $b;
}

echo multiply(6, 7);
echo "<br>";

//exercice 4
function divide($a, $b) {
    return $b == 0 ? "Division by zero is not allowed." : $a / $b;
}

echo divide(3, 0);
echo "<br>";

//exercice 5
function absoluteValue($number) {
    return $number < 0 ? -$number : $number;
}

echo absoluteValue(-15);
echo "<br>";

//exercice 6
function maxOfTwo($a, $b) {
    return $a > $b ? $a : $b;
}

echo maxOfTwo(12, 8);
echo "<br>";

//exercice 7
function isEven($number) {
    return $number % 2 == 0 ? true : false;
}

if (isEven(11)) {
    echo "Even<br>";
} else {
    echo "Odd<br>";
}

//exercice 8
function grade($studentPoint, $maxPoint) {
    return (($studentPoint / $maxPoint) * 5) + 1;
}

echo grade(47, 66);
echo "<br>";

//exercice 9
function isPassing($grade) {
    return $grade > 4 ? true : false;
}

if (isPassing(grade(47, 66))) {
    echo "Passing<br>";
} else {
    echo "Failling<br>";
}

//exercice 10
function isLeapYear($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
        return true;
    } else {
        return false;
    }
}

if (isLeapYear(1900)) {
    echo "Bissextile<br>";
} else {
    echo "Non bissextile<br>";
}

if (isLeapYear(2000)) {
    echo "Bissextile<br>";
} else {
    echo "Non bissextile<br>";
}

if (isLeapYear(2024)) {
    echo "Bissextile<br>";
} else {
    echo "Non bissextile<br>";
}

if (isLeapYear(2025)) {
    echo "Bissextile<br>";
} else {
    echo "Non bissextile<br>";
}

//exercice 11
echo round(grade(47, 66), 1);
echo "<br>";

//exercice 12
echo ceil(grade(47, 66));
echo "<br>";

//exercice 13
echo floor(grade(47, 66));
echo "<br>";

//exercice 14
function absoluteValue1($number) {
    return abs($number);
}

echo absoluteValue1(-15);
echo "<br>";

//exercice 15
function power($base, $exponent) {
    return pow($base, $exponent);
}

echo pow(2, 8);
echo "<br>";

//exercice 16
$original = "Hello World";
echo str_replace("World", "PHP", $original);
echo "<br>";

//exercice 17
echo str_word_count($original);
echo "<br>";

//exercice 18
if (str_starts_with($original, "Hello")) {
    echo "true<br>";
} else {
    echo "false<br>";
}

//exercice 19
$original2 = "Hello world<br>";
echo str_repeat($original2, 3);

//exercice 20
echo strpos($original2, "world");
echo "<br>";


//exercice 21
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

//exercice 22
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

//exercice 23
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

//exercice 24
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

//exercice 25
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

//exercice 26
function factorial($number) {
    // if ($number == 0) {
    //     return 1;
    // }

    return $number * factorial($number - 1);
}

$result = factorial(5);
echo $result;
