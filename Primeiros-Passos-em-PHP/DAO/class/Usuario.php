<?php
	require_once("config.php");

	/**
	 * Class responsavel por cadastrar e manipular os dados de usuario
	 */
	class Usuario
	{
		private $idUsuario;
		private $desLogin;
		private $desSenha;
		private $dtCadastro;
		
		# Métodos get
		public function getIdUsuario()
		{
			return $this->idUsuario;
		}

		public function getDesLogin()
		{
			return $this->desLogin;
		}

		public function getDesSenha()
		{
			return $this->desSenha;
		}

		public function getDtCadastro()
		{
			return $this->dtCadastro;
		}

		# Métodos set
		public function setIdUsuario($idUsuario)
		{
			$this->idUsuario = $idUsuario;
		}

		public function setDesLogin($desLogin)
		{
			$this->desLogin = $desLogin;
		}

		public function setDesSenha($desSenha)
		{
			$this->desSenha = $desSenha;
		}

		public function setDtCadastro($dtCadastro)
		{
			$this->dtCadastro = $dtCadastro;
		}

		/** Busca as informações de um usuario pelo id e devolve um array(array)*/
		public function loadById($id)
		{
			$sql = new Sql();

			$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
					":ID"=>$id
				));
			# Testa a existencia de dados no banco
			if(count($results) > 0)
			{
				$this->setData($results[0]);
			}
		}

		# Carrega uma lista de usuarios;
		public static function getList()
		{
			$sql = new Sql();
			return $sql->select("SELECT *FROM tb_usuarios ORDER BY deslogin;");
		}

		# Busca usuarios pelo login
		public static function getSearch($login)
		{
			$sql = new Sql();
			return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
				':SEARCH' => '%'.$login.'%'
			));
		}

		# Busca usuarios apartir de login e senha do mesmo
		public function login($login, $password)
		{
			$sql = new Sql();
			$result= $sql->select("SELECT *FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSW",
				array(
				':LOGIN' => $login,
				':PASSW' => $password
				)
			);
			if(count($result) > 0)
			{
				$this->setData($result[0]);
			}
			else{
				throw new Exception(" Login e/ou senha inválidos. ");
			}
		}

		# Carrega os dados do banco para o objeto
		private function setData($data)
		{
			$this->setIdUsuario($data['idusuario']);
			$this->setDesLogin ($data['deslogin']);
			$this->setDesSenha ($data['dessenha']);
			$this->setDtCadastro(new DateTime($data['dtcadastro']));
		}

		# Cadastra um novo usuario o banco de dados e devolve os dados
		public function insert()
		{
			$sql = new Sql();
			/* 
			 * Utilisa de uma procedures nome:sp_usuarios_insert(:LOGIN,:PASSWORD)
			 * pre definida no banco para devolver o id registrado apos o insert
			*/
			$result = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)",
				array(
					':LOGIN' => $this->getDesLogin(),
					':PASSWORD' => $this->getDesSenha()
				)
			);
			
			if(count($result) > 0)
			{
				$this->setData($result[0]);
			}
		}

		public function setupdate($login, $password)
		{
			$this->setDesLogin($login);
			$this->setDesSenha($password);

			$sql = new Sql();

			$sql->setquery("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID",
				array(
					':LOGIN' => $this->getDesLogin(),
					':PASSWORD' => $this->getDesSenha(),
					':ID' =>$this->getIdUsuario()
				)
			);
		}

		public function DBdelete()
		{
			$sql = new Sql();
			$sql -> setquery("DELETE FROM tb_usuarios WHERE idusuario = :ID",
				array(
					':ID' => $this->getIdUsuario()
				)
			);
			$this->setIdUsuario(0);
			$this->setDesLogin ("");
			$this->setDesSenha ("");
			$this->setDtCadastro(new DateTime());
		}

		public function __construct($login ="", $password="")
		{
			$this->setDesLogin($login);
			$this->setDesSenha($password);
		}

		public function __toString()
		{
			return json_encode(array
				(
					"idusuario"  => $this->getIdUsuario(),
					"deslogin"   => $this->getDesLogin(),
					"dessenha"   => $this->getDesSenha(),
					"dtcadastro" => $this->getDtCadastro()->format("d/m/Y H:i:s")
				)
			);
		}
	}
?>