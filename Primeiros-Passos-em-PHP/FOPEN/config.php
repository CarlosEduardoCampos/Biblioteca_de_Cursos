<?php
	/* Busca por aquivos com class na pasta local */
	spl_autoload_register(
		function($class_name)
		{
			$fileName = "class".DIRECTORY_SEPARATOR.$class_name . ".php";
			//
			if (file_exists($fileName))//Testa se existe o arquivo
			{
				require_once($fileName);//linka o arquivo somente uma vez
			}
		}
	);
?>