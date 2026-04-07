<?php 
	$name = "images";

	# Testa se existe a pasta com esse nome
	if(!is_dir($name))//se(nâo existe)
	{
		# Cria a pasta
		mkdir($name);
		echo "Diretorio $name criado com sucesso!";
	}
	else{
		# Remove a pasta
		rmdir($name);
		echo "Já existe o diretório: $name foi removido";
	}
?>