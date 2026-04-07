<?php
	// nome dos arquivos nessesarios
	$dir01 = "folder_01";
	$dir02 = "folder_02";

	// testa existencia dos arquivo e cria caso nessesario
	if(!is_dir($dir01)) mkdir($dir01);
	if(!is_dir($dir02)) mkdir($dir02);

	// nome file nessesario
	$filename = "README.txt";

	// testa existencia do file e cria caso nessesario
	if(!file_exists($dir01.DIRECTORY_SEPARATOR.$filename))
	{
		//Abre arquivo
		$file = fopen($dir01.DIRECTORY_SEPARATOR.$filename,"w+");

		//Escreve em arquivo
		fwrite($file, date("Y-m-d H:i:s"));

		//fecha arquivo
		fclose($file);
	}

	//Renomeia ou move um arquivo
	rename(
		$dir01.DIRECTORY_SEPARATOR.$filename,//ORIGEM
		$dir02.DIRECTORY_SEPARATOR.$filename//DESTINO
	);

	echo "Arquivo movido com sucesso!";
?>