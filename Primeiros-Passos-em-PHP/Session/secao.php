<?php 
	require_once("config.php");//Inicia seção para uso
	//
	echo session_save_path();//Salva a sessao atual
	echo "<br>";
	//
	var_dump(session_status());
	echo "<br>";
	//
	switch (session_status())
	{
		case PHP_SESSION_DISABLED:
			// code...
			echo " As seções estão desabilitadas <br>";
			break;
		case PHP_SESSION_NONE:
			// code...
			echo " As seções estiveram habilitadas, mas não exite nemnhuma no momento <br>";
			break;
		case PHP_SESSION_ACTIVE:
			// code...
			echo " As seções estão habilitadas <br>";
			break;
		
		default:
			// code...
			echo " Erro no parametro recebido <br>";
			break;
	}
	////////////////////////////////////////////////////////////////////////
	//
	$_SESSION['nome'] = "Hcode";//Cadastra valor a seção
	//
	echo session_id()
?>