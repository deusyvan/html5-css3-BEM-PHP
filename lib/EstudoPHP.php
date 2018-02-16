<?php

//Referência de variável

$a = 5;
$b = &$a;
$b = 10;

echo $a; //resultado = 10
echo "\n***************\n";
echo $b; //resultado = 10

