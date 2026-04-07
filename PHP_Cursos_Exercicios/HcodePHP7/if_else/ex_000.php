<?php
    $qualSuaIdade = 75;
    $idadeCrianca = 12;
    $idadeMaior = 18;
    $idadeMelhor = 65;

    if($qualSuaIdade < $idadeCrianca){
        print "Criança";
    }
    else if($qualSuaIdade < 18){
        print "Adolecente";
    }
    else if($qualSuaIdade < 65){
        print "Adulto";
    }
    else{
        print "Idoso";
    }

    print "<br>";

    print ($qualSuaIdade < $idadeMaior)?"Menor de Idade": "Maior de Idade";
?>