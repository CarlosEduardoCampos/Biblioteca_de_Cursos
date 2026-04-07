<?php 
	// PDO('tipo do banco:nome da tabela ; localização ; login ; senha');
	$bancoDados = new PDO("mysql:dbname=dbphp7;host=localhost","root","pass1386");

	$stmt = $bancoDados -> prepare("SELECT*FROM tb_usuarios ORDER BY deslogin");

	$stmt -> execute();

	//retorna um array com os dados
	$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);

	var_dump($results);
	echo "<br> <br>";

	//Imprime de forma organizada os dados na tela
	foreach ($results as $row)
	{
		foreach($row as $key => $value)
		{
			echo "<strong>$key:</strong> ".$value."<br>";
		}
		echo "<hr>";
	}
?>