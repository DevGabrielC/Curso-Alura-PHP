<?php

// Escreva um programa em PHP que abra o arquivo teste.txt, acrescente a frase "PHP é incrível!" no final do arquivo e depois o feche.

$caminhoTexto = "teste-dois.txt";
$novaFrase = "\nPHP é incrível!";

$arquivoAberto = fopen($caminhoTexto, 'a');
fwrite($arquivoAberto, $novaFrase);
fclose($arquivoAberto);