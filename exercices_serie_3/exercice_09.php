<?php

$people = [
    [
        'name' => 'John Doe',
        'age' => 30,
        'city' => 'New York',
    ],
    [
        'name' => 'Jane Doe',
        'age' => 25,
        'city' => 'Los Angeles',
    ],
    [
        'name' => 'Alice Smith',
        'age' => 35,
        'city' => 'Chicago',
    ],
];

echo "Foreach loop<br>";
foreach ($people as $person) {
    echo "Name: " . $person['name'] . "<br>";
    echo "Age: " . $person['age'] . "<br>";
    echo "City: " . $person['city'] . "<br>";
    echo "<br>";
};
echo "<br>";

echo "For loop<br>";
for ($i = 0; $i < count($people); $i++) {
    echo "Name: " . $people[$i]["name"] . "<br>";
    echo "Age: " . $people[$i]["age"] . "<br>";
    echo "City: " . $people[$i]["city"] . "<br>";
    echo "<br>";
};
echo "<br>";

echo "While loop<br>";
$i = 0;
while ($i < count($people)) {
    echo "Name: " . $people[$i]["name"] . "<br>";
    echo "Age: " . $people[$i]["age"] . "<br>";
    echo "City: " . $people[$i]["city"] . "<br>";
    echo "<br>";
    $i++;
}
echo "<br>";

echo "Do while loop<br>";
$j = 0;
do {
    echo "Name: " . $people[$j]["name"] . "<br>";
    echo "Age: " . $people[$j]["age"] . "<br>";
    echo "City: " . $people[$j]["city"] . "<br>";
    echo "<br>";
    $j++;
} while ($j < count($people));