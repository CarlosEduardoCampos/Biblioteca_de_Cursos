<?php
	try {
		throw new Exception(" Hove um error.", 400);
		
	} catch (Exception $e) {
		echo json_encode(
			array(
				'mensagem' => $e->getMessage(),//mensagem de erro
				'linha'    => $e->getLine(),   //linha do erro
				'file'     => $e->getFile(),   //arquivo do erro
				'code'     => $e->getCode()    //numero do erro
			)
		);
	}
?>
