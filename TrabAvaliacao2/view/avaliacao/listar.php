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

<h2 class="mt-3 txt2" style="text-align: center;">Lista das Avaliações</h2>

<div>
    <a class="btn colors" href="inserir.php">Inserir</a>
</div><br>



<table class="table table-hover">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Entretenimento</th>
            <th style="text-align:center;">Visualizar</th>
            <th style="text-align:center;">Alterar</th>
            <th style="text-align:center;">Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($avaliacao as $a): ?>
            <tr>
                <td><?= $a->getNomePessoa(); ?></td>
                <td><?= $a->getNomeEntretenimento(); ?></td>
                <td style="text-align:center; color:RoyalBlue;" onclick="mostrarDescricao('descricao<?= $a->getId() ?>', <?= $a->getId() ?>)">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                </svg>
                </td>
                <td style="text-align:center;"><a href="alterar.php?idAvaliacao=<?= $a->getId() ?>"> 
                <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                </svg>
                    </a>
                </td>
                <td style="text-align:center;"><a   href="excluir.php?idAvaliacao=<?= $a->getId() ?>"
                       onclick="return confirm('Confirma a exclusão?');" > 
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                        </svg>
                    </a>
                </td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>

<div id="divDescricao" style="display: none;">
    <div class="divAva">
        <p><span class="negrito">Nome:</span> <span id="spnNome"></span> &nbsp; &nbsp; &nbsp; <span class="negrito">Data da publicação:</span> <span id="spnData"></span></p>
        <p><span class="negrito">Tipo:</span> <span id="spnTipo"></span> &nbsp; &nbsp; &nbsp; <span class="negrito">Gênero:</span> <span id="spnGenero"></span></p>
        <p><span class="negrito">Entretenimento:</span> <span id="spnEntretenimento"></span></p>
        <p><span class="negrito">Avaliação:</span> <span id="spnAvaliacao"></span></p>
                    
    </div>
</div>

<input type="hidden" id="hddBaseUrl" value="<?= BASE_URL ?>" />  

<script src="js/oculto.js">
</script>

<?php 
require(__DIR__ . "/../include/footer.php");
?>
    