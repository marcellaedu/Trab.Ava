<?php
//DAO para Genero

require_once(__DIR__ . "/../util/Connection.php");
require_once(__DIR__ . "/../model/Genero.php");

class GeneroDAO {

    private $conn;

    public function __construct() {
        $this->conn = Connection::getConnection();
    }

    public function listByType($idTipo) {
        $sql = "SELECT g.*, t.tipo AS tipo" . 
        " FROM genero g" .
        " JOIN tipo t ON (t.id = g.id_tipo)" .
        " WHERE g.id_tipo = ?" . 
        " ORDER BY g.id";

        $stm = $this->conn->prepare($sql);
        $stm->execute([$idTipo]);
        $result = $stm->fetchAll();
        return $this->mapBancoParaObjeto($result);
    }

    private function mapBancoParaObjeto($result) {
        $generos = array();
        foreach($result as $reg) {
            $g = new Genero();
            $g->setId($reg['id'])
                ->setGenero($reg['genero']);
            array_push($generos, $g);
        }

        return $generos;
    }

}