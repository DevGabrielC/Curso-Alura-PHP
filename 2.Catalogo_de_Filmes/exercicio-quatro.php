<?php

$ano = 2100;

if (($ano % 4 == 0 && $ano % 400 == 0) || $ano % 100 != 0) {
    echo "Esse ano é bissexto!";
} else {
    echo "Esse ano não é bissexto";
}