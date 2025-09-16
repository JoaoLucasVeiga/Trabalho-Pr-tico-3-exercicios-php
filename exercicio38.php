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
Descritivo: Exercício 38: Converte uma temperatura entre Celsius e Fahrenheit, baseado na escolha da unidade de origem.
*******************************************************************************/
echo "<h1>Exercício 38: Conversão de Temperatura entre Celsius e Fahrenheit</h1>";
$temperatura = 120; // Temperatura a ser convertida
$unidade_origem = 'F'; // 'C' para Celsius, 'F' para Fahrenheit
if ($unidade_origem == 'C') {
    // Converter de Celsius para Fahrenheit
    $temperatura_convertida = ($temperatura * 9/5) + 32;
    $unidade_destino = 'F';
} elseif ($unidade_origem == 'F') {
    // Converter de Fahrenheit para Celsius
    $temperatura_convertida = ($temperatura - 32) * 5/9;
    $unidade_destino = 'C';
} else {
    echo "Unidade de origem inválida. Use 'C' para Celsius ou 'F' para Fahrenheit.";
    exit;
}
echo "$temperatura °$unidade_origem é igual a $temperatura_convertida °$unidade_destino.";
?>

