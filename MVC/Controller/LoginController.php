<?
require_once "Model/LoginModel.php";
class LoginController{
    public function processa($acao){
        if($acao == "L"){
            $novoLogin = new Login();
            $novoLogin->setUSUARIO($_POST['FRONT-END VARIAVEL']);
            $novoLogin->setSENHA($_POST['FRONT-END VARIAVEL']);
            $novoLogin->cadastrarUsuario();
        }
    }
}
?>