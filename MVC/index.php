<?php
$url = isset($_GET['url']) ? $_GET['url'] : '';

switch ($url) {
    case 'login':
        require_once 'View/Front-end.php';
        break;
    case 'teste':
        require_once 'TestOfConnection.php';
        break;
    case 'cadastrar-login':
        require_once 'Controller/LoginController.php';
        $controle = new LoginController();
        $controle->processa("L");
    case 'atendente':
        require_once 'View/Front-end.php';
        break;
    case 'cadastrar-atendente':
        require_once 'Controller/AtendenteController.php';
        $controle = new LoginController();
        $controle->processa("A");
    case 'funcionario':
        require_once 'View/Front-end.php';
        break;
    case 'cadastrar-funcionario':
        require_once 'Controller/FuncionarioController.php';
        $controle = new LoginController();
        $controle->processa("F");
    default:
        echo "Página não encontrada!";
}
?>