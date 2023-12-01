<?php

require_once(__DIR__ . "/../model/Avaliacao.php");
require_once(__DIR__ . "/../model/Genero.php");
require_once(__DIR__ . "/../controller/Avaliacao.php");

//Capturar os parâmetros POST
$nomePessoa = trim($_POST['nomePessoa']) ? trim($_POST['nomePessoa']) : null;
    $nomeEntretenimento = $_POST['nomeEntretenimento'] ? $_POST['nomeEntretenimento'] : null;
    $data = trim($_POST['data']) ? trim($_POST['data']) : null;
    $idTipo = is_numeric($_POST['tipo']) ? $_POST['tipo'] : null;
    $idGenero = is_numeric($_POST['genero']) ? $_POST['genero'] : null;
    $ava = trim($_POST['ava']) ? trim($_POST['ava']) : null;

    
    //Criar um objeto Avaliacao para persistência
    $avaliacao = new Avaliacao();
    $avaliacao->setNomePessoa($nomePessoa);
    $avaliacao->setNomeEntretenimento($nomeEntretenimento);
    $avaliacao->setDataPublicacao($data);
    $avaliacao->setAva($ava);

    if($idGenero) {
        $genero = new Genero();
        $genero->setId($idGenero);
        $avaliacao->setGenero($genero);
    }

//Chamar o controller para salvar a a$avaliacao
$avaliacaoCont = new AvaliacaoController();
$erros = $avaliacaoCont->salvar($avaliacao);

//Retornar os erros ou 
//uma string vazia se não houverem erros
$msgErro = "";
if($erros)
    $msgErro = implode("<br>", $erros);

echo $msgErro;