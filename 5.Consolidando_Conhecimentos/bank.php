<?php

// Criar uma aplicação CLI de banco, com funções para fazer depósito, saque, condições para fazer e ações de Consultar saldo atual, Sacar, Depositar e sair da aplicação.

$titular = "Gabriel Alves";
$saldoAtual = 0;

echo "***********************************\n";
echo "Titular: $titular\n";
echo "Saldo atual: R$" . number_format($saldoAtual, 2) . "\n";
echo "***********************************\n";

do {
    echo  "1. Consultar saldo atual\n"
    . "2. Sacar\n"
    . "3. Depositar\n"
    . "4. Sair\n"
    . "Digite uma opção: ";
$opcao = (float) trim(fgets(STDIN));

    switch ($opcao) {    
        case '1':
            echo "R$" . number_format($saldoAtual, 2) . "\n";
            break;
        case '2':
            echo "Digite o valor do saque: ";
            $valorSaque = (float) fgets(STDIN);
            $saldoAtual = sacar($valorSaque, $saldoAtual);
            echo "Saque realizado com sucesso!\n";
            echo "Valor do saque: R$" . number_format($valorSaque, 2) . "\n";
            echo "Saldo atual: R$" . number_format($saldoAtual, 2) . "\n";
            break;
        case '3':
            echo "Digite o valor do depósito: ";
            $valorDeposito = (float) fgets(STDIN);
            $saldoAtual = depositar($valorDeposito, $saldoAtual);
            echo "Depósito realizado com sucesso!\n";
            echo "Valor do depósito: R$" . number_format($valorDeposito, 2) . "\n";
            echo "Saldo atual: R$" . number_format($saldoAtual, 2) . "\n";
            break;
        case '4':
            echo "Saindo da aplicação.. Até mais.\n";
            exit;
        default:
            echo "Opção inválida.\n";
            break;
    }
} while ($opcao != 4);

function sacar(float $valorSaque, float $saldoAtual) {
    if ($valorSaque <= 0) {
        echo "Valor incorreto.\n";
        return $saldoAtual;
}
    if ($valorSaque > $saldoAtual) {
        echo "Saldo insuficiente\n";
        return $saldoAtual;
    }
    $saldoAtual -= $valorSaque;
    return $saldoAtual;
    }

function depositar(float $valorDeposito, float $saldoAtual) {
    if ($valorDeposito <= 0) {
        echo "Valor incorreto.\n";
        return $saldoAtual;
    }
    
    $saldoAtual += $valorDeposito;
    return $saldoAtual;
}