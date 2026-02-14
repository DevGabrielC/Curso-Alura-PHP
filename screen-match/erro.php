<?php

use ScreenMatch\Calculos\ConversorDeNota;
use ScreenMatch\Modelo\Episodio;
use ScreenMatch\Modelo\Genero;
use ScreenMatch\Modelo\Serie;

require 'autoload.php';

$serie = new Serie('Série foda', 2024, Genero::Acao, 10, 20, 40);
$episodio = new Episodio($serie, 'Piloto', 1);

$conversor = new ConversorDeNota();
echo $conversor->converte($episodio) . "\n";