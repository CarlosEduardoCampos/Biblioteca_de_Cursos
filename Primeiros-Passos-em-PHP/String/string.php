<?php
	$frase = "A repetição é a mãe da retenção.";
	//
	///funça procura uma palavra
	$palavra = "mãe";
	// strpos(onde procura, oque procura) 
	$q = strpos($frase, $palavra); // devolve posição da palavra
	//
	///substr(onde procura, aparti de, ate)
	// Devolve parte da frase até palavra
	$texto = substr($frase, 0, $q);
	//
	var_dump($texto);
	echo "</br>";
	/*
		strlen(); devolve o tamanho da str
	*/
	$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
	echo "$texto2 </br>";
	///////////////////////////////////////////////////////////////////
	$empresa = "Hcode";
	//
	/// str_replace(oque muda, para oque muda, de onde muda)
	// toca uma coisa por outra
	$empresa = str_replace("o", "0", $empresa);
	$empresa = str_replace("e", "3", $empresa);
	//
	echo "$empresa </br>";
	///////////////////////////////////////////////////////////////////
    $nome = "carlos eduardo";
    //
    //echo stroupper($nome); 
    $nome = strtoupper($nome); // passa todas as letras para maiúsculo
    echo "$nome </br>";
    //
    $nome = strtolower($nome); // passa todas as letras para minúsculo
    echo "$nome </br>";
    //
    $nome = ucwords($nome);
    echo "$nome </br>";
    //
    $nome = ucfirst($nome);
    echo "$nome </br>";
    //////////////////////////////////////////////////////////////////
	 $nome_00 = "Hcode";
	 $nome_01 = ' Treinamentos';
	 //
	 var_dump($nome_00, $nome_01);
	 echo "</br>";
	 //
	 echo "imprimir $nome_00 ";
	 echo 'imprimir $nome_00';
?>