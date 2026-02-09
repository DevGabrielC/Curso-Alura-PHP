<?php

// Escreva um programa em PHP que abra um arquivo chamado teste.txt para ler a primeira linha e depois o fecha.

$arquivoAberto = fopen(__DIR__ . '/teste-um.txt', 'r');
$lerLinha = fgets($arquivoAberto);
fclose($arquivoAberto);