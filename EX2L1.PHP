<?php
function verificarDivisibilidade($numero) {
    // Verifica se o número é divisível por 10, 5 e 2 simultaneamente
    if ($numero % 10 == 0 && $numero % 5 == 0 && $numero % 2 == 0) {
        echo "$numero é divisível por 5, 10 e 2.";
    } elseif ($numero % 10 == 0) {
        echo "$numero é divisível apenas por 10.";
    } elseif ($numero % 5 == 0) {
        echo "$numero é divisível apenas por 5.";
    } elseif ($numero % 2 == 0) {
        echo "$numero é divisível apenas por 2.";
    } else {
        echo "$numero não é divisível por 5, 10 ou 2.";
    }
}

$numero = 10;

verificarDivisibilidade($numero);
?>
