<?php

//Comparação de Tipo boleano

$umidade = 91;

$vaiChover = ($umidade > 90);

if ($vaiChover){
    echo 'Está chovendo';
}

echo "\n***************\n";
//Resultado:
/*
 
  Está chovendo
  
 */

/*
 * Valores falsos em boleano
 * Inteiro 0
 * ponto flutuante 0.0
 * string vazia "" ou "0"
 * array vazio
 * objeto sem elementos
 * tipo NULL
