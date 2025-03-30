#!/bin/bash

numberOfExercise=17 #change this value according to the number of files you want to create
serieOfExercise=3 #change this value according to the serie of exercise (example: exercises_serie_1)

dir_name="exercices_serie_$serieOfExercise"
mkdir -p "$dir_name" && cd "$dir_name" || exit 1

for i in $(seq 1 $numberOfExercise); do
    filename=$(printf "exercice_%02d.php" "$i")
    echo "<?php" > "$filename"
done