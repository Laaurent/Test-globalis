<?php

include "function.php";

echo "<h1>Test Globalis - QUENEL Laurent</h1>";

echo "<br>=======================================================================<br>";

$question1 = "<h4>Expliquez, en quelques lignes, ce que fait la fonction foo().</h4>";
$reponse1 = "La fonction foo() prend en paramètre un tableau de couple formant un intervalle ( ici représenté sous la forme d'un tableau de longueur 2 ) et renvoie l'intervalle simplifié de ces intervalles (une sorte d'union des intervalles).<br>";
echo ($question1 . $reponse1);

echo "<br><br>=======================================================================<br>";

$array = [];
$array1 = [[0, 3], [6, 10]];
$array2 = [[0, 5], [3, 10]];
$array3 = [[0, 5], [2, 4]];
$array4 = [[7, 8], [3, 6], [2, 4]];
$array5 = [[3, 6], [3, 4], [15, 20], [16, 17], [1, 4], [6, 10], [3, 6]];

$data = [$array, $array1, $array2, $array3, $array4, $array5];

foreach ($data as $value) {
    echo "<br>------------------------------------------------------<br>";
    echo "<h4>Tableau de départ</h4>";
    displayArray($value);
    echo "<h4>Tableau de sortie</h4>";
    displayArray(foo($value));
}

echo "<br>=======================================================================<br>";

$question3 = "<h4>Précisez en combien de temps vous avez implémenté cette fonction.</h4>";
$reponse3 = "J'ai implémenté la fonction foo() en 30 min le temps de réfléchir et de découvrir les différentes possibilités de traitement de l'intervalle.";
echo ($question3 . $reponse3);
