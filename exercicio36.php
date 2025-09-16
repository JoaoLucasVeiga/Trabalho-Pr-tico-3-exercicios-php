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
Descritivo: Exercício 36 Escreva um código que calcule o IMC e classifique o resultado
*******************************************************************************/
$peso = 30;   // em kg
$altura = 1.75; // em metros

$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    $classificacao = "Abaixo do peso";
} elseif ($imc < 24.9) {
    $classificacao = "Peso normal";
} elseif ($imc < 29.9) {
    $classificacao = "Sobrepeso";
} elseif ($imc < 34.9) {
    $classificacao = "Obesidade Grau I";
} elseif ($imc < 39.9) {
    $classificacao = "Obesidade Grau II";
} else {
    $classificacao = "Obesidade Grau III";
}

echo "Peso: $peso kg<br>";
echo "Altura: $altura m<br>";
echo "IMC: " . number_format($imc, 2, ',', '.') . "<br>";
echo "Sua classificação é: $classificacao";
?>