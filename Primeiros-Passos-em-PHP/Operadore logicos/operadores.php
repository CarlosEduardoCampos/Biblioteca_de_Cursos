<?php
	$resultado = 10 + 3 / 2;
	//
	echo $resultado . "</br>";
	//
	/*
		> maior / && se os dois são true / < menor
	*/
	// retorna valor bool(true ou false)
	$resultado = 10 + 3 / 2 > 5 && 10 + 5 < 3;
	//
	var_dump($resultado);
	///////////////////////////////////////////////////////////////////
	//Operadores de encremento e decremento
	$j = 10;
	//
	echo $j++ . "</br>";//Encrementa apos passar pela variavel
	echo $j . "</br>";
	//
	echo ++$j . "</br>";//Encrementa antes de passar pela variavel
	echo $j . "</br>";
	////
	$k = 10;
	//
	echo $k-- . "</br>";//Decrementa apos passar pela variavel
	echo $k . "</br>";
	//
	echo --$k . "</br>";//Decrementa antes de passar pela variavel
	echo $k . "</br>";	
	///////////////////////////////////////////////////////////////////
	//Comparação de valores NULL
	$g = NULL;
	$h = NULL;
	$i = 10;
	//Se o valor não for nulo ele escreve na tela
	echo $g ?? $h ?? $i . "</br>";
	///////////////////////////////////////////////////////////////////
	//Spaceship
	$e = 50;
	$f = 35;
	//
	/*
		Se $e > $f resposta =  1 
		Se $e = $f resposta =  0
		Se $e < $f resposta = -1
	*/
	var_dump($e <=> $f);
	///////////////////////////////////////////////////////////////////
	//Operadores de comparação
	$c = 30;
	$d = 55;
	//
	echo "</br> 30 é maior que 55?: ";
	var_dump($c > $d);
	//
	echo "</br> 30 é menor que 55?: ";
	var_dump($c < $d);
	//
	echo "</br> 30 é igual que 55?: ";
	var_dump($c == $d);
	//
	echo "</br> 30 o valor e tipo é igual que 55?: ";
	var_dump($c === $d);
	//
	echo "</br> 30 é diferente que 55?: ";
	var_dump($c != $d);
	///////////////////////////////////////////////////////////////////
	$a = 10;
	$b = 2;
	//
	echo "</br>Soma: " . $a + $b . "</br>";
	echo "Subitração: " . $a - $b . "</br>";
	echo "Multiplicação: " . $a * $b . "</br>";
	echo "Divisão inteira: " . $a / $b . "</br>";
	echo "Divisão resto: " . $a % $b . "</br>";
	echo "Potencia: " . $a ** $b . "</br>";
	///////////////////////////////////////////////////////////////////
	$valorTotal = 0;
	$valorTotal += 100;
	$valorTotal += 25;
	//
	echo $valorTotal . "</br>";
	//
	$valorTotal *= .9;
	//
	echo $valorTotal . "</br>";
	///////////////////////////////////////////////////////////////////
	$nome = "Hcode";
	//
	///Operandor de concatenação: agrupa duas String em uma frase
	echo $nome . " mais alguma coisa</br>"; 
	//
 	///Operandor de concatenação composto: agrupa duas String em uma variavel
	$nome .= " Treinamentos";
	echo $nome . "</br>"
?>