<?php
    # Inicia um arquivo de escrita:
    //$file = fopen('log.txt', 'w+'); //recreve todo o arquivo. 
    $file = fopen('log.txt', 'a+'); // escreve sem apagar oque ja existe.

    # Escreve em um arquivo:
    fwrite($file, date('Y-m-d H:i:s')."\r\n");

    # Fecha o arquivo:
    fclose($file);

    print "Arquivo criado com sucesso!";
?>