<?php
// ex 6 Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. 
//Caso o número seja fora desse intervalo, 
//informar que não existe mês com este número
function obterMes($numero) {
    switch ($numero) {
        case 1:
            echo "Janeiro";
            break;
        case 2:
            echo "Fevereiro";
            break;
        case 3:
            echo "Março";
            break;
        case 4:
            echo "Abril";
            break;
        case 5:
            echo "Maio";
            break;
        case 6:
            echo "Junho";
            break;
        case 7:
            echo "Julho";
            break;
        case 8:
            echo "Agosto";
            break;
        case 9:
            echo "Setembro";
            break;
        case 10:
            echo "Outubro";
            break;
        case 11:
            echo "Novembro";
            break;
        case 12:
            echo "Dezembro";
            break;
        default:
            echo "Não existe mês com este número";
    }
}

// Ler o número do mês
$numero = 5; // Exemplo com o número 5 (maio)

// Chama a função para obter o mês correspondente e imprime o resultado
echo "Número: $numero - ";
obterMes($numero);
?>
