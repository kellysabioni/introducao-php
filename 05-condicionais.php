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

//teste
//echo "\n".$opcao;

// Condicional encadeada
if($opcao == 1){
	$acao = "Legal, o que deseja saber? 😊";
} elseif ($opcao == 2){
	$acao = "Puxa, que pena... O que houve? 😢";	
} elseif ($opcao == 3){
	$acao = "Bacana! Pode falar 💕";	
} elseif ($opcao == 4){
	$acao = "Ok, um momento... ⏳";	
} else{
	$acao = "Não entendi... vou chamar um atendente. 🤔";
}
echo "\n------------------------------\n";
echo $acao; 
echo "\n------------------------------\n";
