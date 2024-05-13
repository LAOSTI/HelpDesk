<?php

if (!empty($_POST)) {
    $acao = $_POST['data']['acao'];
    switch ($acao) {
        case 'login':

            require_once "Controller/LoginController.php";
            new LoginController();
            $validaLogin = LoginController::processa($_POST['data']['funcionario']);

            if ($validaLogin['status'] == 200) {
                $_SESSION['id'] = $validaLogin['id_usuario'];
                $_SESSION['nome'] = $validaLogin['nome'];

                echo json_encode($validaLogin);
            } else {
                echo json_encode($validaLogin);
                return $validaLogin;
            }

            break;

        case 'abrir_chamado':

            require_once "Controller/ChamadoController.php";
            new ChamadoController();
            $cadastrarChamado = ChamadoController::cadastrarChamado($_POST['data']['chamado']);

            echo json_encode($cadastrarChamado);

            break;

        case 'sair':
            
            if (!isset($_SESSION)) {
                session_start();
            }

            session_destroy();
            echo json_encode(array('status' => 200));

            break;
    }
}

?>