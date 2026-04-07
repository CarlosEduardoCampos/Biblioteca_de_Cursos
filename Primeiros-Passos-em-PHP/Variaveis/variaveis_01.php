<?php
	$nome = "Glaucio";
	//
	function teste_00()// Função em php
	{
		global $nome; //pucha a variave para ser usada dentro da função
		echo $nome . "</br>";
	}
	//
	function teste_01()
	{
		$nome = "João";// variavel propria da função
		echo $nome . "</br>";
	}
	//
	teste_00();// Chamada de execução da função
	teste_01();
	//
	echo $nome
?>