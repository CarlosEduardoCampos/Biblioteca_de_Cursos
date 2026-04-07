<?php 
	/**
	 * 
	 */
	class Usuario 
	{
		private $nome;
		private $datanacimento;
		function __construct($nome, $datanacimento)
		{
			$this->nome = $nome;
			$this->datanacimento = $datanacimento;
		}
	}
?>