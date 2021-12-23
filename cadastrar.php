<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Inserir Entrada');
define('HEADER','<div class="btn-group">
<a href="index.php" class="btn btn-primary">Vortar</a>
<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
<span class="visually-hidden">Toggle Dropdown</span>
</button>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="detail.php">Detalhado</a></li>

</ul>
</div>');

use \App\Entity\entrada;

$entrada = Entrada::getEntrada();




//Validação do POST
if(isset($_POST['value'],$_POST['date'],$_POST['obs'])){
    $obEntrada = new Entrada;
    $obEntrada->value  = $_POST['value'];
    $obEntrada->date = $_POST['date'];
    $obEntrada->obs = $_POST['obs'];
    $obEntrada->cadastrar();

    header('location: cadastrar.php?status=sucess');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/listagem.php';
include __DIR__.'/includes/footer.php';
