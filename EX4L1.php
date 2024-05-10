<?php
// ex 4 Entrar com 3 números e imprimi-los em ordem decrescente (suponha números diferentes)
function ordenarDecrescente($num1, $num2, $num3) {
    // Variáveis para armazenar os números 
    $primeiro = $num1;
    $segundo = $num2;
    $terceiro = $num3;

    // Comparando os números e fazendo a ordem
    if ($segundo > $primeiro) { // Verifica se o segundo número é maior que o primeiro
        $temp = $primeiro; // Armazena temporariamente o primeiro número em uma variável temporária
        $primeiro = $segundo; // Atribui o segundo número à variável do primeiro
        $segundo = $temp; // Atribui o número armazenado temporariamente à variável do segundo
    }
    if ($terceiro > $primeiro) { // Verifica se o terceiro número é maior que o primeiro
        $temp = $primeiro; // Armazena temporariamente o maior número em uma variável temporária
        $primeiro = $terceiro; // Atribui o terceiro número à variável do primeiro
        $terceiro = $temp; // Atribui o número armazenado temporariamente à variável do terceiro
    }
    if ($terceiro > $segundo) { // Verifica se o terceiro número é maior que o segundo
        $temp = $segundo; // Armazena temporariamente o segundo número em uma variável temporária
        $segundo = $terceiro; // Atribui o terceiro número à variável do segundo
        $terceiro = $temp; // Atribui o número armazenado temporariamente à variável do terceiro
    }

    // Retorna os números 
    return array($primeiro, $segundo, $terceiro);
}

// Entrada dos números
$num1 = 10;
$num2 = 5;
$num3 = 8;

// Chama a função para organizar os números e mostra o resultado
list($maior, $meio, $menor) = ordenarDecrescente($num1, $num2, $num3);
echo "Ordem decrescente: $maior, $meio, $menor";
?>
