<?php
// Palavra fornecida pelo usuário
$palavra = "SONHO";

// Loop para imprimir a palavra repetidamente
for ($i = 1; $i <= 4; $i++) {
    // Imprime a palavra repetida $i vezes
    for ($j = 0; $j < $i; $j++) {
        echo $palavra . " ";
    }
    echo "\n";
    
}



?>
