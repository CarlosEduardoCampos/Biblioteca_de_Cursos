Documento.php
<?php
	class Documento
	{
		private $numero

		public function getNumero()
		{
			return $this->numero;
		}
		public function setNumero($numero)
		{
			$this->numero = $numero;
		}
	}
	class Cpf extends Documento
	{
		public function validarCPF():bool
		{
			$cpf = $this->getNumero();
			//Validação do cpf
			return true;
		}
	}

	$doc = new Cpf();

	$doc -> setNumero("123454567892");
	$doc -> validarCPF();
?>