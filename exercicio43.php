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
Descritivo: Exercício 43: Usa o operador ternário para verificar se uma pessoa pode votar (idade >= 16).
*******************************************************************************/
echo "<h1>Exercício 43: Verificação de Elegibilidade para Voto</h1>";
$idade = 15; // Idade da pessoa
$elegivel_para_votar = ($idade >= 16) ? "Sim, pode votar." : "Não, não pode votar.";
echo "Idade: $idade anos. Elegível para votar? $elegivel_para_votar";
?>
