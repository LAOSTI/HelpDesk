<?php
require_once "Model/Data/Connection.php";

class Login {
    public function validaLogin(array $data) {
        $banco = new Connection();
        $conn = $banco->connect();

        $sql = 'SELECT id FROM funcionario WHERE usuario = :usuario AND senha = :senha AND tipo_usuario = :tipo_usuario AND situacao_usuario = "A"';
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':usuario', $data['usuario'], PDO::PARAM_STR);
        $stmt->bindParam(':senha', $data['senha'], PDO::PARAM_STR);
        $stmt->bindParam(':tipo_usuario', $data['tipo_usuario'], PDO::PARAM_STR);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
