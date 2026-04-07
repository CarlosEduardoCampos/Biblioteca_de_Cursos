<?php 
    class SQL extends PDO{
        # Variaveis da Classe:
        private $conn;

        # Metodo Costrutor:
        public function __construct()
        {
            # Variaveis de Conexão com Banco:
            $DB_NAME = 'php7';
            $DB_HOST = 'localhost';
            $DB_USER = 'root';
            $DB_PASS = 'testeBanco123';

            # Conexão com Banco:
            $this->conn = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASS);
        }

        # Metodo Liga $key ao valor $value de um array:
        /**
         * function setParams($statment, $parameters=array())
         * $statment ou $stmt -> sessão de conexão com banco;
         * $parameters -> lista de valores;
         */
        private function setParams($statment, $parameters=array())
        {
            foreach($parameters as $key=>$value){
                $this->setParam($statment, $key, $value);
            }
        }

        # Metodo Liga uma $key ao valor $value:
        /**
         * function setParams($statment, $key, $value)
         * $statment ou $stmt -> sessão de conexão com banco;
         * $parameters -> lista de valores;
         */
        private function setParam($statment, $key, $value)
        {
            $statment->bindParam($key,$value);  
        }

        # Metodo de criação de Querys que seram executadas no banco:
        /**
         * function query($rawQuery, $params = array())
         * $rawQuery -> E uma Query de Banco de Dados pura como select ou insert;
         * $params -> informações que subistituem ? ou :VARIAVEL distribuidos na query. 
         */
        public function dbQuery($rawQuery, $params=array())
        {
            # Prepara Query que sera executada no banco de dados:
            $stmt = $this->conn->prepare($rawQuery);

            # Liga ? ao valores:
            $this->setParams($stmt, $params);

            # Executa a Query no Banco de Dados:
            $stmt->execute();

            # Retorna objeto da sessão:
            return $stmt;
        }

        # Metodo Seleciona as infomações de uma tabela no banco:
        /**
         * function dbSelect($rawQuery, $params = array())
         * $rawQuery -> E uma Query de Banco de Dados pura como select ou insert;
         * $params -> informações que subistituem ? ou :VARIAVEL distribuidos na query. 
         */
        public function dbSelect($rawQuery, $params=array()):array
        {
            $stmt = $this->dbQuery($rawQuery, $params);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>