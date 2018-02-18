<?php

//Operadores Relacionais
// uso do valor zero

$a = 0;

if ($a == FALSE){
    echo '$a é falso';
} 

//testa se é do tipo false

if ($a === FALSE){
    echo '$a é do tipo FALSE';
}

//Testa se $a é igual a zero e do mesmo tipo que zero

if ($a === 0){
    echo '$a é zero mesmo';
}
echo "\n***************\n";

//Resultados:
/*
 
$a é falso
$a é zero mesmo

 */
