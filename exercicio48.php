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
 25246927-2 - João Paulo Mayer Bera
 25001118-2 - Emanuel Gomes de Almeida
 25361613-2 - Arthur Marinho Figueira
Data: 16/09/2025
Descritivo: Exercício 48: Usa um ternário aninhado para classificar a temperatura em Frio, Agradável ou Quente.
*******************************************************************************/
echo "<h1>Exercício 48: Classificação de Temperatura</h1>";
$temperatura = 48; // Temperatura em graus Celsius
$classificacao = ($temperatura < 20) ? "Frio" : (($temperatura <= 25) ? "Agradável" : "Quente");
echo "Temperatura: $temperatura °C. Classificação: $classificacao";
?>


