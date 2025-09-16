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
Descritivo: Exercício 43: Usa o operador ternário para verificar se uma pessoa pode votar (idade >= 16).
*******************************************************************************/
echo "<h1>Exercício 43: Verificação de Elegibilidade para Voto</h1>";
$idade = 15; // Idade da pessoa
$elegivel_para_votar = ($idade >= 16) ? "Sim, pode votar." : "Não, não pode votar.";
echo "Idade: $idade anos. Elegível para votar? $elegivel_para_votar";
?>


