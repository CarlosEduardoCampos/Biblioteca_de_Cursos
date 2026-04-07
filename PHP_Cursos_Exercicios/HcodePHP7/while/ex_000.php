<?php 
    $condicao = true;

    while($condicao){
        $numero = rand(1, 10);

        if ($numero === 3) {
            print "Três !!!<br>";
            $condicao = false;
        }

        print "$numero<br>";
    }
?>