<?php

require 'autoload.php';

use ScreenMatch\Modelo\{Episodio, Filme, Genero, Serie};
use ScreenMatch\Calculos\{CalculadoraDeMaratona, ConversorDeNota};

echo "Bem-vindo(a) ao screen match!\n";

$filme = new Filme('Thor: Ragnarok', 2022, genero::SuperHeroi, 180);

$filme->avalia(4.9);
$filme->avalia(8.9);
$filme->avalia(3.2);
$filme->avalia(2.9);
$filme->avalia(8.9); 
$filme->avalia(8.9); 
$filme->avalia(8.9); 
$filme->avalia(2); 
$filme->avalia(8.9); 

var_dump($filme);

echo $filme->media() . "\n";
echo $filme->anoLancamento . "\n";

$serie = new Serie('Lost', 2007, Genero::Drama, 10, 20, 30);
$episodio = new Episodio($serie, 'Episódio piloto', 1);
echo $serie->anoLancamento . "\n";

$serie->avalia(8);

echo $serie->media() . "\n";

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

echo "Para essa maratona, você precisa de $duracao minutos\n";

$conversor = new ConversorDeNota();
echo $conversor->converte($serie) . "\n";
echo $conversor->converte($filme) . "\n";