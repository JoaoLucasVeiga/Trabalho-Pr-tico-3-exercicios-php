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
Descritivo: Converte graus Celsius para Fahrenheit (F = C × 9/5 + 32)

*******************************************************************************/
$celsius = 25; // exemplo: 25°C
$fahrenheit = $celsius * 9 / 5 + 32;

echo "{$celsius}°C = {$fahrenheit}°F" . PHP_EOL;
