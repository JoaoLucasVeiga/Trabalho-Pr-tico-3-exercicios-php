<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: José Carlos Domingues Flores
Turma: ESOFT-2B
Componentes:
 [RA DO JOÃO LUCAS] - João Lucas Veiga de Carvalho
 [RA DO RAFAEL] - Rafael maia
 [RA DO GABRIEL] - Gabriel Michels Cubas
 [RA DO JOÃO PAULO] - João Paulo Mayer
 [RA DO EMANUEL] - Emanuel Gomes de Almeida
Data: 16/09/2025
Descritivo: Exercício 48: Usa um ternário aninhado para classificar a temperatura em Frio, Agradável ou Quente.
*******************************************************************************/
echo "<h1>Exercício 48: Classificação de Temperatura</h1>";
$temperatura = 48; // Temperatura em graus Celsius
$classificacao = ($temperatura < 20) ? "Frio" : (($temperatura <= 25) ? "Agradável" : "Quente");
echo "Temperatura: $temperatura °C. Classificação: $classificacao";
?>
