<?php
	# ferifica existencia de cookies
	if(isset($_COOKIE["NOME_DO_COOKIE"]))
	{
		$obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);

		echo 'EMPRESA: ', $obj->empresa;
	}
?>