<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: José Carlos Domingues Flores
Turma: ESOFT-2B
Componentes:
 25291090-2 - João Lucas Veiga de Carvalho
 25164719-2 - Rafael maia
 25033056-2 - Gabriel Michels Cubas
 [RA DO JOÃO PAULO] - João Paulo Mayer
 25001118-2 - Emanuel Gomes de Almeida
 25361613-2  - Arthur Marinho Figueira
Data: 16/09/2025
Descritivo: Exercício 6: Faça um script que calcule a média de 3 números
*******************************************************************************/
$num1 = 8;
$num2 = 6;
$num3 = 10;

$media = ($num1 + $num2 + $num3) / 3;

echo "Os números são: $num1, $num2 e $num3<br>";
echo "A média é: " . number_format($media, 2, ',', '.');
?>