<?php
require_once "model/Atendimento.php";
class AtendimentoController{

        public function processa ($acao){

            if($acao == "C"){

                $novoAtendimento = new Atendimento ();
                $novoAtendimento -> setnomeAtendimento($_POST['NOME']);
                $novoAtendimento -> setTELEFONE($_POST['TELEFONE']);
                $novoAtendimento -> setEMAIL($_POST['EMAIL']);
                $novoAtendimento -> setUSUARIO($_POST['USUARIO']);
                $novoAtendimento -> setIdDesenvolvimento($_POST['IdDesenvolvimento']);
                $novoAtendimento -> setIdInfraestrutura($_POST['idInfraestrtura']);
                $novoAtendimento -> setIdHelp_Desk($_POST['IdHelpdesk']);
                $novoAtendimento -> cadastrarAtendimento();
            }

        }

    }
?>