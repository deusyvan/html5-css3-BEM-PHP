<?php

//Operadores Lógicos
// and    or    xor    !    &&    ||
//xor= exclusivo
// or e and tem precedencia maior que && ou ||

$vai_chover = FALSE;
$esta_frio = TRUE;

if ($vai_chover xor $esta_frio){
    echo 'Vou pensar duas vezes antes de sair';
} 

echo "\n***************\n";

//Resultados:
/*
 
Vou pensar duas vezes antes de sair

 */
