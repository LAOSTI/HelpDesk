<?
require_once "Model/FuncionarioModel.php";
class AtendenteController{
    public function processa($acao){
        if($acao == "F"){
            $novoFuncionario = new Funcionario();
            $novoFuncionario->setNOME($_POST['FRONT-END VARIAVEL']);
            $novoFuncionario->setTELEFONE($_POST['FRONT-END VARIAVEL']);
            $novoFuncionario->setEMAIL($_POST['FRONT-END VARIAVEL']);
            $novoFuncionario->setCARGO($_POST['FRONT-END VARIAVEL']);
            $novoFuncionario->cadastrarAtendente();
        }
    }
}
?>