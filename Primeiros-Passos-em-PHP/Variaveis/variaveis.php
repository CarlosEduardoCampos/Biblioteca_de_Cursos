<?php
	//Arrays superglobais
	$nome = $_GET["a"];// pega informaçõe da barra de pesquisa
	//
	//var_dump($nome);
	//
	$ip = $_SERVER['REMOTE_ADDR']; // Apresenta o ip do provedor de acesso do usuario
	//
	echo " ".$ip."</br>";
	//
	ip = $_SERVER['SCRIPT-NAME']
	//
	echo " ".$ip."</br>";
	///////////////////////////
	exit;
	$nome = "Hcode";
	isset($nome);
	isset($nome3);
	exit;
	$site = 'www.hcode.com.br';
	//
	$ano = 1999;
	$salario = 5550.00;
	$bloqueado = false;
	//Tipos compostos
	$frutas = array("Abacaxi", "Laranja", "Morango"); // lista [0, 1, 2]
	//
	echo $frutas[0]."</br";//abacaxi
	echo $frutas[1]."</br>";//laranja 
	// Iniciando objeto padrão da lingugem
	$nacimento = new Datetime();//Mostra data atual
	//var_dump($nacimento);
	//Tipos especiais
	//$arquivo = fopen(nome do arquivo, tipo de leitura)
	$arquivo = fopen("exemplo_03.php", "r");// Abre ou cria um arquivo
	//
	exit; //Finalisa a execução	
	//Comando que escreve a var na tela = echo $nome;
	var_dump($nome); //Este comando mostra o tipo de dado tamanho e o valor
	echo "</br>";
	//
	$anoNacimento = 1999;
	$nome1 = "João";
	$nome2 = "Rangel";
	//
	echo $nome1 ." ". $nome2; //Exemplo de concatenação
	//
	echo $nome1;
	//
	unset($nome1);//Este comando deleta var
	echo $nome1;
?>