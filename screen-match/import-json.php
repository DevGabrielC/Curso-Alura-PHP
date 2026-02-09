<?php

$caminhoArquivo = __DIR__ . "/filme.json";

$arquivoJson = file_get_contents($caminhoArquivo);
$filme = json_decode($arquivoJson, true);

var_dump($filme);