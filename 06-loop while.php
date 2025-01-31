<?php
/* Loop WHILE (ENQUANTO) */

// Exemplo 1: contagem de 1 até 10

 $i = 1 ; // variável de controle da iteração/repetição

while ($i <= 10){
	echo $i."\n";
	//$i = $i + 1;
	$i++; //operador de incremento ++
}

// Exemplo 2: obter/exibir nome e idade de 3 pessoas 

$contador = 1;

while ($contador <= 3){
//ENTRADAS
$nome = readline("Digite o nome:\n");
$idade = readline("Digite o idade:\n");

//SAÍDAS

echo "\n".$nome." tem ".$idade ." anos\n\n";	
echo "\n";

$contador++;
}

