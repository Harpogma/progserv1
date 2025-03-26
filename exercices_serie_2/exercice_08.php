<?php

function grade($studentPoint, $maxPoint) {
    return (($studentPoint / $maxPoint) * 5) + 1;
}

echo grade(47, 66);
echo "<br>";