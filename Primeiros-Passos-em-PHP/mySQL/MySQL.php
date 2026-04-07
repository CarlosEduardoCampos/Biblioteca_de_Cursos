<?php 
	// Inicia o banco de dados MySQL
	$bancoDados = new mysqli("localhost","root","pass1386", "dbphp7");

	if($bancoDados -> connect_error)
	{
		echo "Erro: " . $conect -> connect_error;
	}

	// Prepara um comando para ser lançado no banco de dados
	$insert = $bancoDados -> prepare(
		"INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(?,?)"
	);

	$login = "julia";
	$pass = "book5094";

	// s = string i = inteiro f = float d = doble b = blob
	$insert -> bind_param("ss", $login, $pass);//prepara os dados para inserir no banco

	$insert -> execute();// executa no banco o comando preparado

	$login = "carlos";
	$pass = "p3$@d0";

	$insert -> execute();
?>