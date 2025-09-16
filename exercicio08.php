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

