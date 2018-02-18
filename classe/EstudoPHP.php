<?php

//Manipulação de Arquivos e Diretorios
//fwrite: grava no arquivo
//fclose: fecha o arquivo aberto apontado pelo identificador de arquivo retorna true se sucesso.

//abre o arquivo
$fd = fopen("/home/deusyvan/Documentos/file.txt", "w");

//escreve no arquivo
fwrite($fd, "linha 1\n");
fwrite($fd, "linha 2\n");
fwrite($fd, "linha 3\n");

//fecha o arquivo
fclose($fd);


//Resultados:
/*
    
Existindo o arquivo vai apagar ele inteiro e inserir:
linha 1
linha 2
linha 3

Não existindo ele cria e escreve: 
linha 1
linha 2
linha 3

 */

?>