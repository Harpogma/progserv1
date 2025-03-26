<?php

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