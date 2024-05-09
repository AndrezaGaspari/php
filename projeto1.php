<?php
// Função para calcular a adição de acordo com as regras especificadas
function calcularSoma($numero1, $numero2) {
    $soma = $numero1 + $numero2;

    if ($soma > 20) {
        $soma += 8;
    } else {
        $soma -= 5;
    }

    return $soma;
}

// Números a serem somados
$numero1 = 10;
$numero2 = 15;

// Chamando a função e exibindo o resultado
$resultado = calcularSoma($numero1, $numero2);
echo "O resultado da soma é: $resultado";
?>
