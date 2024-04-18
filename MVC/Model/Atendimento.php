<?php
require_once "model/Connection.php";
class Atendimento{
    private $nomeAtendimento;
    private $telefone;
    private $email;
    private $usuario;
    private $idDesenvolvimento;
    private $idInfraestrutura;
    private $idHelp_Desk;

    public function cadastrarAtendimento(){
        try{
            $conn = Connection::Connect();

            $sql = $conn->prepare("insert into HELPDESK.ATENDIMENTO(NOME, TELEFONE, EMAIL, USUARIO, IDDESENVOLVEDOR, IDINFRAESTRTURA, IDHELP_DESK )
                    values (:Nome, :fone, :mail, :Usuari, :desenvolvedor, :infra, :help)");
                    $sql->bindParam("Nome", $nomeAtendimento);
                    $sql->bindParam("fone", $telefone);
                    $sql->bindParam("mail", $email);
                    $sql->bindParam("Usuari", $usuario);
                    $sql->bindParam("desenvolvedor", $idDesenvolvimento);
                    $sql->bindParam("infra", $idInfraestrutura);
                    $sql->bindParam("help", $idHelp_Desk);


                    $nomeAtendimento -> this.$nomeAtendimento;
                    $telefone -> this.$telefone;
                    $email -> this.$email;
                    $usuario -> this.$usuario;
                    $idDesenvolvimento -> this.$idDesenvolvimento;
                    $idInfraestrutura -> this.$idInfraestrutura;
                    $idHelp_Desk -> this.$idHelp_Desk;
                    $sql->execute();





        } catch(Exception $e){
            echo "conexão falhou". $e -> getMessage();
        }
    
    

    }
    
    public function getNomeAtendimento()
    {
        return $this->nomeAtendimento;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setnomeAtendimento($nomeAtendimento)
    {
        $this->nomeAtendimento = $nomeAtendimento;

        return $this;
    }

    /**
     * Get the value of telefone
     */ 
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set the value of telefone
     *
     * @return  self
     */ 
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of usuario
     */ 
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set the value of usuario
     *
     * @return  self
     */ 
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get the value of idDesenvolvimento
     */ 
    public function getIdDesenvolvimento()
    {
        return $this->idDesenvolvimento;
    }

    /**
     * Set the value of idDesenvolvimento
     *
     * @return  self
     */ 
    public function setIdDesenvolvimento($idDesenvolvimento)
    {
        $this->idDesenvolvimento = $idDesenvolvimento;

        return $this;
    }

    /**
     * Get the value of idInfraestrutura
     */ 
    public function getIdInfraestrutura()
    {
        return $this->idInfraestrutura;
    }

    /**
     * Set the value of idInfraestrutura
     *
     * @return  self
     */ 
    public function setIdInfraestrutura($idInfraestrutura)
    {
        $this->idInfraestrutura = $idInfraestrutura;

        return $this;
    }

    /**
     * Get the value of idHelp_Desk
     */ 
    public function getIdHelp_Desk()
    {
        return $this->idHelp_Desk;
    }

    /**
     * Set the value of idHelp_Desk
     *
     * @return  self
     */ 
    public function setIdHelp_Desk($idHelp_Desk)
    {
        $this->idHelp_Desk = $idHelp_Desk;

        return $this;
    }
}







?>