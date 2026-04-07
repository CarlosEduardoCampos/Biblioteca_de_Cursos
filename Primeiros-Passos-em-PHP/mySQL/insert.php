<?php
	// PDO('tipo do banco:nome da tabela ; localização ; login ; senha');
	$bancoDados = new PDO("mysql:dbname=dbphp7;host=localhost","root","pass1386");

	// Prepara o comando de insert 
	$stmt = $bancoDados -> prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

	$login = "willian";
	$password = "9086fg";

	// liga :LOGIN com a variavel $login
	$stmt -> bindParam(":LOGIN", $login);

	// liga :PASSWORD com avariavel $password
	$stmt -> bindParam(":PASSWORD", $password);

	// Executa o comando no banco de dados
	$stmt -> execute();

	echo " INSERIDO OK!!";
?>