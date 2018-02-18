<?php

//Estruturas de controle
// Atribuir valor de acordo com a condicao

$valorVenda = 120;

if ($valorVenda > 100){
    $resultado = 'Muito caro!';
} else {
    $resultado = 'pode comprar!';
}

echo $resultado;
$valorVenda = 90;

$resultado = ($valorVenda > 100) ? 'muito caro' : 'pode comprar';

echo $resultado;

echo "\n***************\n";

//Resultados:
/*
    
    Muito caro!
    pode comprar
    
 */
