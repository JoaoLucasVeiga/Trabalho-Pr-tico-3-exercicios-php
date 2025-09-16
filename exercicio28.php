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


