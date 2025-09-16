<?php

/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2B
Componentes:
 25001118-2 - Emanuel Gomes de Almeida
 25164719-2 - Rafael Maia
 25033056-2 - Gabriel Michels Cubas
 25291090-2 - João Lucas Veiga de Carvalho
 25361613-2 - Arthur Marinho Figueira
 25246927-2 - João Paulo Mayer Bera
Data: 16 de Setembro de 2025
Descritivo: Compare se "10" (string) é igual a 10 (número)
*******************************************************************************/

// exercicio 25

$str = "10"; // string
$num = 10; // número inteiro

echo 'Usando == : ';
echo ($str == $num) ? "Igual (mesmo valor)\n" : "Diferente\n"; // compara só o valor - Igual

echo 'Usando === : ';
echo ($str === $num) ? "Idêntico (mesmo tipo e valor)\n" : "Não idêntico\n"; // compara valor e tipo - Não idêntico
?>
