<?php
    define('DB_NAME', '');
    define('DB_HOST', '');
    define('DB_USER', '');
    define('DB_PASS', '');

    # Conecta com o banco de dados:
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    # Testa se existe um erro na conexão:
    if($conn->connect_error){
        print "Error:".$conn->connect_error;
    }
    else{
        print "Conexão Realizada...\n";
    }

    # Cria um Query que sera executada no banco:
    $result = $conn->query("SELECT * FROM tb_usuarios ORDER BY desLogin");

    while($row=$result->fetch_assoc()){
        var_dump($row);
    }

    # Muda o resultado da Query para o formato JSON:
    $data = array();

    while($row=$result->fetch_assoc()){
        array_push($date,$row);
    }

    # Mostra o JSON:
    echo json_encode($data);
?>