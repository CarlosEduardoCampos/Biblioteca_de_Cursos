<?php
	//require_once(config.php);
	//
	class Sql extends PDO
	{
		private $conect;

		public function __construct()
		{
			$this ->conect = new PDO("mysql:dbname=dbphp7;host=localhost","root","pass1386");
		}

		/* Percorre um array preparando os parametros para
		executar o comando do banco de dados*/
		private function setParams($statment, $paramets = array())
		{
			foreach ($paramets as $key => $value)
			{
				$this->setParam($statment, $key, $value);
			}
		}

		/* Aponta para as variaveis dos parametros que 
		serâo adicionados no banco de dados */
		private function setParam($statment, $key, $value)
		{
			$statment->bindParam($key, $value);
		}

		/* Conecta se com o banco e executa o comando predefinido */
		public function setquery($rawQuery, $params = array())
		{
			$stmt = $this->conect->prepare($rawQuery);

			$this->setParams($stmt, $params);
			$stmt->execute();

			return $stmt;
		}

		/* Retorna um array com os dados do banco */
		public function select($rawQuery, $params = array()):array
		{
			$stmt = $this->setquery($rawQuery, $params);
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

	}
?>