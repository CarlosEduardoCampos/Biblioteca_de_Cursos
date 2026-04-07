<?php
	// Inicia o banco de dados MySQL
	$bancoDados = new mysqli("localhost","root","pass1386", "dbphp7");

	if($bancoDados -> connect_error)
	{
		echo "Erro: " . $conect -> connect_error;
	}

	//Envia um comando direto para o banco de dados
	$result = $bancoDados -> query("SELECT * FROM tb_usuarios ORDER BY deslogin");
	$data = array();

	// Tranforma em json 
	while ($row = $result->fetch_array())
	{
		array_push($data, $row);
	}

	echo json_encode($data);

	echo '<br>';
	echo '<br>';
	// Mostra somente os nomes das colunas
	while ($row = $result->fetch_array(MYSQLI_ASSOC))
	{
		var_dump($row);
	}

	echo '<br>';
	echo '<br>';
	while ($row = $result->fetch_assoc())
	{
		var_dump($row);
	}
?>