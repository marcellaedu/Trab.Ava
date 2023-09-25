<?php 
//View para alterar alunos

require_once(__DIR__ . "/../../controller/AvaliacaoController.php");
require_once(__DIR__ . "/../../model/Avaliacao.php");
require_once(__DIR__ . "/../../model/Genero.php");
require_once(__DIR__ . "/../../model/Tipo.php");

$msgErro = '';
$avaliacao = null;

$avaliacaoCont = new AvaliacaoController();

if(isset($_POST['submetido'])) {
    //Usuário clicou no botão gravar (submeteu o formulário)
    //Captura os campo do formulário
    $nomePessoa = trim($_POST['nomePessoa']) ? trim($_POST['nomePessoa']) : null;
    $nomeEntretenimento = $_POST['nomeEntretenimento'] ? $_POST['nomeEntretenimento'] : null;
    $data = trim($_POST['data']) ? trim($_POST['data']) : null;
    $idTipo = is_numeric($_POST['tipo']) ? $_POST['tipo'] : null;
    $idGenero = is_numeric($_POST['genero']) ? $_POST['genero'] : null;
    $ava = trim($_POST['ava']) ? trim($_POST['ava']) : null;

    $idAvaliacao = $_POST['id'];
    
    $avaliacao = new Avaliacao();
    $avaliacao->setNomePessoa($nomePessoa);
    $avaliacao->setNomeEntretenimento($nomeEntretenimento);
    $avaliacao->setDataPublicacao($data);
    $avaliacao->setAva($ava);

    if($idTipo) {
        $tipo = new Tipo();
        $tipo->setId($idTipo);
        $avaliacao->setTipo($tipo);
    }
    if($idGenero) {
        $genero = new Genero();
        $genero->setId($idGenero);
        $avaliacao->setGenero($genero);
    }

    //Criar um alunoController 
    $avaliacaoCont = new AvaliacaoController();
    $erros = $avaliacaoCont->atualizar($avaliacao);

    if(! $erros) { //Caso não tenha erros
        //Redirecionar para o listar
        header("location: listar.php");
        exit;
    } else { //Em caso de erros, exibí-los
        $msgErro = implode("<br>", $erros);
        //print_r($erros);
    }



} else {
    //Usuário apenas entrou na página para alterar
    $idAvaliacao = 0;
    if(isset($_GET['idAvaliacao']))
        $idAvaliacao = $_GET['idAvaliacao'];
    
    $avaliacao = $avaliacaoCont->buscarPorId($idAvaliacao);
    if(! $avaliacao) {
        echo "Avaliacao não encontrado!<br>";
        echo "<a href='listar.php'>Voltar</a>";
        exit;
    }

}

//Inclui o formulário
include_once(__DIR__ . "/form.php");