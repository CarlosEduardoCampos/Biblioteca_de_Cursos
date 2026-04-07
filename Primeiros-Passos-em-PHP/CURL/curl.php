<?php
	$cep = "01310100";
	$link = "https://viacep.com.br/ws/$cep/json/";//link sugerido pela api

	$ch = curl_init($link);// inicia a conexão
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);//certifica api

	$response = curl_exec($ch);// executa

	curl_close($ch);//fechamento de conexão

	$data = json_encode($response, true);

	print_r($data);

?>