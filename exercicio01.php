<?php
// Entradas
$curso = readline("Qual curso? ");
$cargaHoraria = readline("Qual CH? ");

// Processamento
$faltasPermitidas = $cargaHoraria * 0.25;

// Saída
// echo $curso, $cargaHoraria, $faltasPermitidas;

// Saída concatenada
// echo "O curso de ".$curso." possui carga horária de ".$cargaHoraria."h com limite de faltas de ".$faltasPermitidas."h.";

// Saída concatenada por partes
echo "\nCurso: ".$curso."\n";
echo "\nCarga horária: ".$cargaHoraria."h \n";
echo "Limite de faltas: ".$faltasPermitidas."h";

// \n é usado para criar "quebras", ou "novas linhas" dentro de uma saída de texto.

