<?php 
	if ($_SERVER['REQUEST_METHOD'] === 'POST')
	{
		$email = escapeshellcmd($_POST['inputEmail']);

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);

		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
			'secret'=>"6LdJuPcbAAAAACoazXqTCLfvqt92duB7BinvFRlD",
			'response'=>$_POST['g-recaptcha-response'],
			'remoteip'=>$_SERVER['REMOTE_ADDR']
		)));

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$recaptch = json_decode(curl_exec($ch), true);
		curl_close($ch);

		if ($recaptch["success"] === true)
		{
			echo"ok: ".$_POST["inputEmail"];
		}
		else{
			header("Lcation: exemplo04.php");
		}
	}
?>