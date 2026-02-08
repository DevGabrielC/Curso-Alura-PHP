<?php

// Escreva uma função em PHP que receba um array de strings por parâmetro e o retorne ordenado em ordem alfabética.

$arrayDeTextos = ["Gabriel", "Aline", "João", "Vinicius", "Stella", "Matheus"];
sort($arrayDeTextos);

foreach ($arrayDeTextos as $ordenados) {
    echo $ordenados . "\n";
}