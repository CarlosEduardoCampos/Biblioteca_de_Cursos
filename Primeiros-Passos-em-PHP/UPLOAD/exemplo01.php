<!--method="GET" quando recebe informação do servidor-->
<!--method="POST" envia dados para o servidor-->
<!--enctype informa que a informação recebida e um arquivo-->
<form method="POST" enctype="multipart/form-data">
	<input type="file" name="fileUpload">
	<button type="submit">Send</button>
</form>
<?php 
	#Testa tipo de solicitação
	/**
	 * Dados enviados via POST (para strings)
	 * "REQUEST_METHOD" === "POST" usa o $_POST
	 * #
	 * Dados enviados via GET
	 * "REQUEST_METHOD" === "GET" usa o $_GET 
	 * #
	 * Arquivos enviados via POST (para arquivos)
	 * "REQUEST_METHOD" === "POST" usa o $_FILES
	 * */
	if ($_SERVER["REQUEST_METHOD"] === "POST")
	{
		#Cria um diretorio temporario ate que todo o arquivo seja carregado
		$file = $_FILES["fileUpload"];

		#Se existir erro
		if ($file["error"])
		{
			throw new Exception("ERROR: ".$file["error"]);
		}

		#Nome do diretorio
		$dirUploads = "uploads";

		#Se não existe diretorio
		if (!is_dir($dirUploads))
		{
			mkdir($dirUploads);//cria diretorio
		}

		#Função retorna true se upload completo e false quando não completo
		if (move_uploaded_file($file["tmp_name"], $dirUploads.DIRECTORY_SEPARATOR.$file["name"]))
		{
			echo "Upload realizado com sucesso!";
		}

		else{
			throw new Exception("Não foi possivel realizar o upload!");	
		}
	}
?>