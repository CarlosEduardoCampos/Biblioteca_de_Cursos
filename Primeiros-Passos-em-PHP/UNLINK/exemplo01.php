<?php 
	$file = fopen("teste.txt", "w+");
	fclose($file);

	unlink("teste.txt"); // deleta o arquivo existente

	echo "Arquivo removido com sucesso!";
?>