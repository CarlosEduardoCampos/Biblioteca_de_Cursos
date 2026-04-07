<?php 
    $a = 30;
    $b = 55;

    // Maior:
    var_dump($a > $b);
    print "<br>";

    // Menor:
    var_dump($a < $b);
    print "<br>";

    // Igualdade(valor):
    var_dump($a == $b);
    print "<br>";

    // Igualdade de identidade(valor e tipo):
    var_dump($a === $b);
    print "<br>";

    // Negação(valor):
    var_dump($a != $b);
    print "<br>";

    // Negação de identidade(valor e tipo):
    var_dump($a !== $b);
    print "<br>";

    // Recebe(Atribuição):
    var_dump($a = $b);
    print "<br>";

    // Espaceship:
    // (Respostas)
    // 1 == $a > $b 
    // 0 == $a == $b;
    // -1 == $a < $b
    var_dump($a <=> $b);
    print "<br>";

    // Null:
    $a = null;
    $b = null;
    $c = 10;
    
    print $a ?? $b ?? $c;
?>