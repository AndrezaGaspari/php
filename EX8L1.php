<?php
// Le o número
$numero = 3; 

// Inicializa o produto como 1
$produto = 2;

// Mostra todos os números de 1 até o número fornecido e calcular o produto
for ($i = 1; $i <= $numero; $i++) {
    echo "$i "; // Imprime o número
    $produto *= $i; // Calcula o produto
}

// Mostra o produto final
echo "\nO produto de 1 até $numero é: $produto";
?>
