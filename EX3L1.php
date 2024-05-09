<?php
// Função para verificar se uma pessoa é aceita com base no sexo e idade
function verificarAceitacao($nome, $sexo, $idade) {
    if ($sexo == 'feminino' && $idade < 25) {
        echo "$nome ACEITA";
    } else {
        echo "$nome NÃO ACEITA";
    }
}

// Entrada de dados
$nome = "Maria";
$sexo = "feminino";
$idade = 23;

// Chamando a função para verificar a aceitação
verificarAceitacao($nome, $sexo, $idade);
?>
