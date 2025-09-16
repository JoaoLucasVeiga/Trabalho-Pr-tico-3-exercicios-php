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
Descritivo: Escreva um script que converta minutos em horas e minutos
*******************************************************************************/


// exercicio 10

$totalMinutos = 130; // valor em minutos
$horas = intdiv($totalMinutos, 60); // divide em horas (parte inteira)
$minutos = $totalMinutos % 60; // resto da divisão = minutos
echo "{$totalMinutos} minutos = {$horas} hora(s) e {$minutos} minuto(s)\n"; // imprime: 130 minutos = 2h 10m
?>
