<?php

$hasBachelorDegree = false;
$hasFinishedHeigVd = false;
if ($hasBachelorDegree && $hasFinishedHeigVd) {
    echo "You have finished the HEIG-VD, congratulations!<br>";
} else if ($hasBachelorDegree && !$hasFinishedHeigVd) {
    echo "You have another Bachelor's degree.<br>";
} else {
    echo "You are still a student.<br>";
}