<?php
$numero = 17; // Altere para testar
$divisores = 0;

if ($numero <= 1) {
    $divisores = 1; // Força a condição de não-primo
} else {
    for ($i = 2; $i * $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            $divisores++;
            break; // Se achou divisor, interrompe
        }
    }
}

if ($divisores == 0) {
    echo "$numero é primo.";
} else {
    echo "$numero não é primo.";
}


?>