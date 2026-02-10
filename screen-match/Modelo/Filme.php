<?php

class Filme {
    private string $nome = "Nome padrão";
    private int $anoLancamento = 2022;
    private string $genero = "Gênero padrão";
    private float $media;
    private array $notas = [];


    public function avalia(float $nota): void {
        $this->notas[] = $nota;
    }

    public function media(): float {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }

    public function anoLancamento(): int {
        return $this->anoLancamento;
    }
    
    public function defineAnoLancamento(int $anoLancamento): void {
        $this->anoLancamento = $anoLancamento;
    }

    public function nome(): string {
        return $this->nome;
    }

    public function genero (): string{
        return $this->genero;
    }
}