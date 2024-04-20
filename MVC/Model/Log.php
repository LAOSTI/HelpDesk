<?php
require_once "model/Connection.php";

class Log{

    private $idChamado;
    private $descricao;
    private $dataAtendimento;
    private $dataConclusao;
    private $grau;
    private $status;
    private $idAtendimento;
    private $funcionario;


    public function cadastrarLog(){
        try{
            $conn = Connection::Connect();
            $sql = $conn ->prepare("insert into HELPDESK.LOG(IDCHAMADO, DESCRICAO, DATAATENDIMENTO, DATACONCLUSAO, GRAU, STATUS, IDATENDIMENTO, FUNCIONARIO)
            values(:idchamado, :descricao, :dataAtendi, :dataconclu, :grau, :status, :idAtendime, :funci)");
            $sql ->bindParam("idchamado", $idChamado);
            $sql ->bindParam("descricao", $descricao);
            $sql ->bindParam("dataAtendi", $dataAtendimento);
            $sql ->bindParam("dataconclu", $dataConclusao);
            $sql ->bindParam("grau", $grau);
            $sql ->bindParam("status", $status);
            $sql ->bindParam("idAtendime", $idAtendimento);
            $sql ->bindParam("funci", $funcionario);

            $idChamado -> $this.$idChamado;
            $descricao -> this.$descricao;
            $dataAtendimento ->this.$dataAtendimento;
            $dataConclusao -> this.$dataConclusao;
            $grau -> this.$grau;
            $status -> this.$status;
            $idAtendimento -> this.$idAtendimento;
            $funcionario -> this.$funcionario;
            $sql -> execute();
        }catch(Exception $e){
            echo "conexão falhou". $e -> getMessage();
    }
    }


    public function getIdChamado()
    {
        return $this->idChamado;
    }

    /**
     * Set the value of idChamado
     *
     * @return  self
     */ 
    public function setIdChamado($idChamado)
    {
        $this->idChamado = $idChamado;

        return $this;
    }

    /**
     * Get the value of descricao
     */ 
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

    
    public function getDataAtendimento()
    {
        return $this->dataAtendimento;
    }

    /**
     * Set the value of dataAtendimento
     *
     * @return  self
     */ 
    public function setDataAtendimento($dataAtendimento)
    {
        $this->dataAtendimento = $dataAtendimento;

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

    /**
     * Get the value of funcionario
     */ 
    public function getFuncionario()
    {
        return $this->funcionario;
    }

    /**
     * Set the value of funcionario
     *
     * @return  self
     */ 
    public function setFuncionario($funcionario)
    {
        $this->funcionario = $funcionario;

        return $this;
    }
}




?>