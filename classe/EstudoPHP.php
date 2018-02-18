<?php

//Estruturas de controle
// Testes encadeados if If ou AND
$salario = 1020;
$tempoServico = 12;
$temReclamacoes = FALSE;

if ($salario > 1000){
    if ($tempoServico >= 12){
        if ($temReclamacoes != TRUE){
            echo 'parabens, voce foi promovido!';
        }
    }
} 

if (($salario > 1000) and ($tempoServico >= 12) and ($temReclamacoes != TRUE)) {
    echo 'parabens, voce foi promovido!';
}

echo "\n***************\n";

//Resultados:
/*
    
    parabens, voce foi promovido!
    parabens, voce foi promovido!
    
 */
