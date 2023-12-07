<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once(__DIR__ . "/../controller/AvaliacaoController.php");
require_once(__DIR__ . "/../dao/AvaliacaoDAO.php");

//1- Capturar o ID da avaliação do parâmetro GET
$idAvaliacao = $_GET['idAvaliacao'];

//2- Buscar o objeto avaliacao a partir do ID recebido (Controller, DAO)
$avaCont = new AvaliacaoController();
$avaliacoes = $avaCont->buscarPorId($idAvaliacao);

//3- Retornar os dados da avaliação no formato JSON
echo json_encode($avaliacoes, JSON_UNESCAPED_UNICODE);