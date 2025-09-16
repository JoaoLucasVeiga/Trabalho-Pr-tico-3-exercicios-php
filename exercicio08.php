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
Descritivo: Exercício 8: Programa que calcula a área de um círculo (πr²).
*******************************************************************************/

// Defina o valor do raio do círculo. Você pode alterar este número para testar.

$raio = 10;
// Calcula a área. 
// M_PI é uma constante interna do PHP que contém o valor de Pi (π).
// A operação ($raio * $raio) calcula o raio ao quadrado (r²).
$area = M_PI * ($raio * $raio);

// Exibe os resultados na tela.
// A função number_format() é usada para formatar o resultado com 2 casas decimais.
echo "Exercício 8: Cálculo da área de um círculo";
echo "<br><br>"; // Pula duas linhas para organizar
echo "O raio informado é: " . $raio;
echo "<br>";
echo "A área do círculo é: " . number_format($area, 2, ',', '.');
?>