<?php
	$dt = new DateTime();
	echo $dt->Format("d/m/Y H:i:s") ."<br>";
	//
	$periodo = new DateInterval("P15D");//Acresenta mais 15 dias na data atual
	echo $dt->Format("d/m/Y H:i:s") ."<br>";
	//
	$dt->add($periodo);
	echo $dt->Format("d/m/Y H:i:s") ."<br>";
	////////////////////////////////////////////////////////////////////////
	setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
	echo ucwords(strftime("%A %B")) . "<br>";
	////////////////////////////////////////////////////////////////////////
	echo date("d/m/Y H:i:s") . "<br>";
	echo time() . "<br>";
	//
	$ts = strtotime("2001-10-11");//Cria o time stamp da data
	echo date("l, d/m/Y", $ts) . "<br>";
	//
	$ts = strtotime("now");//Cria o time stamp de hoje
	echo date("l, d/m/Y", $ts) . "<br>";
	//
	$ts = strtotime("+1 day");//Cria o time stamp de amanha
	echo date("l, d/m/Y", $ts) . "<br>";
	//
	$ts = strtotime("+1 week");//Cria o time stamp de da semana que vem
	echo date("l, d/m/Y", $ts) . "<br>";
	////////////////////////////////////////////////////////////////////////
	function test($calltback)
	{//Processo lento
		$calltback();
	}

	test(function()
	{
		echo "Terminou! <br>";
	});

	$fn = function($a)
	{
		var_dump($a);
	};
	$fn("OI");
?>