<?php

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