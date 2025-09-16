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
Descritivo: Verifique se NÃO é fim de semana (usando operador lógico NOT)
*******************************************************************************/


// exercicio 30

$dia = 'Segunda'; 
if (!($dia == 'Sabado' || $dia == 'Domingo')) {
    echo "$dia não é fim de semana (é dia útil)\n"; // condição verdadeira
} else {
    echo "$dia é fim de semana\n"; // condição falsa
}
?>