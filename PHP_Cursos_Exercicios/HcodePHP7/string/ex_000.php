<?php 
    $nome = "João rangel";
    
    // Passa tudo para Maiusculo:
    echo strtoupper($nome) . "<br>"; 

    // Passa tudo para Minusculo:
    echo strtolower($nome) . "<br>";

    // Passa a primeira letra para maisculo:
    echo ucwords($nome) . "<br>";
    
    // Subistituir caracteres de uma string:
    $empresa = "Hcode";
    $empresa = str_replace("o","0", $emperasa);

    // Realiza uma busca em uma string:
    $frase = "A repetição é mãe da retenção.";
    $palavra = "mãe";

    $q = strpos($frase, $palavra);

    // Retorna os aracteres do inicio ao fim indicados:
    $texto = substr($frase, $q + strlen($palavra), strlen($palavra));
?>