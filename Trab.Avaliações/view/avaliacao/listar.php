<?php 
//Página view para listagem de avaliacao
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once(__DIR__ . "/../../controller/AvaliacaoController.php");

$avaliacaoCont = new AvaliacaoController();
$avaliacao = $avaliacaoCont->listar();

?>

<?php 
require(__DIR__ . "/../include/header.php");
?>

<h4>Listagem de alunos</h4>

<div>
    <a class="btn btn-info" href="inserir.php">Inserir</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Entretenimento</th>
            <th>Data de Publicação</th>
            <th>Tipo</th>
            <th>Genero</th>
            <th>Alterar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($avaliacao as $a): ?>
            <tr>
                <td><?= $a->getNomePessoa(); ?></td>
                <td><?= $a->getNomeEntretenimento(); ?></td>
                <td><?= $a->getDataPublicacao(); ?></td>
                <td><?= $a->getTipo(); ?></td>
                <td><?= $a->getGenero(); ?></td>
                <td><a href="alterar.php?idAvaliacao=<?= $a->getId() ?>"> 
                       
                    </a>
                </td>
                <td><a href="excluir.php?idAvaliacao=<?= $a->getId() ?>"
                       onclick="return confirm('Confirma a exclusão?');" > 
                       
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?php 
require(__DIR__ . "/../include/footer.php");
?>
    