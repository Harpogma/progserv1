<?php

require 'function.php';

addPet("Caramel", 3);
addPet("Rex", 8);
addPet("Tweety", 1);
addPet("Godzilla", 4);
getPet("Rex");
updatePet("Rex", 9);
removePet("Tweety");

$pets = getPets();
print_r($pets);
?>

<head>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h1>Page d'accueil du gestionnaire d'animaux de compagnie</h1>
    <p>Bienvenue sur la page d'accueil du gestionnaire d'animaux de compagnie !</p>
    <p>Utilise cette page pour visualiser et gérer tous les animaux de compagnie.</p>

    <h2>Liste des animaux</h2>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Âge</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($pets as $pet) {
                ?>
                <tr>
                    <td><?php echo $pet['name']?></td>
                    <td><?php echo $pet['age']?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</body>
