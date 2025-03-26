<?php

function isPassing($grade) {
    return $grade > 4 ? true : false;
}

if (isPassing(4.5606060606061)) {
    echo "Passing<br>";
} else {
    echo "Failling<br>";
}