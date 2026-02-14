<?php

namespace ScreenMatch\Calculos;

use ScreenMatch\Modelo\Avaliavel;

// Converte as notas para estrelas
class ConversorDeNota {

    public function converte(Avaliavel $avaliavel): float {
        $nota = $avaliavel->media();

        return round($nota) / 2;
    }
}