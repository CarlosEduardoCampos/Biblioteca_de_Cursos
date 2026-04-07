<?php
	// Conecta no banco de dados
	$bancoDados = new PDO("mysql:host=localhost;dbname=dbphp7","root","pass1386");

	// Prepara comando update
	$stmt = $bancoDados -> prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuaio = :ID");

	$id = 2;
	$login = "manuel";
	$password = "qwerty";

	// liga :LOGIN com $login
	$stmt ->bindParam(":LOGIN", $login);

	// liga :PASSWORD com $password
	$stmt ->bindParam(":PASSWORD", $password);

	// liga :ID com $id
	$stmt ->bindParam(":ID", $id);

	$stmt ->execute();

	echo "MODIFICAÇÃO REALIZADA!!!";

?>