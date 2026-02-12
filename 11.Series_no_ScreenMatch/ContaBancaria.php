<?php

// Crie uma classe ContaBancaria com métodos para realizar operações bancárias como depositar(), sacar() e consultarSaldo(). Em seguida, crie uma subclasse ContaCorrente que herda da classe ContaBancaria. Adicione um método específico para a subclasse, como cobrarTarifaMensal(), que desconta uma tarifa mensal da conta corrente.

class ContaBancaria {
    private int $saldo;

    public function sacar(int $valorASacar): void {
        if ($valorASacar > 0 && $this->saldo >= $valorASacar) {
            $this->saldo -= $valorASacar;
        }
    }

    public function depositar(int $valorADepositar): void {
        if ($valorADepositar > 0) {
            $this->saldo += $valorADepositar;
        }
    }
    public function consultarSaldo(): float {
            return $this->saldo;
        }
}