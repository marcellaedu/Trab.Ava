<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once(__DIR__ . "/../controller/GeneroController.php");

$idTipo = $_GET['idTipo'];

$generoCont = new GeneroController();
$generos = $generoCont->listarPorTipo($idTipo);

echo json_encode($generos, JSON_UNESCAPED_UNICODE);