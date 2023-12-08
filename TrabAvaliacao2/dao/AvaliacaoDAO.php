<?php 
//DAO para avaliacao
require_once(__DIR__ . "/../util/Connection.php");
require_once(__DIR__ . "/../model/Avaliacao.php");
require_once(__DIR__ . "/../model/Genero.php");
require_once(__DIR__ . "/../model/Tipo.php");


class AvaliacaoDAO {

    private $conn;

    public function __construct() {
        $this->conn = Connection::getConnection();
    }

    public function insert( Avaliacao $avaliacao) {
        $sql = "INSERT INTO avaliacao" . 
                " (nome_pessoa, nome_entretenimento, data_publicacao, id_genero, id_tipo, avaliacao)" .
                " VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$avaliacao->getNomePessoa(),
                        $avaliacao->getNomeEntretenimento(), 
                        $avaliacao->getDataPublicacao(), 
                        $avaliacao->getGenero()->getId(),
                        $avaliacao->getTipo()->getId(),
                        $avaliacao->getAva()]) ;
    }

    public function list() {
        $sql = "SELECT a.*, t.tipo AS tipo, g.genero AS genero " . 
               "FROM avaliacao a " .
               "JOIN tipo t ON (t.id = a.id_tipo) " . 
               "JOIN genero g ON (g.id = a.id_genero) " . 
               "ORDER BY a.nome_pessoa";
        $stm = $this->conn->prepare($sql);
        $stm->execute();
        $result = $stm->fetchAll();
        return $this->mapBancoParaObjeto($result);
    }

    public function save(Avaliacao $avaliacao) {
        $conn = Connection::getConnection();

        $sql = "INSERT INTO avaliacao (nome_pessoa, nome_entretenimento, data_publicacao, id_genero , id_tipo , avaliacao  )".
            " VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        
        try {
            $stmt->execute([
                $avaliacao->getNomePessoa(),
                $avaliacao->getNomeEntretenimento(), 
                $avaliacao->getDataPublicacao(), 
                $avaliacao->getGenero()->getId(),
                $avaliacao->getTipo()->getId(),
                $avaliacao->getAva(),
                $avaliacao->getId() 
            ]);
        } catch (PDOException $e) {
            return "Erro ao perisitir os dados na base de dados.";
        }

        return null;
    }

    public function update(Avaliacao $avaliacao) {
        $conn = Connection::getConnection();

        $sql = "UPDATE avaliacao SET nome_pessoa = ?, nome_entretenimento = ?, data_publicacao = ?, id_genero = ?, id_tipo = ?, avaliacao = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            $avaliacao->getNomePessoa(),
            $avaliacao->getNomeEntretenimento(), 
            $avaliacao->getDataPublicacao(), 
            $avaliacao->getGenero()->getId(),
            $avaliacao->getTipo()->getId(),
            $avaliacao->getAva(),
            $avaliacao->getId() 
        ]);
    }

    public function deleteById(int $id) {
        $conn = Connection::getConnection();

        $sql = "DELETE FROM avaliacao WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
    }


    public function findById(int $id) {
        $conn = Connection::getConnection();

        $sql ="SELECT a.*, t.tipo AS tipo, g.genero AS genero FROM avaliacao a" .
        " JOIN tipo t ON (t.id = a.id_tipo)" . 
        " JOIN genero g ON (g.id = a.id_genero)" . 
        " WHERE a.id = ?";

        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetchAll();

        //Criar o objeto avaliacao
        $avaliacoes = $this->mapBancoParaObjeto($result);

        if(count($avaliacoes) == 1)
            return $avaliacoes[0];
        elseif(count($avaliacoes) == 0)
            return null;

        die("AvaliacaoDAO.findById - Erro: mais de uma avaliacao".
                " encontrado para o ID " . $id);
    }


    //Converte do formato Banco (array associativo) para Objeto
    private function mapBancoParaObjeto($result) {
        $avaliacoes = array();
    
        foreach($result as $reg) {
            $avaliacao = new Avaliacao();
            $avaliacao->setId($reg['id']);
            $avaliacao->setNomePessoa($reg['nome_pessoa']);
            $avaliacao->setNomeEntretenimento($reg['nome_entretenimento']);
            $avaliacao->setDataPublicacao(($reg['data_publicacao']));
            $avaliacao->setAva($reg['avaliacao']);
    
            $genero = new Genero();
            $genero->setId($reg['id_genero'])
                ->setGenero($reg['genero']);    
            $avaliacao->setGenero($genero);
    
            $tipo = new Tipo();
            $tipo->setId($reg['id_tipo'])
                ->setTipo($reg['tipo']);    
            $avaliacao->setTipo($tipo);
    
            array_push($avaliacoes, $avaliacao);
        }
    
        return $avaliacoes;
    }
    
}
