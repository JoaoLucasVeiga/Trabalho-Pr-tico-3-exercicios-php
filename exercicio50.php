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
Descritivo: Crie uma expressão ternária que verifique se um ano é bissexto
*******************************************************************************/


// exercicio 50

$ano = 2000; // exemplo
$eBissexto = ($ano % 4 == 0 && ($ano % 100 != 0 || $ano % 400 == 0)) ? 'Bissexto' : 'Não bissexto';
echo "$ano: $eBissexto\n"; // 2000 - Bissexto
?>
