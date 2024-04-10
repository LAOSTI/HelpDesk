<?php
require_once "Model/Data/Connection.php";
    class Login{
        private $USUARIO;
        private $SENHA;

        public function cadastrarUsuario(){
            try{
                $conn = Connection::Connect();

                $sql = $conn->prepare("insert into HELPDESK.LOGIN(USUARIO,SENHA)
                values(:user, :password)");

                $sql->bindParam("user",$USUARIO);
                $sql->bindParam("password",$SENHA);
                $USUARIO=$this->USUARIO;
                $SENHA=$this->SENHA;
                $sql->execute();
                echo "Cadastro realizado!";
            }catch(PDOException $e){
                echo "Conexão falhou! ". $e->getMessage();
            }
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
    }
?>