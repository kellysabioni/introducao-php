<?php
/* Loop DO/WHILE (semelhante ao REPITA) */

$contador = 1;

do {
	$numero = readline("Informe número: ");
	$resultado = $numero * 3;
	
	echo "\n".$resultado."\n\n";
	
	$contador++;
} while ($contador <= 3);





