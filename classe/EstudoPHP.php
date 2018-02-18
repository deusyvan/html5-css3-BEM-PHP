<?php

//Operadores Lógicos
// and    or    xor    !    &&    ||
//xor= exclusivo
// or e and tem precedencia maior que && ou ||

$vai_chover = TRUE;
$esta_frio = TRUE;

if ($vai_chover and $esta_frio){
    echo 'Nao vou sair de casa';
} 

echo "\n***************\n";

//Resultados:
/*
 
Nao vou sair de casa

 */
