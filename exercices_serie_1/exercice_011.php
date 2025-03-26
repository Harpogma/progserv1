<?php

$temperature = 15;
if ($temperature > 20) {
    echo "It's hot<br>";
} else if ($temperature > 15 && $temperature <= 20) {
    echo "It's cool<br>";
} else {
    echo "It's cold<br>";
}