<?php

//Passagem de parâmetros
//Forma Dinâmica número de argumentos variáveis
//quais são: func_get_args();
//quantidade: func_num_args();

function Ola(){
    $argumentos = func_get_args();
    $quantidade = func_num_args();
    
    for ($n=0; $n<$quantidade; $n++){
        echo 'Olá ' . $argumentos[$n] . "\n";
    }
}

Ola('João', 'Maria', 'José' ,'Pedro');

//Resultados:
/*
    
50

 */

?>