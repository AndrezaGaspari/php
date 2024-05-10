<?php
// Definindo a função para imprimir o recibo de empréstimo
function imprimirRecibo($livro, $tipoUsuario) {
    // Determinando o prazo de devolução com base no tipo de usuário
    if ($tipoUsuario == 'professor') {
        $prazoDevolucao = 10;
    } else {
        $prazoDevolucao = 3;
    }
    
    
    // mostrando o cabeçalho do recibo
    echo "Recibo de Empréstimo\n";
    ?><br /><?php
    // mostrando o nome do livro
    echo "Livro: $livro\n";
    ?><br /><?php
    // mostrando o tipo de usuário
    echo "Tipo de Usuário: $tipoUsuario\n";
    ?><br /><?php
    // mostrando  o prazo de devolução
    echo "Prazo de Devolução: $prazoDevolucao dias\n";
    ?><br /><?php
}

// Entrada do nome do livro e do tipo de usuário
$livro = "Dom Casmurro"; // Nome do livro
$tipoUsuario = "professor"; // Tipo de usuário professor ou aluno

// Chama a função para imprimir o recibo de empréstimo
imprimirRecibo($livro, $tipoUsuario);
?>
