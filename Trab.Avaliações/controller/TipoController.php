<?php
//Controller para Tipo

require_once(__DIR__ . "/../dao/TipoDAO.php");

class TipoController {

    private TipoDAO $tipoDAO;

    public function __construct() {
        $this->tipoDAO = new TipoDAO();
    }

    public function listar() {
        return $this->tipoDAO->list();
    }

}