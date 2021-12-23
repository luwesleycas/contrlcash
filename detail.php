<?php


require __DIR__.'/vendor/autoload.php';

use \App\Entity\entrada;

$entrada = Entrada::getEntrada();

include __DIR__.'/includes/headermain.php';
include __DIR__.'/includes/detalhado.php';

?> 

<div class="header">
        <h1>Control Cash</h1> 
        </div> 
        <div class="header-end"> 
        <a class="btn btn-primary" href="cadastrar.php">Voltar</a>
        </div> 

<!-- <div class="content-large">
        <h4>Detalhado</h4>
</div> -->
<?php
include __DIR__.'/includes/footer.php';
?> 