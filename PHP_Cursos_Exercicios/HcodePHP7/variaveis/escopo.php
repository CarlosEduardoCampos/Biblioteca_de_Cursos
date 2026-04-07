<?php 
    $nome = 'Glaucio';
    
    function teste(){
        global $nome;
        print $nome . "\n";
    }
    function teste2(){
        $nome = 'João';
        print $nome . ' agora no teste2' . "\n";
    }

    teste();
    teste2();
?>