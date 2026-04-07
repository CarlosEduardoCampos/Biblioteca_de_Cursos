<?php
	# informações
	$data = array(
		'empresa' => "HCODE Treinamentos"
	);

	# guarda informações por 1h
	setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

	echo "COOKIE CRIADO";
?>