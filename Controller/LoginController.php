<?php

require_once "Model/LoginModel.php";
class LoginController{
    public static function Processa($data){

        $login = new Login();
        $retorno = $login->validaLogin($data);

        if(!empty($retorno)){
            $_SESSION['id'] = $retorno['id'];
            $result = array(
                "status" => 200,
            );
        }else{
            $result = array(
                "status" => 500,
                "msg" => "Erro ao logar!",
            );
        }

        return $result;
    }
}
?>