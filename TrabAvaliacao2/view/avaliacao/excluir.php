<?php
//View para excluir um avaliacao

require_once(__DIR__ . '/../../controller/AvaliacaoController.php');

//Receber o parâmetro
$idAvaliacao = 0;
if(isset($_GET['idAvaliacao']))
    $idAvaliacao= $_GET['idAvaliacao'];

//Carregar o avaliacao 
$avaliacaoCont = new AvaliacaoController();   
$avaliacao = $avaliacaoCont->buscarPorId($idAvaliacao);

//Verificar se o avaliacao existe
if(! $avaliacao) {
    echo "Avaliacao não encontrada!<br>";
    echo "<a href='listar.php'>Voltar</a>";
    exit;
}

//Excluir o avaliacao
$avaliacaoCont->excluirPorId($avaliacao->getId());

//Redirecionar para a listar
header("location: listar.php");