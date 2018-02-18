<?php

//Manipulação de Arquivos e Diretorios
//file_put_contents: grava uma string no arquivo retorna a quantidade de bytes gravados

echo file_put_contents('/tmp/teste.txt', "este \n é o conteúdo \n do arquivo");

//Resultados:
/*
    
34

 */

?>