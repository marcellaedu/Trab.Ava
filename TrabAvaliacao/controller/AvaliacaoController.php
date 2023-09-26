<?php 
//Controller para Avaliacao

require_once(__DIR__ . "/../dao/AvaliacaoDAO.php");
require_once(__DIR__ . "/../model/Avaliacao.php");
require_once(__DIR__ . "/../service/AvaliacaoService.php");

class AvaliacaoController {

    private $avaliacaoDAO;
    private $avaliacaoService;

    public function __construct() {
        $this->avaliacaoDAO = new AvaliacaoDAO();        
        $this->avaliacaoService = new AvaliacaoService();
    }

    public function listar() {
        return $this->avaliacaoDAO->list();        
    }

    public function buscarPorId(int $id) {
        return $this->avaliacaoDAO->findById($id);
    }

    public function inserir(Avaliacao $avaliacao) {
        //Valida e retorna os erros caso existam
           $erros = $this->avaliacaoService->validarDados($avaliacao);
           if($erros) 
             return $erros;

        //Persiste o objeto e retorna um array vazio
        $this->avaliacaoDAO ->insert($avaliacao);
        return array();
    }

    public function atualizar(Avaliacao $avaliacao) {
        $erros = $this->avaliacaoService->validarDados($avaliacao);
        if($erros) 
            return $erros;
        
        //Persiste o objeto e retorna um array vazio
        $this->avaliacaoDAO->update($avaliacao);
        return array();
    }

    public function excluirPorId(int $id) {
        $this->avaliacaoDAO->deleteById($id);
    }

}