<?php

//Manipulação de Arquivos e Diretorios
//file: lê um arquivo e retorna um array com tudo, cada posição uma linha

//lê o arquivo para o array $arquivo
$arquivo = file("/home/deusyvan/Documentos/readme.txt");

//exibe o conteúdo
echo $arquivo[0];
echo $arquivo[1];
echo $arquivo[2];

//Resultados:
/*
    
Adobe Systems Incorporated
Flash Player for Linux
Version 26.0.0.137

 */

?>