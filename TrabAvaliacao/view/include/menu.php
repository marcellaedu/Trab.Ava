<?php
require_once(__DIR__ . "/../../util/config.php");
?>
<nav class="menu navbar navbar-expand-md navbar-light">
    <a class="navbar-brand" style="color:#64CCC5; font-size:30px;" href="#">CriticalLook</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navSite">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navSite">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" style="color: #F6FFFE" href="<?= BASE_URL ?>/index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="color: #F6FFFE" href="#" id="navDropDown" data-toggle="dropdown">Cadastros</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" style="color: #64CCC5" href="<?= BASE_URL ?>/view/avaliacao/listar.php">Avaliações</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: #F6FFFE" href="<?= BASE_URL ?>/view/avaliacao/sobre.php">Sobre</a>
            </li>
        </ul>
    </div>
</nav>