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
            /*RA: 25191112-2 - João Paulo Mayer
Data: 16 de Setembro de 2025
Descritivo: Descritivo: Verifica se três comprimentos formam um triângulo válido

*******************************************************************************/
$a = 3;
$b = 4;
$c = 5;

if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
    echo "Lados {$a}, {$b}, {$c} formam um triângulo válido." . PHP_EOL;
} else {
    echo "Lados {$a}, {$b}, {$c} NÃO formam um triângulo válido." . PHP_EOL;
}