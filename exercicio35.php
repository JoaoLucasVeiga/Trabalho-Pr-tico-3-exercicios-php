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
Descritivo: Faça um programa que mostre mensagem diferente para manhã, tarde e noite
*******************************************************************************/


// exercicio 35

$hora = 21; 

if ($hora >= 6 && $hora < 12) {
    echo "Bom dia\n";
} elseif ($hora >= 12 && $hora < 18) {
    echo "Boa tarde\n";
} else {
    echo "Boa noite\n";
}
?>
