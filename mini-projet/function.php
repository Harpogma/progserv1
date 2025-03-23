<?php
function getPets() {
    return "Getting pets.<br>";
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