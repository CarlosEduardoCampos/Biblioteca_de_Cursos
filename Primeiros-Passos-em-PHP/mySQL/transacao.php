<?php
	// Conecta banco de dados
	$bancoDados = new PDO("mysql:host=localhost;dbname=dbphp7","root","pass1386");

	$bancoDados->beginTransaction();

	// Prépara comando delete
	$stmt = $bancoDados->prepare("DELETE FROM tb_usuarios WHERE idusuaio = ?");

	$id = 2;

	$stmt ->execute(array($id));

	// Cacelou o comando delete
	//$bancoDados->rollback();

	// Confirma a execução do comando
	$bancoDados -> commit();

	echo "Usuario deletado!!!";
?>