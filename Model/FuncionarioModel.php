<?php
require_once "Model/Data/Connection.php";
    class Funcionario{
        private $NOME;
        private $TELEFONE;
        private $EMAIL;
        private $CARGO;
        

        public function cadastrarAtendente(){
            try{
                $conn = Connection::Connect();

                $sql = $conn->prepare("insert into HELPDESK.FUNCIONARIO(NOME,TELEFONE,EMAIL,CARGO)
                values(:name, :phone, :mail, :carg)");

                $sql->bindParam("name",$NOME);
                $sql->bindParam("phone",$TELEFONE);
                $sql->bindParam("mail",$EMAIL);
                $sql->bindParam("carg",$CARGO);
                $NOME=$this->NOME;
                $TELEFONE=$this->TELEFONE;
                $EMAIL=$this->EMAIL;
                $CARGO=$this->CARGO;
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
         * Get the value of CARGO
         */ 
        public function getCARGO()
        {
                return $this->CARGO;
        }

        /**
         * Set the value of CARGO
         *
         * @return  self
         */ 
        public function setCARGO($CARGO)
        {
                $this->CARGO = $CARGO;

                return $this;
        }
    }
?>