<?php
echo "Bienvenue dans les exercices de l'unité d'enseignement Programmation serveur 1 !<br>";

//exercice 2
$name = "Greg";
echo "Hello $name<br>";

//exercice 3
$age = 19;
if ($age >= 18) {
    echo "You are over 18<br>";
} else {
    echo "You are under 18<br>";
}

//exercice 4
const PI = 3.14;
echo PI . "<br>";

//exercice 5
$number = 10;
$double = $number * 2;
echo $double . "<br>";

//exercice 7
$text = "PHP";
echo "J'apprends " . $text . " dans ce nouveau cours ProgServ1<br>";

//exercice 8
$hasBachelorDegree = false;
$hasFinishedHeigVd = false;
if ($hasBachelorDegree && $hasFinishedHeigVd) {
    echo "You have finished the HEIG-VD, congratulations!<br>";
} else if ($hasBachelorDegree && !$hasFinishedHeigVd) {
    echo "You have another Bachelor's degree.<br>";
} else {
    echo "You are still a student.<br>";
}

//exercice 10
$day = "Sunday";

switch ($day) {
    case "Monday":
    case "Tuesday":
    case "Wednesday":
    case "Thursday":
    case "Friday":
        echo "Weekday<br>";
        break;
    case "Saturday":
    case "Sunday":
        echo "Weekend<br>";
        break;
}

//exercice 11
$temperature = 15;
if ($temperature > 20) {
    echo "It's hot<br>";
} else if ($temperature > 15 && $temperature <= 20) {
    echo "It's cool<br>";
} else {
    echo "It's cold<br>";
}

//exercice 12
$grade = 5;
switch ($grade) {
    case 1: echo "1111<br>";
    break;
    case 2: echo "2222<br>";
    break;
    case 3: echo "3333<br>";
    break;
    case 4: echo "4444<br>";
    break;
    case 5: echo "5555<br>";
    break;
    case 6: echo "6666<br>";
    break;
    default: echo "default case<br>";
}

//exercice 14
const USERNAME = "admin";
const PASSWORD = "1234";

if (USERNAME == "admin" && PASSWORD == "1235") {
    echo "You're logged in<br>";
} else {
    echo "Login failed<br>";
}

//exercice 15
$number = 9;
if ($number % 3 == 0) {
    echo "Multiple of 3<br>";
} else {
    echo "Not multiple of 3";
}

//exercice 16
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

//exercice 17
$stRochStudent = false;
$comemStudent = false;
$cheseauxStudent = true;
if ($stRochStudent && $comemStudent || $cheseauxStudent) {
    echo "You are an engineering student";
} else {
    echo "You are not an engineering student";
}