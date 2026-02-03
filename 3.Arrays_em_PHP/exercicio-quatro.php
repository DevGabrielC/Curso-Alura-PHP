<?php
// Crie um array contendo nomes de familiares seus e após sua criação adicione mais elementos ao array.

$familiares = ["Luciane", "Lucas", "Samuel"];
$outrosFamiliares = ["Matheus", "Guilherme", "Marcelo", "Carla", "Lucio"];

$totalFamiliares = array_merge(($familiares), $outrosFamiliares);

echo "Meus familiares são ";
foreach ($totalFamiliares as $familia) {
    echo $familia . "\n";
}