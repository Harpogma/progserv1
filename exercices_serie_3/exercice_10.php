<?php

// function printArray($numberOfElementsToDisplay = 1, $array) { --> les paramètres par défauts doivent être déclarés après les paramètres requis
//     for ($i = 0; $i <= $numberOfElementsToDisplay; $i++) { --> corriger le <= en < 
//         // Affichage de l'élément ligne par ligne
//         echo $array[$i]; --> il manque un saut de ligne 
//     }
// }

// $fruits = ["Pomme", "Poire", "Banane", "Cerise", "Fraise"];

// $printArray(3, fruits); --> il manque le $ devant le nom de la variable --> changer l'order des paramètres pour correspond au changement d'ordre des arguments 


function printArray($array, $numberOfElementsToDisplay = 1) {
    for ($i = 0; $i < $numberOfElementsToDisplay; $i++) {
        // Affichage de l'élément ligne par ligne
        echo $array[$i] . "<br>";
    }
}

$fruits = ["Pomme", "Poire", "Banane", "Cerise", "Fraise"];

printArray($fruits, 3);