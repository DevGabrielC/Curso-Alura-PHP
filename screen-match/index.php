<?php

require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/Modelo/Genero.php";


echo "Bem-vindo(a) ao screen match!\n";

$filme = new Filme('Thor: Ragnarok', 2022, genero::SuperHeroi);

$filme->avalia(4.9);
$filme->avalia(8.9);
$filme->avalia(3.2);
$filme->avalia(2.9);
$filme->avalia(8.9);

var_dump($filme);

echo $filme->media() . "\n";
echo $filme->anoLancamento . "\n";