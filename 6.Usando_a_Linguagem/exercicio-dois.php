<?php

// Crie um programa em PHP que transforme a string “Vinicius Dias,1997,Programador” em um array em que cada item está separado por vírgulas.

$string = "Vinicius Dias,1997,Programador";

$arraySeparado = explode(",", $string);

echo $arraySeparado[0] . "\n";
echo $arraySeparado[1] . "\n";
echo $arraySeparado[2] . "\n";