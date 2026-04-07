<?php
	//Esta função pode receber varios valore somente do tipo inteiro
	//Esta função vai retornar string
	function strsoma(int ...$valores):string
	{
		//array_sum($variavel) soma os valores do array
		return array_sum($valores);
	}

	//Cham função
	var_dump(strsoma(2, 2));
	echo "<br>";
	echo strsoma(2, 2)     . "<br>";
	echo strsoma(25, 33)   . "<br>";
	echo strsoma(1.5, 3.2) . "<br>";
	////////////////////////////////////////////////////////////////////////
	//Esta função pode receber varios valore somente do tipo inteiro
	function soma(int ...$valores)
	{
		//array_sum($variavel) soma os valores do array
		return array_sum($valores);
	}

	//Cham função
	var_dump(soma(2, 2));
	echo "<br>";
	echo soma(2, 2)     . "<br>";
	echo soma(25, 33)   . "<br>";
	echo soma(1.5, 3.2) . "<br>";
	////////////////////////////////////////////////////////////////////////
	//Declara parametro
	$pessoa = array
	(
		'nome'  => 'João' ,
		'idade' =>  20 
	);

	foreach ($pessoa as &$value)
	{	
		//gettype retorna o tipo de dado da variavel
		if(gettype($value) === 'integer') $value += 10;
		//
		echo "$value <br>";
	}
	//
	////////////////////////////////////////////////////////////////////////
	//Declara parametro
	$a = 10;
	$b = 10;

	//Cria função
	///& cria referencia a variavel esterna(ponteiro)
	function trocaValor($a, &$b) 
	{
		$a = 50;
		$b += 50;
		//
		return "$a $b";
	}

	//Trabalha função
	echo trocaValor($a, $b). "<br>";
	echo "$a $b <br>";
	//
	////////////////////////////////////////////////////////////////////////
	//
	function strArq()
	{
		//Recupera todos os parametros passados na chamada da função 
		$argumentos = func_get_args();
		//
		var_dump($argumentos);
		echo "<br>";
	}
	//
	strArq("Bom dia", 10);
	//
	////////////////////////////////////////////////////////////////////////
	//Valores obrigatorios devem estar na esquerda
	function strTxt($texto = " Olá mundo", $periodo = "Bom dia")
	{
		return " $texto! $periodo! <br>";
	}

	//Chama função
	echo strTxt();
	echo strTxt("", "Boa noite");
	echo strTxt("Olá João", "Boa tarde");
	echo strTxt("Olá Glaucio", "");
	//
	////////////////////////////////////////////////////////////////////////
	//Cria função
	function minSalario()
	{
		return 946.00;
	}

	//Trabalhando função
	echo " José recebeu 3 salários: ". (3 * minSalario()) . "<br>";
	//
	////////////////////////////////////////////////////////////////////////
	//Cria função
	function ola()
	{
		echo " Olá Mundo! <br> ";
	}
	//
	function strOla()
	{
		return " Olá Mundo! <br> ";
	}

	//Chama função
	ola();
	//
	echo strOla();

	//Trabalhando a função
	$frase = strOla();
	//
	echo strlen($frase);//Mostra tamanho da frase
?>