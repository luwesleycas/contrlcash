<?php

require __DIR__.'/vendor/autoload.php';

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
