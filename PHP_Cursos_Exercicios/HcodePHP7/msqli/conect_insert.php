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

    # Prepara a Query que sera executada no banco:
    $stmt = $conn->prepare("INSERT INTO tb_usuarios(desLogin, desSenha) VALUES(?,?)");

    # Informa os parametro esperados em (?,?):
    # ss - Idica que serão passados 2 strings;
    $stmt->bind_param("ss", $login, $pass);

    # Define o valor da variaveis passadas como parametro:
    $login = "user";
    $pass = "12345";
    
    # Executa a Query no banco de dados:
    $stmt->execute();
?>