<?php
// Número fornecido pelo usuário
$numero = 3; // ex 3

// Loop para imprimir a tabuada do número fornecido
for ($i = 1; $i <= 10; $i++) {
    $produto = $numero * $i; // Calcula o produto
    echo "$numero x $i = $produto\n"; // Imprime a tabuada
    ?><br /><?php
}
?>
