<?php

class ChamadoController {
    private $connection;

    public function __construct($connection) {
        $this->connection = $connection;
    }
    
    public function ListarCamados() {
        $query = "SELECT * FROM chamados";
        $result = mysqli_query($this->connection, $query);
        
        if (!$result) {
            die("Erro ao consultar chamados: " . mysqli_error($this->connection));
        }
        
        $chamados = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $chamados[] = $row;
        }
        
        if (empty($chamados)) {
            return json_encode(["message" => "Nenhum chamado encontrado."]);
        }
        
        return json_encode($chamados);
    }

    public function show($id) {
        $query = "SELECT * FROM chamados WHERE id = $id";
        $result = mysqli_query($this->connection, $query);
        
        if (!$result) {
            die("Erro ao consultar chamado: " . mysqli_error($this->connection));
        }
        
        $chamado = mysqli_fetch_assoc($result);
        
        if (!$chamado) {
            return json_encode(["message" => "chamado não encontrado."]);
        }
        
        return json_encode($chamado);
    }

    public function store($data) {
        // Implemente a lógica de inserção de chamado aqui
    }

    public function update($id, $data) {
        // Implemente a lógica de atualização de chamado aqui
    }

    public function destroy($id) {
        // Implemente a lógica de exclusão de chamado aqui
    }
}