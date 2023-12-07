<!-- Seu código PHP anterior... -->

<table class="table table-hover">
    <!-- ... -->
    <tbody>
        <?php foreach($avaliacao as $a): ?>
            <tr>
                <td><?= $a->getNomePessoa(); ?></td>
                <td><?= $a->getNomeEntretenimento(); ?></td>
                <td style="text-align:justify;">
                    <!-- Adicionamos um botão para cada avaliação com um evento onclick -->
                    <button onclick="mostrarDescricao('descricao<?= $a->getId() ?>')">Visualizar</button>
                </td>
            </tr>
            <!-- Div para cada descrição associada a uma avaliação -->
            <tr>
                <td colspan="3"> <!-- Colspan para ocupar toda a largura da tabela -->
                    <div id="descricao<?= $a->getId() ?>" style="display: none;">
                        <!-- Conteúdo da descrição específica -->
                        <p><span>Nome:</span> <?= $a->getNomePessoa(); ?> &nbsp; &nbsp; &nbsp; <span>Data da publicação:</span> <?= $a->getDataPublicacao(); ?></p>
                        <p><span>Tipo:</span> <?= $a->getTipo()->getTipo(); ?> &nbsp; &nbsp; &nbsp; <span>Gênero:</span> <?= $a->getGenero(); ?></p>
                        <p><span>Entretenimento:</span> <?= $a->getNomeEntretenimento(); ?></p>
                        <p><span>Avaliação:</span> <?= $a->getAva(); ?></p>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
    function mostrarDescricao(idDescricao) {
        var divDescricao = document.getElementById(idDescricao);
        if (divDescricao.style.display === 'none') {
            divDescricao.style.display = 'block'; // Mostra a descrição correspondente ao botão clicado
        } else {
            divDescricao.style.display = 'none'; // Oculta a descrição correspondente ao botão clicado
        }
    }
</script>
