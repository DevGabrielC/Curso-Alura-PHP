<?php

// Percorra um array de notas (cada uma de 0 a 10) e exiba a nota do aluno em questão com a informação se o aluno foi aprovado ou não.
// Se a nota for maior do que 6, o aluno foi aprovado. Caso contrário, foi reprovado.

$notas = [3, 6.1, 8.9, 3, 4.9, 2.4, 9.3, 10, 6, 8.7];

for($i =0; $i < count($notas); $i++) {
    if ($notas[$i] > 6) {
        echo "Aluno aprovado!\n";
    } else {
        echo "Aluno reprovado!\n";
    }
}