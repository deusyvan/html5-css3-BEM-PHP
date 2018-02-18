<?php

//Manipulação de Arquivos e Diretorios
//feof = retorna true se o ponteiro estiver no fim do arquivo EOF
//fgets = lê uma linha do arquivo retorna uma string 

$fd = fopen("/etc/fstab", "r");

while (!feof($fd)){
    // lê uma linha do arquivo
    $buffer = fgets($fd, 4096);
    
    //imprime a linha.
    echo $buffer;
}
fclose($fd);


//Resultados:
/*
    
# /etc/fstab: static file system information.
#
# Use 'blkid' to print the universally unique identifier for a
# device; this may be used with UUID= as a more robust way to name devices
# that works even if disks are added and removed. See fstab(5).
#
# <file system> <mount point>   <type>  <options>       <dump>  <pass>
# / was on /dev/sda1 during installation
UUID=26dc18c0-4bcb-493c-b484-d4774aa9a5b1 /               ext4    errors=remount-ro 0       1
# swap was on /dev/sda5 during installation
UUID=7097abc6-0e06-4198-a10f-1406ef149815 none            swap    sw              0       0
/dev/sr0        /media/cdrom0   udf,iso9660 user,noauto     0       0


 */

?>