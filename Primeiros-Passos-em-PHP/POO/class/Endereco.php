<!--Endereco.php-->
<?php 
	class Endereco
	{
		private $logradouro;
		private $numero;
		private $cidade;

		//Método construtor
		public function __construct($a, $b, $c)
		{
			$this -> logradouro = $a;
			$this -> numero = $b;
			$this -> cidade = $c;
		}

		//Métotos magicos (automaticos)
		public function __destruct()
		{
			var_dump("DESTRUIR");
		}

		public function __toString()
		{
			return $this -> logradouro .", ".$this -> numero." - ".$this -> cidade;
		}
	}

	//Objetos
	$meuEndereco = new Endereco("Rua Ademar Saraiva Leão","123","Santos");

	var_dump($meuEndereco);
	echo "<br>";

	//unset($meuEndereco);// chama __destruct

	echo $meuEndereco . "<br>";// chama __toString
?>