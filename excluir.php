
<?php

require __DIR__.'/vendor/autoload.php';



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
        header('location: detail.php?status=error');
        exit;
}

//Validação do POST
if(isset($_POST['excluir'])){
        $obEntrada->excluir();

        header('location: detail.php?status=sucess');
        exit;
}



include __DIR__.'/includes/header.php'; 
include __DIR__.'/includes/confirmDelete.php';
include __DIR__.'/includes/listagem.php';
include __DIR__.'/includes/footer.php';
