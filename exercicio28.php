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
Descritivo: Exercício 28: Programa que verifica se um número é par e positivo ao mesmo tempo.
*******************************************************************************/
echo "<h1>Exercício 28: Verificando se um número é par e positivo</h1>";
$numero = 3; // Você pode alterar este valor para testar outros números
if ($numero > 0 && $numero % 2 == 0) {
    echo "O número $numero é par e positivo.";
} else {
    echo "O número $numero não é par e positivo.";
}
?>
