<?php

//Variáveis estáticas
//Apenas dentro de um escopo de uma função

function percorre($quilometros){
    static $total;
    $total += $quilometros;
    echo "percorreu mais $quilometros do total de $total\n";
}

percorre(100);
percorre(200);
percorre(50);

//Resultados:
/*
    
percorreu mais 100 do total de 100
percorreu mais 200 do total de 300
percorreu mais 50 do total de 350

 */
