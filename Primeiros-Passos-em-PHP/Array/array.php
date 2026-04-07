<?php
	/*
		array com uma dimeção tem nome de vetor
		array com duas dimenções e um array bidimensional
		array com três dimenções e um array tridimensional
		E assim por diante...
	*/
	//VETOR
	$frutas = array("Laranja", "Abacaxi", "Melancia");
	//
	print_r($frutas);//Mostra array na tela
	echo "<br>";

	//BIDIMENCIONAL
	/*
		[0][X] Carros da GM
		[1][X] Carros da FORD
	*/
	$carros[0][0] = "GM";
	$carros[0][1] = "COBALT";
	$carros[0][2] = "ONIX";
	$carros[0][3] = "CAMARO";
	//
	$carros[1][0] = "FORD";
	$carros[1][1] = "FIESTA";
	$carros[1][2] = "FUSION";
	$carros[1][3] = "ECO ESPORT";
	//
	echo $carros[0][3]. "<br>";//Aponta local do array para escrever
	echo end($carros[1]). "<br>";//Encontra ultimo da coluna

	$pessoas = array();//Cria array
	//
	array_push($pessoas, array('nome' => 'João', 'idade' => 20));//Adiciona nova info no array
	array_push($pessoas,array('nome' => 'Glaucio', 'idade' => 25));
	//
	print_r($pessoas);
	print_r($pessoas[0]['nome']);
?>