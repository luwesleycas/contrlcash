<?php

require __DIR__.'/vendor/autoload.php';


include __DIR__.'/includes/headermain.php';
?>
<div class="header">
            <h1>Control Cash</h1> 
        </div> 
        <div class="header-end">
                <div class="btn-group">
                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Menu
                    </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="cadastrar.php">Inserir entrada</a></li>
                            <li><a class="dropdown-item" href="saida.php">inserir saída</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>                                               
                        </ul>
                </div>
            </div>
        <div class="content-large">Minha Dashboard
            
        </div> 
<?php
include __DIR__.'/includes/footer.php';
?>
