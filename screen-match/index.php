<?php

require __DIR__ . "/Modelo/Filme.php";


echo "Bem-vindo(a) ao screen match!\n";

$filme = new Filme();
$filme->defineAnoLancamento(2021);

/*
$filme->nome = "Top Gun - Maverick";
$filme->anoLancamento = 2022;
$filme->genero = "Ação";
*/

$filme->avalia(4.9);
$filme->avalia(8.9);
$filme->avalia(3.9);
$filme->avalia(2.9);
$filme->avalia(8.9);

var_dump($filme);

echo $filme->media() . "\n";
echo $filme->anoLancamento() . "\n";