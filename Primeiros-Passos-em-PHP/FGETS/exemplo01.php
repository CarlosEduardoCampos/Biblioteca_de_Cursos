<?php
	$filename = "usuarios.csv";

	if(file_exists($filename))
	{
		$file = fopen($filename, "r");

		$headers = explode(",", fgets($file));;//fgets ecreve so uma linha do arquivo
		$data = array();

		while ($row = fgets($file)) {
			$rowData = explode(",", $row);
			echo "\n";

			for ($i=0; $i <count($headers) ; $i++)
			{ 
				$linha[$headers[$i]] = $rowData[$i];
			}

			array_push($data, $linha);
		}

		echo json_encode($data);
		
		fclose($file);
	}
?>
