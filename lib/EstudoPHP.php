<?php

//Tipo objeto

class Computador{
    var $cpu;
    
    function ligar(){
        echo "Ligando computador a {$this->cpu}... ";
    }
}

$obj = new Computador;
$obj->cpu = "500Mhz";
$obj->ligar();


echo "\n***************\n";
//Resultado:
/*
 
Ligando computador a 500Mhz...
  
 */

