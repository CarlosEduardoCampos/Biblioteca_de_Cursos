<?php 
	//codigo depreciado
	//Criptografa dados
	$data = ["nome"=>"Hcode"];

	define('SECRET', pack('a16', 'senha'));

	$mcrypt = mcrypt_encrypt(
		MCRYPT_RIJNDAEL_128,
		SECRET,
		json_encode($data),
		MCRYPTE_MODE_ECB
	);

	$final = base64_encode($mcrypt));

	//Retorna a descriptografia dos dados
	$string = mccry_decrypt(MCRYPT_RIJNDAEL_128, SECRET, base64_encode($final), MCRYPTE_MODE_ECB);

	var_dump(json_decode($string, true));
?>