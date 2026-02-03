<?php
// Crie um programa que, a partir de altura e peso, calcule o IMC e exiba a classificação do IMC.

$peso = $argv[1];
$altura = $argv[2];

$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    echo "Abaixo do peso.\n";
} elseif ($imc >= 18.5 && $imc < 24.9) {
    echo "Peso normal.\n";
} elseif ($imc >= 25 && $imc < 29.9) {
    echo "Sobrepeso.\n";
} else {
    echo "Obesidade.\n";
}