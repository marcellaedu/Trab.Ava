<?php
//Formulário para avaliações
require_once(__DIR__ . "/../../controller/GeneroController.php");
require_once(__DIR__ . "/../../controller/TipoController.php");
require_once(__DIR__ . "/../include/header.php");

$tipoCont = new TipoController();
$tipos = $tipoCont->listar();

$generoCont = new GeneroController();
$generos = $generoCont->listar();

?>
<h2 class="mt-2 txt2" style="text-align: center;"><?php echo (!$avaliacao || $avaliacao->getId() <= 0 ? 'Faça sua' : 'Altere sua') ?> Avaliação</h2>


<div class="mt-3">
    <?php if ($msgErro) : ?>
        <div class="alert alert-danger">
            <?php echo $msgErro; ?>
        </div>
    <?php endif; ?>
</div>

<form id="frmAvalicao" method="POST">

    <div class="form-group">
        <label for="txtNomePessoa">
            Qual seu nome?</label>
        <input type="text" name="nomePessoa" id="txtNomePessoa" class="form-control" value="<?php echo ($avaliacao ? $avaliacao->getNomePessoa() : ''); ?>" />
    </div>

    <div class="form-group">
        <label for="txtNomeEntretenimento">
            Qual o nome do entretenimento?</label>
        <input type="text" name="nomeEntretenimento" id="txtnomeEntretenimento" class="form-control" value="<?php echo ($avaliacao ? $avaliacao->getNomeEntretenimento() : ''); ?>" />
    </div>

    <div class="form-group">
        <label for="txtDataPublicacao">
            Qual a data de sua Publicacao:</label>
        <input type="date" name="data" id="txtDataPublicacao" class="form-control" value="<?php echo ($avaliacao ? $avaliacao->getDataPublicacao() : ''); ?>" />
    </div>

    <div class="form-group">
        <label for="txtAvaliacao">
            Gostaria de ouvir sua opinião ou avaliação sobre o entretenimento:</label>
        <input type="text" name="ava" id="txtAvaliacao" class="form-control" value="<?php echo ($avaliacao ? $avaliacao->getAva() : ''); ?>" />
    </div>

    <div class="form-group">
        <label for="txtTipo">
            Qual o tipo de entretenimento?</label>
        <select id="txtTipo" name="tipo" class="form-control">
            <option value="">Selecione</option>
            <?php foreach ($tipos as $t) : ?>
                <option value="<?= $t->getId(); ?>" <?php
                                                    if (
                                                        $avaliacao && $avaliacao->getTipo() &&
                                                        $avaliacao->getTipo()->getId() == $t->getId()
                                                    )
                                                        echo 'selected';
                                                    ?>>
                    <?= $t->getTipo(); ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label for="txtGenero">A que gênero pertence esse entretenimento? </label>
        <select id="txtGenero" name="genero" class="form-control">
            <option value="">Selecione</option>
            <?php foreach ($generos as $g) : ?>
                <option value="<?= $g->getId(); ?>" <?php
                                                    if (
                                                        $avaliacao && $avaliacao->getGenero() &&
                                                        $avaliacao->getGenero()->getId() == $g->getId()
                                                    )
                                                        echo 'selected';
                                                    ?>>
                    <?= $g->getGenero(); ?>
                </option>
            <?php endforeach; ?>

        </select>
    </div>


    <input type="hidden" name="id" value="<?php echo ($avaliacao ? $avaliacao->getId() : 0); ?>" />

    <input type="hidden" name="submetido" value="1" /><br>

    <button class="btn colors" type="submit">Gravar</button>
    <button class="btn colors" type="reset">Limpar</button>

</form>

<div class="teste mt-3" style=" padding-bottom: 100px;">
    <a class="btn colors" href="listar.php"> Voltar </a>
</div>

<?php
require_once(__DIR__ . "/../include/footer.php");
?>