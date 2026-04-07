<?php
	$images = scandir("images");

	$data = array();
	
	foreach ($images as $img)
	{
		# Elimina nomes que não são arquivos
		if(!in_array($img, array(".","..")))//se não for '.' ou '..'
		{
			$filename = "images".DIRECTORY_SEPARATOR.$img;

			# Informaçôes dos arquivosna pasta
			$info = pathinfo($filename);

			# Tamanho dos arquivos em bits
			$info["size"] = filesize($filename);

			# Data de modificação
			$info["modified"] = date("d/m/Y H:i:s",filemtime($filename));

			# URL do arquivo
			$info["url"] = "http://localhost/DIR/".str_replace("\\","/",$filename);

			# Inserir dados em array
			array_push($data, $info);
		}
	}
	echo json_encode($data);
?>
