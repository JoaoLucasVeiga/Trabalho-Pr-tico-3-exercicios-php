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
Descritivo: Exercício 46 Crie uma expressão ternária que retorne "Maioridade" ou "Menoridade" baseado na idade
*******************************************************************************/
$idade = 27; 

$resultado = ($idade >= 18) ? "maioridade" : "menoridade";

echo "Idade: $idade anos - $resultado";

?>
