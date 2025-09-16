<?php
/******************************************************************************

Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2B
Componentes: 
            RA: 25291090-2 - João Lucas Veiga de Carvalho
            RA: 25033056-2 - Gabriel Michels Cubas
            RA: 25361613-2 - Arthur Marinho Figueira
            RA: 25164719-2 - Rafael Maia
            RA: 25001118-2 - Emanuel Gomes de Almeida           
            RA: 25246927-2 - João Paulo Mayer
Data: 16 de Setembro de 2025
Descritivo: Descritivo: Expressão ternária que retorna "Par" ou "Ímpar" baseado em um número

*******************************************************************************/
$num = 11;
$res = ($num % 2 === 0) ? "Par" : "Ímpar";

echo "{$num} é {$res}" . PHP_EOL;
