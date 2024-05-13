<?php
require_once "Data/Connection.php";

class Chamado
{
    public static function cadastrar(array $data)
    {
        $date = new DateTime();
        $dataAtual = $date->format('Y-m-d H:i:s');

        $dataFechamento = null;
        if ($data['situacao'] == 'FECHADO') {
            $dataFechamento = $date->format('Y-m-d H:i:s');
        }

        $conn = Connection::connect();

        $sql = 'INSERT INTO chamado (descricao, data_abertura, data_conclusao, situacao, tipo_atendimento, nome_cliente, id_funcionario_solicitante, id_receptor_chamado)
                VALUES (:descricao, :data_abertura, :data_conclusao, :situacao, :tipo_atendimento, :nome_cliente, :id_funcionario_solicitante, :id_receptor_chamado)';

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':descricao', $data['descricao'], PDO::PARAM_STR);
        $stmt->bindParam(':data_abertura', $dataAtual, PDO::PARAM_STR);
        $stmt->bindParam(':data_conclusao', $dataFechamento, PDO::PARAM_STR);
        $stmt->bindParam(':situacao', $data['situacao'], PDO::PARAM_STR);
        $stmt->bindParam(':tipo_atendimento', $data['ocorrencia'], PDO::PARAM_STR);
        $stmt->bindParam(':nome_cliente', $data['nome_cliente'], PDO::PARAM_STR);
        $stmt->bindParam(':id_funcionario_solicitante', $data['id_funcionario_solicitante'], PDO::PARAM_INT);
        $stmt->bindParam(':id_receptor_chamado', $data['id_receptor_chamado'], PDO::PARAM_INT);

        $stmt->execute();

        return $stmt->rowCount();
    }
}
?>
