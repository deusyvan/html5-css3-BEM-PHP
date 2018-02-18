<?php

//Operadores Relacionais
// uso do === e !== comparando os tipos de dados

$a = 1234;
$b = '1234';

if ($a === $b){
    echo '$a e $b são iguais e do mesmo tipo';
} 

if ($a !== $b){
    echo '$a e $b são de tipos diferentes';
}
echo "\n***************\n";

//Resultados:
/*
 
$a e $b são de tipos diferentes

 */
