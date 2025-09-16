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
Descritivo: Exercício 23: Programa que verifica se o número 0 é idêntico ao booleano 'false'.
*******************************************************************************/

echo "<h1>Exercício 23: Verificando se 0 é idêntico a false</h1>";

// Define as duas variáveis para a comparação
$valorA = 0;
$valorB = false;

// Mostra o valor e o tipo de cada variável usando var_dump
echo "Analisando as variáveis:";
echo "<br>";
echo "Variável A: ";
var_dump($valorA);
echo "<br>";
echo "Variável B: ";
var_dump($valorB);
echo "<hr>";

// --- Teste de IDENTIDADE com === ---
echo "<h2>1. Teste de Identidade (===)</h2>";
echo "<p>Este operador verifica se o VALOR <strong>E</strong> o TIPO são iguais.</p>";

if ($valorA === $valorB) {
    echo "<strong>Resultado:</strong> 0 E 'false' SÃO idênticos.";
} else {
    echo "<strong>Resultado:</strong> 0 E 'false' NÃO SÃO idênticos, pois um é do tipo 'integer' e o outro é do tipo 'boolean'.";
}

echo "<hr>";

// --- Teste de IGUALDADE com == (apenas para demonstração) ---
echo "<h2>2. Teste de Igualdade (==)</h2>";
echo "<p>Este operador verifica apenas se o VALOR é igual, ignorando o tipo.</p>";

if ($valorA == $valorB) {
    echo "<strong>Resultado:</strong> 0 E 'false' SÃO considerados iguais em valor.";
} else {
    echo "<strong>Resultado:</strong> 0 E 'false' NÃO são considerados iguais em valor.";
}

?>