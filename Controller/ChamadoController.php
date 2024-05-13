<?
require_once __DIR__ . "/../Model/ChamadoModel.php";
class ChamadoController
{
    public static function cadastrarChamado(array $data)
    {

        new Chamado();
        $retorno = Chamado::cadastrar($data);

        if (!empty($retorno)) {
            $result = array(
                "status" => 200
            );
        } else {
            $result = array(
                "status" => 500
            );
        }

        return $result;
    }
}
?>