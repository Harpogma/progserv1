<?php

$ticTacToe = [
    ['X', 'O', 'X'],
    ['O', 'X', 'O'],
    ['X', 'O', 'X'],
];

echo "For loop<br>";
for ($i = 0; $i < count($ticTacToe[0]); $i++) {
    for ($j = 0; $j < count($ticTacToe); $j++) {
        print_r("Ligne $i, colonne $j, valeur {$ticTacToe[$i][$j]} ");
    }
    echo "<br>";
}
echo "<br>";

//TODO c'est ok de déclarer les deux variables avant la boucle ?
echo "While loop<br>";
$i = 0;
$j = 0;
while ($i < count($ticTacToe)) {
    while ($j < count($ticTacToe[$i])) {
        print_r("Ligne $i, colonne $j, valeur {$ticTacToe[$i][$j]} ");
        $j++;
    }
    $i++;
    $j = 0;
    echo "<br>";
};
echo "<br>";

//TODO c'est ok de déclarer les deux variables avant la boucle ?
echo "Do while loop<br>";
$k = 0;
$l = 0;
do {
    do {
        print_r("Ligne $l, colonne $k, valeur {$ticTacToe[$l][$k]} ");
        $k++;
    } while ($k < count($ticTacToe[$i]));
    $l++;
    $k = 0;
    echo "<br>";
} while ($l < count($ticTacToe));
echo "<br>";

echo "Foreach<br>";
foreach($ticTacToe as $i => $line) {
    foreach($ticTacToe as $j => $column) {
        print_r("Ligne $i, colonne $j, valeur {$ticTacToe[$i][$j]} ");
    }
    echo "<br>";
}