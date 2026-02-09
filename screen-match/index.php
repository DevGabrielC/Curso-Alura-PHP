<?php

require __DIR__ . "/src/funcoes.php";

$nomeFilme = "Top Gun - Maverick";
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

$filme = criaFilme (nome: "Thor: Ragnarok",
                    anoLancamento: 2022,
                    notaAvaliacao: 5.9,
                    genero: "Super-herói");

echo $filme['ano'] . "\n";

var_dump($notas);
sort($notas);
var_dump($notas);
$menorNota = min($notas);

var_dump($filme['nome']);
$posicaoDoisPontos = (strpos($filme['nome'], ':'));
var_dump($posicaoDoisPontos);

var_dump(substr($filme['nome'], 0, $posicaoDoisPontos));

$filmeComoStringJson = json_encode($filme);
file_put_contents(__DIR__ . '/filme.json', $filmeComoStringJson);