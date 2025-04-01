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
    global $pets;
    if (array_key_exists($name, $pets)) {
        return $pets[$name];
    } else {
        return false;
    }
}

function addPet($name, $age) {
    global $pets;
    $pets[$name] = ['name' => $name, 'age' => $age];
    return $pets[$name];
}

function updatePet($name, $age) {
    global $pets;
    if (array_key_exists($name, $pets)) {
        $pet = $pets[$name];
        $pet['age'] = $age;
        $pets[$name] = $pet;
        return $pet;
    } else {
        return false;
    }
}

function removePet($name) {
    global $pets;
    if (array_key_exists($name, $pets)) {
        unset($pets[$name]);
    } else {
        return false;
    }
}

$pets = [];