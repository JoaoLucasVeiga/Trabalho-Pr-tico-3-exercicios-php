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
Descritivo: Exercício 18: Programa que verifica se duas variáveis são idênticas (mesmo valor e tipo) usando o operador ===.
*******************************************************************************/

echo "<h1>Exercício 18: Verificador de Identidade (===)</h1>";

// --- Teste 1: Variáveis que SÃO idênticas ---
echo "<h2>Teste 1: Valor e Tipo Iguais</h2>";
$varA = 100;
$varB = 100;

echo "Variável A: ";
var_dump($varA); // var_dump mostra o valor e o tipo
echo "<br>";
echo "Variável B: ";
var_dump($varB);
echo "<br><br>";

if ($varA === $varB) {
    echo "<strong>Resultado:</strong> As variáveis A e B SÃO idênticas.";
} else {
    echo "<strong>Resultado:</strong> As variáveis A e B NÃO são idênticas.";
}

echo "<hr>"; // Linha para separar os testes

// --- Teste 2: Variáveis que NÃO SÃO idênticas ---
echo "<h2>Teste 2: Valor Igual, Mas Tipos Diferentes</h2>";
$varC = 50;
$varD = "50"; // Este é um texto (string)

echo "Variável C: ";
var_dump($varC);
echo "<br>";
echo "Variável D: ";
var_dump($varD);
echo "<br><br>";

if ($varC === $varD) {
    echo "<strong>Resultado:</strong> As variáveis C e D SÃO idênticas.";
} else {
    echo "<strong>Resultado:</strong> As variáveis C e D NÃO são idênticas, pois uma é um número (int) e a outra é um texto (string).";
}

?>