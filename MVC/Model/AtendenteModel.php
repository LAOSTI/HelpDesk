<?php
require_once "Model/Data/Connection.php";
    class Atendente{
        private $NOME;
        private $TELEFONE;
        private $EMAIL;
        private $USUARIO;
        private $SENHA;
        private $FUNCAO;
        private $IDLOGIN;
        

        public function cadastrarAtendente(){
            try{
                $conn = Connection::Connect();

                $sql = $conn->prepare("insert into HELPDESK.ATENDENTE(NOME,TELEFONE,EMAIL,USUARIO,SENHA,FUNCAO,IDLOGIN)
                values(:name, :phone, :mail, :user, :password, :func, idLogin)");

                $sql->bindParam("name",$NOME);
                $sql->bindParam("phone",$TELEFONE);
                $sql->bindParam("mail",$EMAIL);
                $sql->bindParam("user",$USUARIO);
                $sql->bindParam("password",$SENHA);
                $sql->bindParam("func",$FUNCAO);
                $sql->bindParam("idLogin",$IDLOGIN);
                $NOME=$this->NOME;
                $TELEFONE=$this->TELEFONE;
                $EMAIL=$this->EMAIL;
                $USUARIO=$this->USUARIO;
                $SENHA=$this->SENHA;
                $FUNCAO=$this->FUNCAO;
                $IDLOGIN=$this->IDLOGIN;
                $sql->execute();
                echo "Cadastro realizado!";
            }catch(PDOException $e){
                echo "Conexão falhou! ". $e->getMessage();
            }
        }

        /**
         * Get the value of NOME
         */ 
        public function getNOME()
        {
                return $this->NOME;
        }

        /**
         * Set the value of NOME
         *
         * @return  self
         */ 
        public function setNOME($NOME)
        {
                $this->NOME = $NOME;

                return $this;
        }

        /**
         * Get the value of TELEFONE
         */ 
        public function getTELEFONE()
        {
                return $this->TELEFONE;
        }

        /**
         * Set the value of TELEFONE
         *
         * @return  self
         */ 
        public function setTELEFONE($TELEFONE)
        {
                $this->TELEFONE = $TELEFONE;

                return $this;
        }

        /**
         * Get the value of EMAIL
         */ 
        public function getEMAIL()
        {
                return $this->EMAIL;
        }

        /**
         * Set the value of EMAIL
         *
         * @return  self
         */ 
        public function setEMAIL($EMAIL)
        {
                $this->EMAIL = $EMAIL;

                return $this;
        }

        /**
         * Get the value of USUARIO
         */ 
        public function getUSUARIO()
        {
                return $this->USUARIO;
        }

        /**
         * Set the value of USUARIO
         *
         * @return  self
         */ 
        public function setUSUARIO($USUARIO)
        {
                $this->USUARIO = $USUARIO;

                return $this;
        }

        /**
         * Get the value of SENHA
         */ 
        public function getSENHA()
        {
                return $this->SENHA;
        }

        /**
         * Set the value of SENHA
         *
         * @return  self
         */ 
        public function setSENHA($SENHA)
        {
                $this->SENHA = $SENHA;

                return $this;
        }

        /**
         * Get the value of FUNCAO
         */ 
        public function getFUNCAO()
        {
                return $this->FUNCAO;
        }

        /**
         * Set the value of FUNCAO
         *
         * @return  self
         */ 
        public function setFUNCAO($FUNCAO)
        {
                $this->FUNCAO = $FUNCAO;

                return $this;
        }

        /**
         * Get the value of IDLOGIN
         */ 
        public function getIDLOGIN()
        {
                return $this->IDLOGIN;
        }

        /**
         * Set the value of IDLOGIN
         *
         * @return  self
         */ 
        public function setIDLOGIN($IDLOGIN)
        {
                $this->IDLOGIN = $IDLOGIN;

                return $this;
        }
    }
?>