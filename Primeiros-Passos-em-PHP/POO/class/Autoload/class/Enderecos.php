<!--Endereco.php-->
<?php 
	class Enderecos
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
	}
?>