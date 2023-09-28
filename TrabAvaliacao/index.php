<?php
include_once(__DIR__ . "/view/include/header.php");
?>

<div class="row mt-3 justify-content-center">
    <div class="col-3">
        <div class="card text-center">
            <img class="card-image-top mx-auto mt-3" src="https://musicart.xboxlive.com/7/94fc5000-0000-0000-0000-000000000002/504/image.jpg?w=1920&h=1080" 
                style="max-width: 200px; height: auto;" />
            <div class="card-body">
                <h5 class="card-title">Avaliações</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <a href="<?= BASE_URL ?>/view/avaliacao/listar.php" 
                        class="card-link">
                        Listagem de Avaliações</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php
include_once(__DIR__ . "/view/include/footer.php");
?>