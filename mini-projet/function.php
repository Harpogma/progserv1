<?php

$pets = [
    'Caramel' => [
        'name' => 'Caramel',
        'age' => 3,
    ],
    'Rex' => [
        'name' => 'Rex',
        'age' => 8,
    ],
    'Tweety' => [
        'name' => 'Tweety',
        'age' => 1,
    ],
    'Godzilla' => [
        'name' => 'Godzilla',
        'age' => 4,
    ]
];

function getPets() {
    global $pets;
    return $pets;
}

function getPet($name) {
    return "Getting pet with name '$name'.<br>";
}

function addPet($name, $age) {
    return "Adding $name, who is $age years old.<br>";
}

function updatePet($name, $age) {
    return "Updating pet with name '$name' to be $age years old.<br>";
}

function removePet($name) {
    return "Removing pet with name '$name'.<br>";
}