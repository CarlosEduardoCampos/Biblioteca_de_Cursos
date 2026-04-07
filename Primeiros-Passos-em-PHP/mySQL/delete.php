<?php
	// Conecta banco de dados
	$bancoDados = new PDO("mysql:host=localhost;dbname=dbphp7","root","pass1386");

	// Prépara comando delete
	$stmt = $bancoDados->prepare("DELETE FROM tb_usuarios WHERE idusuaio = :ID");

	$id = 1;

	// liga :ID com $id
	$stmt ->bindParam(":ID", $id);

	$stmt ->execute();

	echo "Usuario deletado!!!";
?>