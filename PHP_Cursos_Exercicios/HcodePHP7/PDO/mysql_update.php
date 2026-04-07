<?php 
    # Variaveis para conexão do Banco de Dados:
    define('DB_NAME', '');
    define('DB_HOST', '');
    define('DB_USER', '');
    define('DB_PASS', '');

    # Conexão com o Banco de Dados:
    $conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);

    # Prepara Query que sera executado no Banco:
    $stmt = $conn->prepare('UPDATE tb_usuarios SET desLogin=:LOGIN, desSenha=:PASSW WHERE id_usuario=:ID;');

    # Variaveis de Valor:
    $LOGIN = 'User';
    $PASSW = 'Teste#$1010';
    $ID = 2;

    # Liga ':LOGIN' ao valor $LOGIN:
    $stmt->bindParam(':LOGIN', $LOGIN);

    # Liga ':PASSW' ao valor $PASSW:
    $stmt->bindParam(':PASSW', $PASSW);

    # Liga ':ID' ao valor $ID:
    $stmt->bindParam(':ID', $ID);

    # Executa a Query no Baco:
    $stmt->execute();

    # MSG de Confirmação:
    print("UPDATE Realizado ...");
?>