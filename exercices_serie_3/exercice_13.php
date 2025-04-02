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

function ageCompare($a, $b) {
    if ($a['age'] < $b['age']) {
        return -1;
    } else if ($b < $a) {
        return 1;
    } else {
        return 0;
    }
};

usort($people, "ageCompare");

for ($i = 0; $i < count($people); $i++) {
    echo $people[$i]['name'] . "<br>";
    echo $people[$i]['age'] . "<br>";
    echo $people[$i]['city'] . "<br>";
    echo "<br>";
};
