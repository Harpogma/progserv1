#!/bin/bash

numberOfExercise=20 #change this value according to the number of files you want to create
serieOfExercice=3 #change this value according to the serie of exercise (example: exercises_serie_1)

dir_name="exercises_serie_$serieOfExercice"
mkdir -p "$dir_name" && cd "$dir_name" || exit 1

for i in $(seq 1 $numberOfExercise); do
    filename=$(printf "exercice_%02d.php" "$i")
    echo "<?php" > "$filename"
done