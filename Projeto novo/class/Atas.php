<?
    class Atas
    {
        //Atributos
        private $idAta;
        private $txtNomeAta;
        private $dtPostagem;
        private $txtNomeArquivo;

        //Objetos
        private $fkResponsavel;

        /**
         * Get the value of idAta
         */ 
        public function getIdAta()
        {
            return $this->idAta;
        }

        /**
         * Set the value of idAta
         *
         * @return  self
         */ 
        public function setIdAta($idAta)
        {
            $this->idAta = $idAta;

            return $this;
        }

        /**
         * Get the value of txtNomeAta
         */ 
        public function getTxtNomeAta()
        {
            return $this->txtNomeAta;
        }

        /**
         * Set the value of txtNomeAta
         *
         * @return  self
         */ 
        public function setTxtNomeAta($txtNomeAta)
        {
            $this->txtNomeAta = $txtNomeAta;

            return $this;
        }

        /**
         * Get the value of dtPostagem
         */ 
        public function getDtPostagem()
        {
            return $this->dtPostagem;
        }

        /**
         * Set the value of dtPostagem
         *
         * @return  self
         */ 
        public function setDtPostagem($dtPostagem)
        {
            $this->dtPostagem = $dtPostagem;

            return $this;
        }

        /**
         * Get the value of txtNomeArquivo
         */ 
        public function getTxtNomeArquivo()
        {
            return $this->txtNomeArquivo;
        }

        /**
         * Set the value of txtNomeArquivo
         *
         * @return  self
         */ 
        public function setTxtNomeArquivo($txtNomeArquivo)
        {
            $this->txtNomeArquivo = $txtNomeArquivo;

            return $this;
        }

        /**
         * Get the value of fkResponsavel
         */ 
        public function getFkResponsavel()
        {
            return $this->fkResponsavel;
        }

        /**
         * Set the value of fkResponsavel
         *
         * @return  self
         */ 
        public function setFkResponsavel($fkResponsavel)
        {
            $this->fkResponsavel = $fkResponsavel;

            return $this;
        }

        /**
         * Recebe um array via $_POST e alimenta as
         * variaveis comos dados correspondentes
         */
        public function setDadosForm($post)
        {
            try{
                $this->setTxtNomeAta     ($post['txtNomeAta']);
                $this->setDtPostagem     ($post['dtPostagem']);
                $this->setTxtNomeArquivo ($post['txtNomeArquivo']);
                $this->setFkResponsavel  ($post['fkResponsavel']);
            }//fim do try

            catch(Exception $e)
            {
                return json_encode(Msg::arrayErros($e));
            }//fim do catch
        }//fim função setDadosForm

        /**
         * Busca um cadastro no banco de dados e retorna um array com os dados
         */
        public function get()
        {
            try{
                echo "GET()";
            }//fim do try

            catch(Exception $e)
            {
                return json_encode(Msg::arrayErros($e));
            }//fim do catch
        }//fim função

        /**
         * Busca todos os dados de uma tabela no banco de dados
         * e retorna um array
         */
        public function static listAll()
        {
            try{
                $sql = new Sql();
                return $sql->select("SELECT * FROM tblAtas;");
            }//fim do try

            catch(Exception $e)
            {
                return json_encode(Msg::arrayErros($e));
            }//fim do catch
        }//fim função listAll()

        /**
         * Faz um INSERT no banco de dados
         */
        public function Save()
        {
            try{
                echo "Save()";
            }//fim do try

            catch(Exception $e)
            {
                return json_encode(Msg::arrayErros($e));
            }//fim do catch
        }//fim função Save()

        /**
         * Modifica os dados de um cadastro que e indetificado pelo id 
         * usando um UPDATE
         */
        public function Update()
        {
            try{
                echo "UPDATE()";
            }//fim do try

            catch(Exception $e)
            {
                return json_encode(Msg::arrayErros($e));
            }//fim do catch
        }//fim funçõa Update

        /**
         * Elimina um cadastro do banco de dados que e 
         * indetificado pelo id 
         */
        public function delete()
        {
            try{
                $sql = new Sql();
                return($sql->query("DELETE FROM tblAtas WHERE idAtas = :ID", 
                        array(
                            ':ID' => $this->getIdAtas()
                        )//fim array
                    )//fim query
                );//fim return
            }//fim do try

            catch(Exception $e)
            {
                return json_encode(Msg::arrayErros($e));
            }//fim do catch
        }//fim função delete()
    }
?>