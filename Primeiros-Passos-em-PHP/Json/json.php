<?php 
	$pessoas = array();
	//
	array_push($pessoas, array('nome' => 'João', 'idade' => 20));
	array_push($pessoas, array('nome' => 'Glacio', 'idade' => 25));
	
	echo json_encode($pessoas)."<br>";//Tranforma array em json

	$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glacio","idade":25}]';
	//
	/* Se não  for colocado , true o json traforma os dados em objetos */
	$data = json_decode($json, true);//Trasforma json em array
	//
	var_dump($data);
?>