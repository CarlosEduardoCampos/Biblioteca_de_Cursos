<?php 
	/*     nome da variavel , conteudo da variavel */
	define("SERVIDOR_LOCAL", "127.0.0.1");
	//
	echo SERVIDOR_LOCAL . '<br>';

	define("BANCO_DADOS",
	[
		'127.0.0.1',
		'root',
		'passWord',
		'teste'
	]);//Array constante
	//
	print_r(BANCO_DADOS);
	echo "<br>";

	//Costate padrôes do PHP
	echo PHP_VERSION . "<br>";//Mostra versão do php intalado
	echo DIRECTORY_SEPARATOR . "<br>";
?>