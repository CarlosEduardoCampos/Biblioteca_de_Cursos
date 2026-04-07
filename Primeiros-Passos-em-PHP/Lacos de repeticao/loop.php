<!-- Cria um formulario -->
<form>

	<!-- Cria um campo para receber texto -->
	NOME <input type="text" name="nome"></br>
	<!-- Cria menu de opção de data -->
	NACIMENTO <input type="date" name="data"></br>
	<!-- Cria botão com testo ok -->
	<input type="submit" value=" OK "> <!-- devolve $_GET -->

</form>

<?php
	//DO{}WHILE;
	$total= 100;
	$desconto = 0.09;
	//
	do{
		$total *= $desconto;
	}while($total > 100);
	echo " $total <br>";
	//WHILE
	$condicao = true;
	while ($condicao) 
	{
		$numero = rand(1, 10);
		//
		if ($numero === 3)
		{
			echo " TRÊS !!! <br>";
			$condicao = false;
		}else{
			echo " $numero, ";
		}
		//
	}
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//FOREACH
	if(isset($_GET))//testa se esta vazio
	{
		//$_GET >>> arq  $key >>> name = ""  $value = valor do input 					
		foreach ($_GET as $key => $value)
		{
			echo " Nome do campo:  $key <br>";
			echo " Valor do campo: ". $value ." <br>";
			echo " <hr> ";// Cria uma linha na tela
		}
	}
	exit;
	//
	$meses = array("JANEIRO", "FEVEREIRO", "MARÇO"   , "ABRIL"  , "MAIO"    , "JUNHO",
				   "JULHO"  , "AGOSTO"   , "SETEMBRO", "OUTUBRO", "NOVEMBRO", "DEZEMBRO");
	//
	foreach ($meses as $posicao => $mes)
	{
		echo "Na posição $posicao <br>";
		echo "O mês é: $mes <br><br>";
	}
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// cria um menu de seleção para data ano
	echo "<select>";
	//	 $i = ano atual
		for ($i = date("Y"); $i > date("Y")-100 ; $i--)
		{
		echo '<option value="'.$i.'"> '. $i .' </option><br>';
		}
		//
	echo "</select>";
	for ($i=0; $i < 1000; $i++)
	{
		if($i > 200 && $i < 800)continue;//este comando iguinora o echo entre $i == 200 é $i == 800
		//
		echo " Passo >>> $i <br>";
	}
	//
?>