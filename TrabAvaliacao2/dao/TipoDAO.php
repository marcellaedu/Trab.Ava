<?php
//DAO para Tipo

require_once(__DIR__ . "/../util/Connection.php");
require_once(__DIR__ . "/../model/Tipo.php");

class TipoDAO {

    private $conn;

    public function __construct() {
        $this->conn = Connection::getConnection();
    }

    public function list() {
        $sql = "SELECT * FROM tipo";
        $stm = $this->conn->prepare($sql);
        $stm->execute();
        $result = $stm->fetchAll();
        return $this->mapBancoParaObjeto($result);
    }

    private function mapBancoParaObjeto($result) {
        $tipos = array();
        foreach($result as $reg) {
            $t = new Tipo();
            $t->setId($reg['id'])
                ->setTipo($reg['tipo']);
            array_push($tipos, $t);
        }

        return $tipos;
    }

}