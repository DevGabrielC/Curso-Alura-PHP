<?php 

// Crie um programa que converta a string '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}' em um objeto.

$stringJson = '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}';
$arquivoConvertido = json_decode($stringJson);

var_dump($arquivoConvertido);