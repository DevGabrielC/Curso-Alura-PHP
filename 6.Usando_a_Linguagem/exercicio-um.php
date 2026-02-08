<?php

// Escreva um programa em PHP que inicialize um array de notas e exiba somente as 3 maiores notas do array.

$notas = [3, 6, 9, 10, 3.4];

rsort($notas);

echo "As três maiores notas são: $notas[0], $notas[1] e $notas[2].";