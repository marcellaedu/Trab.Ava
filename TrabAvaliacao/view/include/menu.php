<?php
require_once(__DIR__ . "/../../util/config.php");
?>
<nav class="navbar navbar-expand-md navbar-light" style="background-color:#141E46;">
    <a class="navbar-brand" style="color: #FF6969" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
        </svg>
        CRITICAL LOOK
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
        </svg></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navSite">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navSite">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" style="color: #FF6969" href="<?= BASE_URL ?>/index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="color: #FF6969" href="#" id="navDropDown" data-toggle="dropdown">Cadastros</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" style="color: #FF6969" href="<?= BASE_URL ?>/view/avaliacao/listar.php">Avaliações</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: #FF6969" href="<?= BASE_URL ?>/view/avaliacao/sobre.php">Sobre</a>
            </li>
        </ul>
    </div>
</nav>