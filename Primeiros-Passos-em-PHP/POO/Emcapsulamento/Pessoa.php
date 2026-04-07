<!--Pessoa.php-->
<?php 
	class Pessoa
	{
		public $nome = "Rasmus Lerdorf";// todo mundo vé
		protected $idade = 48; // pode ser visto nas heranças
		private $senha = "123456"; // so pode ser visto na class

		public function __toString()
		{
			return "NOME:  $this->nome  <br/>" .
				   "IDADE: $this->idade <br/>" .
				   "SENHA: $this->senha <br/>" ;
		}
	}
	class Programador extends Pessoa
	{
		public function __toString()
		{
			return "NOME:  $this->nome  <br/>" .
				   "IDADE: $this->idade <br/>" .
				   "SENHA: $this->senha <br/>" ;
		}
	}
	$objeto = new Programador;

	//echo $objeto->nome . "<br/>";
	//echo $objeto->idade . "<br/>";
	//echo $objeto->senha . "<br/>";
	echo $objeto;
?>