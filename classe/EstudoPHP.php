<?php

//Requisições de Arquivos
//require diferente de include somente na manipulação de erros.
// include no caso de erro lança um warnig
// require no caso de erro lança um erro fatal

/* include_once = igual o include, a não ser que já tenha sido incluído evitando sobreposição
 * 
 * require_once = igual o require, a não ser que já tenha sido incluído evitando sobreposição
 * 
 * */

include '../lib/Biblioteca.php';

echo quadrado(4);


//Resultados:
/*
    
16

 */
