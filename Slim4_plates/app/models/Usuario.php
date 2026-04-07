<?php
namespace app\models;
use Error;

class Usuario
{
    # Variaveis do Usuario:
    private $id_usuario = 0;
    private $login = '';
    private $senha = '';
    private $telefone = '';
    private $email = '';

    # Inicializa as variaveis um usuario com os dados do banco:
    /**
     * Recebe como parametro primeira linha que foi retornada:
     * $data = $resuts[0];
    */
    public function setData($data)
    {
        # Inicia o usuario com os dados do banco:
        $this->id_usuario = $data['id_usuario'];
        $this->login      = $data['login'];
        $this->senha      = $data['senha'];
        $this->telefone   = $data['telefone'];
    }
    # Inicializa as variaveis do usuario como vazio:
    public function setVoid()
    {
        $this->setData([
            'id_usuario' => 0,
            'login'      => '',
            'senha'      => '',
            'telefone'   => '',
            'email'      => ''
        ]);
    }
    # Carrega um usuario pelo id_usuario:
    public function loadById($id)
    {
        try {
            $sql = new SQL();
            $query = 'SELECT id_usuario, login, email, telefone FROM Usuarios WHERE id_usuario=:ID;';
            $params = [':ID' => $id];

            return $sql->dbSelect($query, $params);
        }
        catch(Error $e)
        {
            return json_encode(Msg::arrayErros($e));
        }
        
    }
    # Metodo varrega a lista de usuarios cadastrados:
    public static function getList()
    {
        try {
            $sql = new SQL();
            $query = 'SELECT id_usuario, login, email, telefone FROM Usuarios ORDER BY login;';

            return $sql->dbSelect($query);
        }
        catch (Error $e) {
            return json_encode(Msg::arrayErros($e));
        }
        
    }
    # Busca um usuario cadastrado no banco pelo login:
    public static function search($login)
    {
        try{

            $sql = new SQL();
            $query = 'SELECT id_usuario, login as login FROM Usuarios WHERE login LIKE :LOGIN;';
            $params = [':LOGIN'=>"%$login%"];

            return $sql->dbSelect($query, $params);
        }
        catch (Error $e) {
            return json_encode(Msg::arrayErros($e));
        }
    }
    //Obj.: Consulta se o usuário já está logado no sistema, caso não esteja impede acesso a página solicitada e envia para tela de login
    public static function verifyLogin(){
        if(!isset($_SESSION["Usuario"]["id_usuario"])){
            header("location: /login");
            exit;
        }
    }
    # Busca um usuario autenticado:
    public function log()
    {
        try {
            $sql = new SQL();
            $query = 'SELECT*FROM Usuarios WHERE login=:LOGIN AND senha=:SENHA;';
            $params = [
                ':LOGIN'=>$this->login, 
                ':SENHA'=>$this->senha
            ];
            return $sql->dbSelect($query, $params);
        }
        catch (Error $e) {
            return json_encode(Msg::arrayErros($e));
        }
    }
    # Metodo Cadastra um usuario no banco:
    public function create()
    {
        try {
            $sql = new SQL();
            $query = 'CALL insertUpdateUsuarios(0, :LOGIN, :PASSWORD, :PHONE, :EMAIL)';
            $params = [
                ':LOGIN'    =>$this->login,
                ':PASSWORD' =>$this->senha,
                ':PHONE'    =>$this->telefone,
                ':EMAIL'    =>$this->email
            ];
            $results = $sql->dbSelect($query, $params);
            $this->setData($results[0]);

        }
        catch (Error $e) {
            return json_encode(Msg::arrayErros($e));
        }
    }
    # Metodo Edita um cadastro no banco
    public function update()
    {
        try {
            $sql = new SQL();
            $query = 'CALL insertUpdateUsuarios(:ID, :LOGIN, :PASSWORD, :PHONE, :EMAIL)';
            $params = [
            ':ID'       => $this->id_usuario,
            ':LOGIN'    => $this->login,
            ':PASSWORD' => $this->senha,
            ':PHONE'    => $this->telefone,
            ':EMAIL'    => $this->email
            ];
            
            return $sql->dbSelect($query, $params);
        }
        catch (Error $e) {
            return json_encode(Msg::arrayErros($e));
        }
        
    }
    # Metodo apaga um cadasto do banco:
    public function delete($id)
    {
        try {
            $sql = new SQL();
            $query = 'DELETE FROM Usuarios WHERE id_usuario=:ID;';
            $params = [':ID'=> $id];
            $sql->dbQuery($query, $params);
            # Limpa os dados do usuario carrgado:
            $this->setVoid();
        }
        catch(Error $e){
            return json_encode(Msg::arrayErros($e));
        }
        
    }
    # Metodo de retorno padrão:
    public function __toArray()
    {
        return([
            'id_usuario'=>$this->getIdUsuario(),
            'login'=>$this->getLogin(),
            'email'=>$this->getEmail(),
            'senha'=>$this->getSenha(),
            'telefone'=>$this->getTelefone()
        ]);
    }

    # Metodo costrutor iniciando login  e senha:
    public function __construct($login=null, $email=null, $password=null)
    {
        $this->login = $login;
        $this->email = $email;
        $this->senha = $password;
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
    # $login
    public function getLogin():string
    {
        return (string) $this->login;
    }
    public function setLogin($login)
    {
        $this->login = $login;
    }
    # $email
    public function getEmail():string
    {
        return (string) $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    # $senha
    public function getSenha():string
    {
        define('KEY_IV', pack('a16', 'pirilampos'));
        define('KEY', pack('a16', 'covidUsuarios19forabolsonaro'));
        return (openssl_decrypt($this->senha, 'AES-128-CBC',KEY, 0, KEY_IV ));
    }
    public function setSenha($senha)
    {
        if(!defined('SECRET_IV'))
        {
            define('SECRET_IV', pack('a16', 'pirilampos'));
            define('SECRET', pack('a16', 'covidUsuarios19forabolsonaro'));
        }
           
        $this->senha = openssl_encrypt($senha,'AES-128-CBC', SECRET, 0, SECRET_IV);
    }
    # $telefone
    public function getTelefone()
    {
        return $this->telefone;
    }
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }
}
?>