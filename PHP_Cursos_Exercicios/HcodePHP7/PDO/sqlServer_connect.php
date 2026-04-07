<?php 
    # Variaveis para conexão do Banco de Dados:
    define('DB_NAME', '');
    define('DB_HOST', '');
    define('DB_USER', '');
    define('DB_PASS', '');

    # Conexãocom Banco de Dados:
    $conn = new PDO("sql:Database=".DB_NAME.";server=".DB_HOST."\SQLEXPRESS;ConnectionPooling=0", DB_USER, DB_PASS);

    # Prepara a Query que sera executada no Banco:
    $stmt = $conn->prepare('SELECT * FROM tb_usuarios ORDER BY desLogin;');

    # Executa a Query no Banco:
    $stmt->execute();

    # Resultado da Query:
    $results = $stmt->fetchAll();

    var_dump($results)
?>