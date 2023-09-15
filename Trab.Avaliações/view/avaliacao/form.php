<?php
    //Formulário para avaliações
    require_once(__DIR__ . "/../../controller/GeneroController.php");
    require_once(__DIR__ . "/../../controller/TipoController.php");
    require_once(__DIR__ . "/../include/header.php");

?>
    <h2>Inserir avaliações</h2>

    <form id="frmAvalicao" method="POST" >

        <div class="form-group">
            <label for="txtNomePessoa">Digite seu nome:</label>
            <input type="text" name="nomePessoa" id="txtNomePessoa" class="form-control"
                value="<?php ?>"/>
        </div>
        
        <div class="form-group">
            <label for="txtNomeEntretenimento">Digite seu entretenimento:</label>
            <input type="text" name="nomeEntretenimento" id="txtnomeEntretenimento" class="form-control"
                value="<?php ?>"/>
        </div>
        
        <div class="form-group">
            <label for="txtDataPublicacao" >Idade:</label>
            <input type="date" name="data" id="txtDataPublicacao" class="form-control" 
                value="<?php ?>" />
        </div>
        
        <div class="form-group">
            <label for="txtTipo" >Tipo de entretenimento:</label>
            <select  id="txtTipo" name="tipo" class="form-control">
                <option value=" ">Selelecione</option>
                
            </select>
        </div>

        <input type="hidden" name="id" value="<?php echo ($aluno ? $aluno->getId() : 0);?>" />

        <input type="hidden" name="submetido" value="1" /><br>

        <button class="btn btn-info" type="submit">Gravar</button>
        <button class="btn btn-info" type="reset">Limpar</button>

    </form>

    <a class="btn btn-dark" href="listar.php"> Voltar </a>

<?php
    require_once(__DIR__ . "/../include/footer.php");
?>
