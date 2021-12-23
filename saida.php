<?php


require __DIR__.'/vendor/autoload.php';


define('TITLE','Inserir Saída');
define('HEADER','<div class="btn-group">
<a href="index.php" class="btn btn-primary">Vortar</a>
<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
<span class="visually-hidden">Toggle Dropdown</span>
</button>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="detail.php">Detalhado</a></li>

</ul>
</div>');

use \App\Entity\saida;


$saida = Saida::getEntradaS();


//Validação do POST
if(isset($_POST['descript'],$_POST['value'],$_POST['date'])){
    $saida = new Saida;
    $saida->descript = $_POST['descript'];
    $saida->value  = $_POST['value'];
    $saida->date = $_POST['date'];
    $saida->cadastrarS();

    header('location: saida.php?status=sucess');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formSaida.php';
include __DIR__.'/includes/listSaida.php';
include __DIR__.'/includes/footer.php';
