<?php

//Passagem de parâmetros
//Dentro do escopo da função podem ser:
//by value:
// Por padrão é by value torna-se uma variável local,
// não alterando seu valor externo
//by reference:
// Utiliza o operador & na frente do parâmetro
// as alterações passam a valer fora do contexto da função.

function incrementa(&$variavel, $valor){
    $variavel += $valor;
}

$a  = 10;
incrementa($a, 20);
echo $a;

//Resultados:
/*
    
30

 */

?>