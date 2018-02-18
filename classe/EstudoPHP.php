<?php

//Estruturas de controle
// SWITCH
$i = 1;
if($i == 0){
    print "i eh igual a zero";
} elseif ($i == 1){
    print "i eh igual a um";
} elseif ($i == 2){
    print "i eh igual a dois";
} else {
    print "i nao eh igual a 0, 1 ou 2";
}

echo "\n***************\n";
$i = 3;

switch ($i){
    case 0:
        print "i eh igual a 0";
        break;
    case 1:
        print "i eh igual a 1";
        break;
    case 2:
        print "i eh igual a 2";
        break;
    default:
        print "i nao eh igual a 0, 1 ou 2";
}
//Resultados:
/*
    
i eh igual a um
    
i nao eh igual a 0, 1 ou 2
 */
