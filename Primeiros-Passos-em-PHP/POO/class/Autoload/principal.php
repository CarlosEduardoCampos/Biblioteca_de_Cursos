<!--principal.php-->
<?php
	// Busca as class do arquivo local
	spl_autoload_register(
		function($nomeClass)
		{
			//Testa se existe o arquivo na pasta
			if(file_exists("$nomeClass.php") === true)
			{
				var_dump($nomeClass);
				echo "<br/>";
				require_once("$nomeClass.php");
			}
		}
	);

	// Busca as class do arquivo anterior
	spl_autoload_register(
		function($nomeClass)
		{
			//Testa se existe o arquivo na pasta
			if (file_exists("..".DIRECTORY_SEPARATOR."$nomeClass.php"))
			{
				var_dump($nomeClass);
				echo "<br/>";
				require_once("..".DIRECTORY_SEPARATOR."$nomeClass.php");
			}
		}
	);
	
	// Busca as class do arquivo apontado
	spl_autoload_register(
		function($nomeClass)
		{
			$nomePasta = 'class';
			var_dump($nomeClass);
			echo "<br/>";
			require_once("$nomePasta".DIRECTORY_SEPARATOR."$nomeClass.php");
		}
	);
	//require_once("DelRey.php");
	$carro = new DelRey();
	$carlos = new Usuario("carlos",'11/10/2001');
	$moro = new Enderecos('casa','123','capitolio');
?>