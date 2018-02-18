<?php

//Passagem de parâmetros
//Dentro do escopo da função podem ser:
//by value
//by reference
// Por padrão é by value torna-se uma variável local,
// não alterando seu valor externo

function incrementa($variavel, $valor){
    $variavel += $valor;
}

$a  = 10;
incrementa($a, 20);
echo $a;

//Resultados:
/*
    
10

 */

?>