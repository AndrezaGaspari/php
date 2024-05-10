<?php
//ex1 Construir um algoritmo que leia 2 números e efetue a adição. 
//Caso o valor somado seja maior que 20, este deverá ser apresentando somando-se a ele mais 8;
 //caso o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5.
 
// Calculando a adição de acordo com as regras que o proff deu
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

// Chamando a função para exibir o resultado
$resultado = calcularSoma($numero1, $numero2);
echo "O resultado da soma é: $resultado";
?>
