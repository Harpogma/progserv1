<?php

$stRochStudent = false;
$comemStudent = false;
$cheseauxStudent = true;
if ($stRochStudent && $comemStudent || $cheseauxStudent) {
    echo "You are an engineering student";
} else {
    echo "You are not an engineering student";
}