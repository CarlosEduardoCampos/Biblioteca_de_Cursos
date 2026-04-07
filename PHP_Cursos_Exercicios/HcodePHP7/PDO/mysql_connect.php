<?php
    # Variaveis para conexão do Banco de Dados:
    define('DB_NAME', '');
    define('DB_HOST', '');
    define('DB_USER', '');
    define('DB_PASS', '');

    # Conexãocom Banco de Dados:
    $conn = new PDO("mysql:dbname=".DB_NAME.";host=".DB_HOST, DB_USER, DB_PASS);

    # Prepara a Query que sera executada no Banco:
    $stmt = $conn->prepare('SELECT * FROM tb_usuarios ORDER BY desLogin;');

    # Executa a Query no Banco:
    $stmt->execute();

    # Resultado da Query:
    $results = $stmt->fetchAll();

    var_dump($results)
    
?>