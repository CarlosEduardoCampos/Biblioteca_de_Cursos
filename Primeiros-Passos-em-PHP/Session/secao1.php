<?php
	
	//
	session_id('fv2qsiqhk3cs8etb347b6lokmf');//recupera seção
	//
	echo "<br>";
	//
	require_once("config.php");
	session_regenerate_id();//Gera automaticamente um novo id
	//
	var_dump($_SESSION);
	echo "<br>";
	////////////////////////////////////////////////////////////////////////
	//
	echo session_id() . "<br>";//Mostra o atual id da seção
	//
	////////////////////////////////////////////////////////////////////////
	//session_unset($_SESSION['nome']); limpa a variavel
	session_destroy(); //limpa a variavel e remove o usuario do site
	//
	echo $_SESSION['nome'] . "<br>";//Mostra o valor chamado da seção
?>