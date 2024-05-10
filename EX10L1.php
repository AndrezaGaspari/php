<?php
// Array com os 20 números 
$numeros = [1, -2, 3, -4, 5, 6, -7, 8, 9, -10, 11, -12, 13, 14, -15, 16, 17, -18, 19, -20];

// Inicializa as variáveis de soma e contagem
$somaPositivos = 0; // Inicializa a soma dos números positivos como zero
$totalNegativos = 0; // Inicializa o total de números negativos como zero

// acrescenta sobre os números para calcular a soma dos positivos e o total de negativos
for ($i = 0; $i < count($numeros); $i++) {
    // Verifica se o número atual é positivo
    if ($numeros[$i] > 0) {
        // Se for positivo, adiciona o número à soma dos positivos
        $somaPositivos += $numeros[$i];
    } elseif ($numeros[$i] < 0) {
        // Se for negativo, incrementa o total de números negativos
        $totalNegativos++;
    }
}

// Imprime a soma dos positivos e o total de negativos
echo "A soma dos números positivos é: $somaPositivos\n";
echo "O total de números negativos é: $totalNegativos\n";
?>
