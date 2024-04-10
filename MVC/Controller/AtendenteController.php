<?
require_once "Model/AtendenteModel.php";
class AtendenteController{
    public function processa($acao){
        if($acao == "A"){
            $novoAtendente = new Atendente();
            $novoAtendente->setNOME($_POST['FRONT-END VARIAVEL']);
            $novoAtendente->setTELEFONE($_POST['FRONT-END VARIAVEL']);
            $novoAtendente->setEMAIL($_POST['FRONT-END VARIAVEL']);
            $novoAtendente->setUSUARIO($_POST['FRONT-END VARIAVEL']);
            $novoAtendente->setSENHA($_POST['FRONT-END VARIAVEL']);
            $novoAtendente->setFUNCAO($_POST['FRONT-END VARIAVEL']);
            $novoAtendente->setIDLOGIN($_POST['FRONT-END VARIAVEL']);
            $novoAtendente->cadastrarAtendente();
        }
    }
}
?>