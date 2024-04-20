<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
// require_once "Model/LoginModel.php";
echo "1<pre>";
print_r ($_POST);
echo "</pre>";
die();
/*
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
*/
?>