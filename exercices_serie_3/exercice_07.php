<?php

$fruits = ['Pomme', 'Poire', 'Banane', 'Cerise', 'Fraise'];

echo "For loop<br>";
for ($i = 0; $i < count($fruits); $i++) {
    echo "$fruits[$i]<br>";
};
echo "<br>";

echo "While loop<br>";
$i = 0;
while ($i < count($fruits)) {
    echo "$fruits[$i]<br>";
    $i++;
}
echo "<br>";

echo "Do while loop<br>";
$j = 0;
do {
    echo "$fruits[$j]<br>";
    $j++;
} while ($j < count($fruits));
echo "<br>";

echo "ForEach loop<br>";
foreach ($fruits as $fruit) {
    echo "$fruit<br>";
};
