<?php

function divide($a, $b) {
    return $b == 0 ? "Division by zero is not allowed." : $a / $b;
}

echo divide(3, 0);
echo "<br>";