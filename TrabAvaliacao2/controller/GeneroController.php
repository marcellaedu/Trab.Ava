<?php
//Controller para Genero

require_once(__DIR__ . "/../dao/GeneroDAO.php");

class GeneroController {

    private GeneroDAO $generoDAO;

    public function __construct() {
        $this->generoDAO = new GeneroDAO();
    }

    public function listarPorTipo(int $idTipo) {
        return $this->generoDAO->listByType($idTipo);
    }
}