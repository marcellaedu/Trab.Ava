<?php
include_once(__DIR__ . "/view/include/header.php");
?>

<div class="row mt-3 justify-content-center">
    <div class="col-3">
        <div class="card text-center mt-5" style="border-radius: 10px;">
            <img class="card-image-top mx-auto mt-3" src="https://cdn-icons-png.flaticon.com/512/4944/4944551.png" 
                style="max-width: 200px; height: auto;" />
            <div class="card-body">
                <h5 class="card-title">Avaliações</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <a href="<?= BASE_URL ?>/view/avaliacao/listar.php" 
                        class="card-link">
                         Avaliações do Mês</a> 
                </li>
            </ul>
        </div>
    </div>
</div>

<?php
include_once(__DIR__ . "/view/include/footer.php");
?>