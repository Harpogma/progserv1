<?php
require 'function.php';

echo addPet("Caramel", 3);
echo addPet("Rex", 8);
echo addPet("Tweety", 1);
echo addPet("Godzilla", 4);
 
echo getPets();
echo getPet("Rex");
 
echo updatePet("Rex", 9);

echo removePet("Tweety");