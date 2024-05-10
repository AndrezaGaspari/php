<?php
// ex3 Entrar com nome, sexo e idade de uma pessoa. 
//Se a pessoa for do sexo feminino e tiver menos que 25 anos,
 //imprimir nome e a a mensagem: ACEITA. Caso contrário, imprimir nome e a mensagem: NÃO ACEITA.
 
// Função para verificar se uma pessoa é aceita com base no sexo e idade
function verificarAceitacao($nome, $sexo, $idade) {
    if ($sexo == 'feminino' && $idade < 25) {
        echo "$nome ACEITA";
        ?><br /><?php
    } else {
        echo "$nome NÃO ACEITA";
        ?><br /><?php
    }
}

function verificarAceitacao2($nome2, $sexo2, $idade2) {
    if ($sexo2 == 'feminino' && $idade2 < 25) {
       
        echo "$nome2 ACEITA";
        ?><br /><?php
    } else {
        echo "$nome2 NÃO ACEITA";
        ?><br /><?php
    }
}

// DADOS INCLUIDOS
$nome = "Maria";
$sexo = "feminino";
$idade = 29;


$nome2 = "Maria";
$sexo2 = "feminino";
$idade2 = 22;

// Chamando a função para verificar a aceitação
verificarAceitacao($nome, $sexo, $idade);

verificarAceitacao($nome2, $sexo2, $idade2);
?>
