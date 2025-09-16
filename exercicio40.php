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
Descritivo: Crie uma calculadora simples com switch case
*******************************************************************************/


// exercicio 40

$a = 10;
$b = 2;
$op = '/'; // '+', '-', '*', '/'

// Estrutura switch para verificar qual operação deve ser feita
switch ($op) {
    case '+': // se $op for '+'
        $res = $a + $b;
        break;
    case '-': // se $op for '-'
        $res = $a - $b;
        break;
    case '*':
        $res = $a * $b;
        break;
    case '/':
        $res = ($b != 0) ? ($a / $b) : 'Erro: divisão por zero';
        break;
    default: // se $op não for nenhum dos anteriores
        $res = 'Operador inválido';
}
// Exibe o resultado final
echo "Resultado: $res\n";
?>