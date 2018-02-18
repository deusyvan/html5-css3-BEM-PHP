<?php

//Passagem de parâmetros
//Dentro do escopo da função podem ser:
//by value:
// Por padrão é by value torna-se uma variável local,
// não alterando seu valor externo
//by reference:
// Utiliza o operador & na frente do parâmetro
// as alterações passam a valer fora do contexto da função.

//Valor default é permitido

function incrementa(&$variavel, $valor = 40){
    $variavel += $valor;
}

$a  = 10;
incrementa($a);
echo $a;

//Resultados:
/*
    
50

 */

?>