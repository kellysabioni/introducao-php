<?php
/* Condicionais: se, então, senão, senao se, fim-se*/

/* Protótipo de chatbot */

echo "\n *** Chatbot da empresa Biribinha Tecnologia ***\n";
echo "Opções disponíveis: \n\n";
echo "1 -> Informações\n";
echo "2 -> Reclamação\n";
echo "3 -> Elogios\n";
echo "4 -> Status\n";

echo "\n";

$opcao = readline("Digite uma opção: ");

// Condicional encadeada SWITCH CASE
//switch ($opcao) {
//    case 1:
//        echo "\nLegal, o que deseja saber? 😊";
//        break;
//    case 2:
//        echo "\nPuxa, que pena... O que houve? 😢";
//        break;
//    case 3:
//        echo "\nBacana! Pode falar 💕";
//        break;
//    case 4:
//        echo "\nOk, um momento... ⏳";
//        break;
//    default:
//        echo "\nNão entendi... vou chamar um atendente. 🤔";
//        break;
//}

// Condicional encadeada SWITCH CASE
switch ($opcao) {
    case 1:
        $acao = "Legal, o que deseja saber? 😊";
        break;
    case 2:
        $acao = "Puxa, que pena... O que houve? 😢";
        break;
    case 3:
        $acao = "Bacana! Pode falar 💕";
        break;
    case 4:
        $acao = "Ok, um momento... ⏳";
        break;
    default:
        $acao = "Não entendi... vou chamar um atendente. 🤔";
        break;
}

echo "\n------------------------------\n";
echo $acao; 
echo "\n------------------------------\n";
