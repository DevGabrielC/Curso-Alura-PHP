<?php

require __DIR__ . "/funcoes.php";

$nomeFilme = "Thor: Ragnarok";
$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "Se beber, não case";
$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($i = 1; $i < $argc; $i++) {
    $notas[] = (float) $argv[$i];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = incluidoNoPlano ($planoPrime, $anoLancamento);

echo "Bem-vindo(a) ao screen match!\n";
echo "Nome do filme: $nomeFilme\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento\n";

exibeMensagemLancamento($anoLancamento);

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "Ação",
    "Thor: Ragnarok" => "Super-herói",
    "Se beber, não case" => "Comédia",
    default => "Gênero desconhecido"
};

echo "O gênero do filme é: $genero\n";

$filme = [
    'nome' => "Thor: Ragnarok",
    'ano' => 2022,
    'nota' => 6.73,
    'genero' => "Comédia",
];

echo $filme['nome'];

var_dump($notas);
sort($notas);
var_dump($notas);
$menorNota = min($notas);

var_dump($filme['nome']);
$posicaoDoisPontos = (strpos($filme['nome'], ':'));
var_dump($posicaoDoisPontos);

var_dump(substr($filme['nome'], 0, $posicaoDoisPontos));