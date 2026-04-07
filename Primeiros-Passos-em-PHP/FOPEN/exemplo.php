<?php 
	# Cria um arquivo de texto
	//$file = fopen("log.txt","w+"); w+ limpa o arquivo antes de escrever
	$file = fopen("log.txt", "a+"); //somente escreve no final

	# Escreve um texto no arquivo
	fwrite($file, date("Y-m-d H:i:s"). "\r\n");

	fclose($file);

	echo "Arquivo criado com sucesso!";
?>