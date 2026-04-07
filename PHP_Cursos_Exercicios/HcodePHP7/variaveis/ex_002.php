<?php
    // Estilo de nomeclatura carmelCase:
    $nomeCompleto = "";

    // Estilo de nomeclatura snake_case:
    $nome_001 = 'João';
    $sobrenome = 'Rangel';

    print $nome_001;

    // Apagando uma variavel:
    //unset($nome_001);

    // Verifica se a variavel existe
    if(isset($nome_001))
    {
        print $nome_001;
    }

    // Concatenação
    $nomeCompleto = $nome_001 . $sobrenome;

?>