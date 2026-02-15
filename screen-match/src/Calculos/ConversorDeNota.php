<?php

namespace ScreenMatch\Calculos;

use ArgumentCountError;
use DivisionByZeroError;
use ScreenMatch\Modelo\Avaliavel;
use Throwable;

// Converte as notas para estrelas
class ConversorDeNota {

    public function converte(Avaliavel $avaliavel): float {
        
        try {
            $nota = $avaliavel->media();
            return round($nota) / 2;
        } catch (Throwable) {
            return 0;
        }
    }
}