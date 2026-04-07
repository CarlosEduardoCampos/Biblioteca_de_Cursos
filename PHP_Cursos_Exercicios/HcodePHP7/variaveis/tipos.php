<?php
    // Tipos primitivos:
    $nome = "Hcode";
    $site = 'www.hcode.com.br';
    $ano = 1990;
    $salario = 5500.99;
    $bloqueado = false;
    // Tipos compostos:
    $frutas = array("abacaxi", "laranja", "manga");
    print $frutas[2];
    //
    $nascimento = new DateTime();
    var_dump($nascimento);
    // Tipos especiais:
    $arquivo = fopen("ex_002.php", "r");
    var_dump($arquivo);
    //
    $nulo = null ;
    $vazio = "";
?>