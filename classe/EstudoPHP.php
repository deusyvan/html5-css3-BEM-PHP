<?php

//Manipulação de Funções

function calculaObesidade($peso, $altura){
    return $peso / ($altura * $altura);
}

echo calculaObesidade(98, 1.86);


//Resultados:
/*
    
16

 */
