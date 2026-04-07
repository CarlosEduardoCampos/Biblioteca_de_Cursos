<?php 
    class Usuario{
        # Variaveis do Usuario:
        private $id_usuario;
        private $des_login;
        private $des_senha;
        private $dt_cadastro;

        # Metodo costrutor iniciando login  e senha:
        public function __construct($login=null, $password=null)
        {
            $this->des_login = $login;
            $this->des_senha = $password;
        }

        # Metodos GET_&_SET:
        # $id_usuario
        public function getIdUsuario():int
        {
            return $this->id_usuario;
        }
        public function setIdUsuario($id)
        {
            $this->id_usuario = $id;
        }
        # $des_login
        public function getDesLogin():string
        {
            return $this->des_login;
        }
        public function setDesLogin($login)
        {
            $this->des_login = $login;
        }
        # $des_senha
        public function getDesSenha():string
        {
            return $this->des_senha;
        }
        public function setDesSenha($senha)
        {
            $this->des_senha = $senha;
        }
        # $dt_cadastro
        public function getDtCadastro()
        {
            return $this->dt_cadastro;
        }
        public function setDtCadastro($dt_cad)
        {
            $this->dt_cadastro = $dt_cad;
        }
        # Inicializa as variaveis um usuario com os dados do banco:
        /**
         * Recebe como parametro primeira linha que foi retornada:
         * $data = $resuts[0];
        */
        public function setData($data)
        {
            # Inicia o usuario com os dados do banco:
            $this->setIdUsuario($data['id_usuario']);
            $this->setDesLogin($data['desLogin']);
            $this->setDesSenha($data['desSenha']);
            # Formata o data que foi recebida do banco: new DateTime($server_data);
            $this->setDtCadastro(new DateTime($data['dt_cadastro']));
        }
        # Carrega um usuario pelo id_usuario:
        public function loadById($id)
        {
            # Inicia o Banco de dados:
            $sql = new SQL();

            # Executa a query Select no Banco e retorna os dados de usuarios:
            $results = $sql->dbSelect('SELECT* FROM tb_usuarios WhERE id_usuario=:ID', array(
                ':ID' => $id
            ));

            # Testa se o SELECT retornou alguma informação
            if ($results[0] > 0)
            {
                # Inicia o usuario com os dados do banco:
                $this->setData($results[0]);
            }
        }
        # Metodo varrega a lista de usuarios cadastrados:
        public static function getList()
        {
            # Inicia o banco de dados:
            $sql = new SQL();

            # Executa a query Select no Banco e retorna os dados de usuarios:
            return $sql->dbSelect('SELECT id_usuario, desLogin AS login FROM tb_usuarios ORDER BY login;');
        }
        # Busca um usuario cadastrado no banco pelo login:
        public static function search($login)
        {
            # Inicia o Banco de Dados:
            $sql = new SQL();

            # Executa a query Select no Banco e retorna os dados de usuarios:
            return $sql->dbSelect('SELECT id_usuario, desLogin as login FROM tb_usuarios WHERE desLogin LIKE :LOGIN;', array(
                ':LOGIN'=>"%$login%"
            ));
        }
        # Busca um usuario autenticado:
        public function login($login, $password)
        {
            # Inicia o banco de dados:
            $sql = new SQL();

            # Executa a query Select no Banco e retorna os dados de usuarios:
            $results = $sql->dbSelect('SELECT*FROM tb_usuarios WHERE desLogin=:LOGIN AND desSenha=:SENHA;', array(
                ':LOGIN'=>$login,
                ':SENHA'=>$password
            ));

            # Testa se o SELECT retornou alguma informação:
            $existe_usuario = (count($results)>0);
            if($existe_usuario)
            {
                # Inicia o usuario com os dados do banco:
                $this->setData($results[0]);
            }
            else{
                throw new Exception('Login e/ou senha inválidos.');
            }
        }
        # Metodo Cadastra um usuario no banco:
        public function insert()
        {
            # Inicia o Banco de Dados:
            $sql = new SQL();
            
            # Executa uma PROCEDURE no banco com os dados de usuario e retorna o ultimo cadastro:
            $results=$sql->dbSelect('CALL sp_usuarios_insert(:LOGIN, :PASSWORD)', array(
                ':LOGIN'=>$this->getDesLogin(),
                ':PASSWORD'=>$this->getDesSenha()
            ));

            # Testa se o SELECT retornou alguma informação:
            $existe_usuario = (count($results)>0);
            if($existe_usuario)
            {
                # Inicia o usuario com os dados do banco:
                $this->setData($results[0]);
            }
            else{
                throw new Exception('Login e/ou senha inválidos.');
            }
        }
        public function update($login, $password)
        {
            # Inicia os dados do usuario:
            $this->setDesLogin($login);
            $this->setDesSenha($password);

            # Inicia o banco de dados:
            $sql = new SQL();

            # Executa uma query de UPDATE no banco:
            $sql->dbQuery('UPDATE tb_usuarios SET desLogin=:LOGIN, desSenha=:SENHA WHERE id_usuario= :ID;',array(
                ':LOGIN'=>$this->getDesLogin(),
                ':SENHA'=>$this->getDesSenha(),
                ':ID'=>$this->getIdUsuario()
            ));
        }
        # Metodo apaga um cadasto do banco:
        public function delete()
        {
            # Inicia o banco de dados:
            $sql = new SQL();

            # Executa a query DELETE no banco de dados:
            $sql->dbQuery('DELETE FROM tb_usuarios WHERE id_usuario=:ID;', array(
                ':ID'=>$this->getIdUsuario()
            ));

            # Limpa os dados do usuario carrgado:
            $this->setIdUsuario(0);
            $this->setDesLogin('');
            $this->setDesSenha('');
            $this->setDtCadastro(new DateTime());
        }
        # Metodo de retorno padrão:
        public function __toString()
        {
            return json_encode(array(
                'id_usuario'=>$this->getIdUsuario(),
                'login'=>$this->getDesLogin(),
                'senha'=>$this->getDesSenha(),
                'cadastro'=>$this->getDtCadastro()->format('d/m/Y H:i:s')
            ));
        }
    }
?>