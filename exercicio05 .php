<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2B
Componentes:
 25001118-2 - Emanuel Gomes de Almeida
 25164719-2 - Rafael Maia
 25033056-2 - Gabriel Michels Cubas
 25291090-2 - João Lucas Veiga de Carvalho
 25361613-2 - Arthur Marinho Figueira
 25246927-2 - João Paulo Mayer Bera
Data: 16 de Setembro de 2025
Descritivo: Crie um programa que eleve 4 à potência de 3
*******************************************************************************/

// exercicio 05

// Define a base da potência (número que será elevado)
$base = 4;

// Define o expoente (quantas vezes a base será multiplicada por ela mesma)
$expoente = 3;
$result = pow($base, $expoente); 

// Exibe o resultado na tela
// As variáveis dentro das aspas duplas são interpretadas automaticamente
// "\n" serve para pular uma linha (no terminal funciona, no navegador quase não aparece)
echo "$base elevado a $expoente = $result\n"; // imprime 64
?>
