<?php 
	$pasta = "arquivos";
	$permissao = "0775";

	/**
	 * mkdir($variavel, permição)
	 * 0 - Não existe permição
	 * 1 - Permissão de execução
	 * 2 - Permissão de gravarção
	 * 3 - Permissão de gravar e executar
	 * 4 - Permissão de leitura
	 * 5 - Permissão de leitura e exucução
	 * 6 - Permissão de leitura e gravação
	 * 7 - Permissão total
	 * 
	 * permição pasta do UNIX
	 * 0775 - criador do diretorio tem permissão total
	 * 
	 * */
	if (is_dir($pasta)) mkdir($pasta, $permissao);

	echo "Diretorio criado com susseço!"
?>