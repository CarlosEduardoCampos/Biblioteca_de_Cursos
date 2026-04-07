<!--Carro php -->
<?php 
	/**
	 * 
	 */
	class Carro
	{
		//Atributos
		private $modelo;
		private $motor;
		private $ano;

		//Métodos
		//// GET
		public function getModelo()
		{
			return $this->modelo;
		}
		public function getMotor():float
		{
			return $this->motor;
		}
		public function getAno():int
		{
			return $this->ano;
		}
		////  SET
		public function setModelo($modelo)
		{
			$this->modelo = $modelo;
		}
		public function setMotor($motor)
		{
			$this->motor = $motor;
		}
		public function setAno($ano)
		{
			$this->ano = $ano;
		}
		//
		public function toString()
		{
			return array
			(
				"MODELO" => $this-> getModelo() ,
				"MOTOR"  => $this-> getMotor()  ,
				"ANO"    => $this->	getAno()
			);
		}
	}

	//Instâcia objeto
	$gol = new Carro();

	// set valores
	$gol -> setModelo ("GOL GT");
	$gol -> setMotor  ("1.6")   ;
	$gol -> setAno    ("2017")  ;
	
	//mostra valores
	print_r($gol->toString());
	var_dump($gol->toString());
?>
