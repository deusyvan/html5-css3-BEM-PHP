<?php

//Manipulação de Arquivos e Diretorios
//fopen

$fp = fopen("/home/deusyvan/Documentos/excel.txt", "r");
$fp = fopen("/home/deusyvan/Imagens/file.gif", "wb");
$fp = fopen("http://www.example.com/", "r");
$fp = fopen("ftp://user:password@example.com/", "w");
//Resultados:
/*
    
120
5040

 */

?>