<?php
	// SWITCH
	$diaDaSemana = date("w");//Pucha um numero de 0 até 6 referente ao dia da semana
	//
	switch ($diaDaSemana) 
	{
		case '0':
			echo " Hoje é Domingo <br>";
			break;
		case '1':
			echo " Hoje é Segunda-feira <br>";
			break;
		case '2':
			echo " Hoje é Terça-feira <br>";
			break;
		case '3':
			echo " Hoje é Quarta-feira <br>";
			break;
		case '4':
			echo " Hoje é Quinta-feira <br>";
			break;
		case '5':
			echo " Hoje é Sexta-feira <br>";
			break;
		case '6':
			echo " Hoje é Sabado <br>";
			break;
		default:
			echo "..... Erro do sistema na busca de uma data ....<br>";
			break;
	}
	//
	///////////////////////////////////////////////////////////////////////////////////////////
	// IF // ELSE IF // ELSE
	$qualSuaIdade = 30;
	//
 	$IDADE_CRIANCA = 12;
 	$IDADE_ADULTO  = 18;
 	$IDADE_MELHOR  = 65;
 	//
	if($qualSuaIdade < $IDADE_CRIANCA)
	{
		echo " Criança </br>";
	}
	elseif($qualSuaIdade < $IDADE_ADULTO)
	{
		echo " Adolescente </br>";
	}
	elseif($qualSuaIdade < $IDADE_MELHOR)
	{
		echo " Adulto </br>";
	}else{
		echo " Velho </br>";
	}
	//Estrutura simplificada de if else, operador ternario
	echo($qualSuaIdade < $IDADE_ADULTO)?"Menor de Idade":"Maior de Idade"; 
?>