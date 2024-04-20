<?php
require_once "model/Connection.php";

class Chamado{
    private $descricao;
    private $dataAbertura;
    private $dataConclusao;
    private $grau;
    private $status;
    private $idFuncionario;
    private $idAtendimento;

    public function cadastrarChamado(){
         try{
             $conn = Connection::Connect();

            $sql = $conn->prepare("insert into HELPDESK.CHAMADO(DESCRACAO, DATAABERTURA, DATACONCLUSAO, GRAU, STATUS, IDFUNCIONARIO, IDATENDIMENTO)
            values(:descri, :dataabe,:dataconclu, :grau, :status, :funci, :atendimento)");
            $sql ->bindParam("decri", $descricao);
            $sql ->bindParam("dataabe", $dataAbertura);
            $sql ->bindParam("dataconclu", $dataConclusao);
            $sql ->bindParam("grau", $grau);
            $sql ->bindParam("status", $status);
            $sql ->bindParam("funci", $idFuncionario);
            $sql ->bindParam("atendimento", $idAtendimento);

            $descricao -> this.$descricao;
            $dataAbertura -> this.$dataAbertura;
            $dataConclusao -> this.$dataConclusao;
            $grau -> this.$grau;
            $status -> this.$status;
            $idFuncionario ->this.$idFuncionario;
            $idAtendimento -> this.$idAtendimento;
            $sql -> execute();

        }catch (Exception $e){
            echo "conexão falhou". $e -> getMessage();
        }
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */ 
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of dataAbertura
     */ 
    public function getDataAbertura()
    {
        return $this->dataAbertura;
    }

    /**
     * Set the value of dataAbertura
     *
     * @return  self
     */ 
    public function setDataAbertura($dataAbertura)
    {
        $this->dataAbertura = $dataAbertura;

        return $this;
    }

    /**
     * Get the value of dataConclusao
     */ 
    public function getDataConclusao()
    {
        return $this->dataConclusao;
    }

    /**
     * Set the value of dataConclusao
     *
     * @return  self
     */ 
    public function setDataConclusao($dataConclusao)
    {
        $this->dataConclusao = $dataConclusao;

        return $this;
    }

    /**
     * Get the value of grau
     */ 
    public function getGrau()
    {
        return $this->grau;
    }

    /**
     * Set the value of grau
     *
     * @return  self
     */ 
    public function setGrau($grau)
    {
        $this->grau = $grau;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of idFuncionario
     */ 
    public function getIdFuncinario()
    {
        return $this->idFuncionario;
    }

    /**
     * Set the value of idFuncionario
     *
     * @return  self
     */ 
    public function setIdFuncionario($idFuncionario)
    {
        $this->idFuncionario = $idFuncionario;

        return $this;
    }

    /**
     * Get the value of idAtendimento
     */ 
    public function getIdAtendimento()
    {
        return $this->idAtendimento;
    }

    /**
     * Set the value of idAtendimento
     *
     * @return  self
     */ 
    public function setIdAtendimento($idAtendimento)
    {
        $this->idAtendimento = $idAtendimento;

        return $this;
    }
}