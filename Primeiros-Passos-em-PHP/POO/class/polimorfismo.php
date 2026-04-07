<!--polimorfismo.php-->
<?php 

	abstract class Animal
	{
		public function granir()
		{
			return "Som";
		}
		public function mover()
		{
			return "Anda";
		}
	}

	class Cachorro extends Animal
	{
		public function granir()
		{
			return "Late";
		}
	}
	class Gato extends Animal
	{
		public function granir()
		{
			return "Mia";
		}
	}
	class Passaro extends Animal
	{
		public function granir()
		{
			return "Canta";
		}
		public function mover()
		{
			return "Voar e ". parent::mover();//chama valor da class herdada
		}
	}

	$pluto = new Cachorro();
	$garfield = new Gato();
	$pipiu = new Passaro();

	echo $pluto -> granir() . "<br/>";
	echo $pluto -> mover()  . "<br/>";

	echo "<hr>";

	echo $garfield -> granir() . "<br/>";
	echo $garfield -> mover()  . "<br/>";

	echo "<hr>";

	echo $pipiu -> granir() . "<br/>";
	echo $pipiu -> mover()  . "<br/>";

?>