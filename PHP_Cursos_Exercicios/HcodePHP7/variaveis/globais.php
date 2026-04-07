<?php 
    $nome = (int )$_GET["a"] ?? "";
    var_dump($nome);
    //
    $ip = $_SERVER["REMOTE_ADDR"]; // ip do servido de acesso
    $pasta = $_SERVER["SCRIPT_NAME"];// pasta que foi acessadapelo usuario

    var_dump($ip);
    var_dump($_SERVER);
?>