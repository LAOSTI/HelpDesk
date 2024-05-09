<?php

if (!empty($_POST)) {
    $acao = $_POST['data']['acao'];

    switch ($acao) {
        case 'login':

            require_once "Controller/LoginController.php";
            new LoginController();
            $validaLogin = LoginController::Processa($_POST['data']['funcionario']);

            if ($validaLogin['logado'] == true) {
                if(!isset($_SESSION)){session_start();}
                echo json_encode ($validaLogin);
            } else {
                echo json_encode ($validaLogin);
                return $validaLogin;
            }
        
        default:
            # code...
            break;
    }
}

?>