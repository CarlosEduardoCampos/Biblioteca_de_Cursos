<?php
	require_once("config.php");

	# Carrega um usuario
	/*$root = new Usuario();
	$root->loadByID(1);

	echo $root;*/

	# Carrega lista de usuarios
	/*$lista = Usuario::getList();

	echo json_encode($lista);*/

	# Carrega uma lista de usuários buscando pelo login
	/*$search = Usuario::getSearch("ar");

	echo json_encode($search);*/

	# Carrega um usuário usando login e senha
	/*$user = new Usuario();
	$user->login("carlos","passagem@1386");

	echo $user;*/

	# Adiciona um novo usuario ao banco
	/*$aluno = new Usuario("Login","10gin");

	$aluno->insert();

	echo $aluno;*/

	# Modifica senha ou login ja cadastrado de um ususario
	/*$user = new Usuario();

	$user->loadById(7);
	$user->setupdate("professor","#$@!%");

	echo $user;*/

	$user = new Usuario();

	$user -> loadById(8);
	$user -> DBdelete();

	echo $user;

?>