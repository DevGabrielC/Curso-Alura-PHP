<?php
// Desenvolva um programa que exiba na tela uma saudação (bom dia, boa tarde ou boa noite) dependendo do horário encontrado em uma variável (inteiro representando as horas).

$hora = 4;

if ($hora > 4 && $hora < 12) {
    echo "Bom dia!\n";
} elseif ($hora >= 12 && $hora < 18) {
    echo "Boa tarde!\n";
} else {
    echo "Boa noite!\n";
}