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
] ;

function ageCompare($a, $b) {
    return $a < $b ? $a : $b;
};

echo $people[0]['age'] . "<br>";
echo $people[1]['age'] . "<br>";
echo ageCompare($people[0]['age'], $people[1]['age']) . "<br>";


//$newArray = usort($people, ageCompare($people[0]['age'], $people[1]['age']));
$newArray = usort($people, "ageCompare");

for ($i = 0; $i < count($people); $i++) {
    print_r($newArray);
};

