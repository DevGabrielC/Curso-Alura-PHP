<?php
// Defina um array associativo que representa uma conta bancária (com titular e saldo) e exiba suas informações na tela.

$contaBancaria = [
    'titular' => "Gabriel",
    'saldo' => "500.30",
];

echo "Titular: " . $contaBancaria['titular'] . "\nSaldo em conta: R$" . $contaBancaria['saldo'] . "\n";