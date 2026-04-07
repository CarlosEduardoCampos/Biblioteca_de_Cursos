<?php 
    # Variaveis para conexão do Banco de Dados:
    define('DB_NAME', '');
    define('DB_HOST', '');
    define('DB_USER', '');
    define('DB_PASS', '');

    # Conexão com o Banco de dados:
    $conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);

    # Inicia uma transação
    $conn->beginTransaction();

    # Prepara a Query que sera executada no banco:
    $stmt = $conn->prepare('INSERT INTO tb_usuarios(desLogin, desSenha)VALUES(:LOGIN, :PASSW);');

    $LOGIN = 'jose';
    $PASSW = '12345';

    # Liga ':LOGIN'ao valor $LOGIN:
    $stmt->bindParam(':LOGIN', $LOGIN);

    # Liga :PASSW ao valor $PASSW:
    $stmt->bindParam(':PASSW', $PASSW);

    # Executa a Query no banco de dados
    $stmt->execute();

    # Cancela uma execusão:
    $conn->rollBack();
    
    # MSG de confirmação:
    print("Insert Completo ...");
?>