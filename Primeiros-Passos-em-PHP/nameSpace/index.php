<?php 
	require_once("config.php");

	use Cliente\Cadastro;
	//Intacia objeto
	$cad = new Cadastro();

	//Objeto recebe dados
	$cad ->setNome  ("Djalma Sindeux");
	$cad ->setEmail ("djalma@hcode.com.br");
	$cad ->setSenha ("12345");

	$cad->registrarVenda();
?>