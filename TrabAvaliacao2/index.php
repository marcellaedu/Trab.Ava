<?php
include_once(__DIR__ . "/view/include/header.php");
?>

<div class="row mt-3 ">

    <div class="">
        <div class="mt-5" style="border-radius: 10px;">

            <div class="txt card-body">
                <a class="card-title">Avaliações</a>
            </div>

            <div class="row">
                <div class="col-6 txt2">
                    <h5>Seja bem-vindo à plataforma que transforma a maneira como você descobre e avalia filmes e séries! Aqui, oferecemos uma experiência simplificada para os amantes do entretenimento. Com nossa ferramenta, você poderá explorar, avaliar e descobrir novos títulos de forma fácil e intuitiva. Desde avaliações até recomendações personalizadas, estamos aqui para tornar a sua experiência cinematográfica mais envolvente e divertida.</h5>
                </div>
                <div class="col-6" style="text-align:center">
                    <img src="https://cdn-icons-png.flaticon.com/512/3938/3938627.png"
                    style="max-width: 300px;" />
                </div>
            </div>
            
            <ul class="card-body" style="font-size: 20px; text-align:left;">
                <a href="<?= BASE_URL ?>/view/avaliacao/listar.php" class="aval card-link btn btn-info"> Avaliações do Mês</a> 
            </ul>

        </div>
    </div>

</div>

<?php
include_once(__DIR__ . "/view/include/footer.php");
?> 