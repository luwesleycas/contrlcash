
<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar entrada');
define('HEADER','<a class="btn btn-primary" href="detail.php">Voltar</a>');

use \App\Entity\entrada;

//Validação da vaga
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
        header('location: index.php?status=error');
        exit;
}
//Consulta vaga
$obEntrada = Entrada::getEdit($_GET['id']);

//Validação da vaga
if(!$obEntrada instanceof Entrada){
        header('location: index.php?status=error');
        exit;
}

//Validação do POST
if(isset($_POST['value'],$_POST['date'],$_POST['obs'])){
  /*   $obEntrada = new Entrada; */
        $obEntrada->value  = $_POST['value'];
        $obEntrada->date = $_POST['date'];
        $obEntrada->obs = $_POST['obs'];
        $obEntrada->atualizar();

    header('location: detail.php?status=sucess');
    exit;
}

include __DIR__.'/includes/header.php'; 
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/listagem.php';
include __DIR__.'/includes/footer.php';
