<?php
// ex 5 Ler 3 números, os possíveis lados de um triângulo,
// e imprimir a classificação de acordo com tamanho dos lados
function classificarTriangulo($lado1, $lado2, $lado3) {
    if ($lado1 == $lado2 && $lado2 == $lado3) {
        echo "Triângulo Equilátero";
    } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
        echo "Triângulo Isósceles";
    } else {
        echo "Triângulo Escaleno";
    }
}

// Entrada dos lados do triângulo
$lado1 = 5;
$lado2 = 5;
$lado3 = 5;

// Chama a função para classificar o triângulo e mostra o resultado
echo "Lados: $lado1, $lado2, $lado3 - ";
classificarTriangulo($lado1, $lado2, $lado3);
?>
