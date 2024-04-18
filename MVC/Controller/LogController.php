<?php
require_once "model/Log.php";
class LogController{

        public function processa ($acao){
            if($acao == "C"){
                $novoLog = new Log ();
                $novoLog -> setidChamado($_POST['Chamado']);
                $novoLog -> setDESCRICAO($_POST['DESCRICAO']);
                $novoLog -> setDataAtendimento($_POST['EMAIL']);
                $novoLog -> setdataConclusao($_POST['DATACONCLUSAO']);
                $novoLog -> setgrau($_POST['GRAU']);
                $novoLog -> setstatus($_POST['Status']);
                $novoLog -> setIdatendimento($_POST['IDATENDIMENTO']);
                $novoLog -> setFuncionario($_POST['IDFUNCIONARIO']);
                $novoLog -> cadastrarLog();
            }

        }

    }
?>