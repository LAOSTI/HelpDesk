<?php
require_once "model/Chamado.php";

class ChamadoController {
    public function processa($acao) {
        if ($acao == "C") {
            $novoChamado = new Chamado();
            $novoChamado->setDESCRICAO($_POST['DESCRICAO']);
            $novoChamado->setdataAbertura($_POST['DATAABERTURA']);
            $novoChamado->setdataConclusao($_POST['DATACONCLUSAO']);
            $novoChamado->setgrau($_POST['GRAU']);
            $novoChamado->setstatus($_POST['Status']);
            $novoChamado->setIdFuncionario($_POST['IDFUNCIONARIO']);
            $novoChamado->setIdAtendimento($_POST['IDATENDIMENTO']);
            $novoChamado->cadastrarChamado();
        }
    }
}
?>
