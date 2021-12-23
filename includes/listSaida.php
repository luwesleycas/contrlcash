<?php

use Andersonhsilva\MetodosPhp\Metodos;

?>

<div class="content-small">

  <table class="table">
        <thead>
            <tr>
                <th scope="col">Descrição</th>
                <th scope="col">Valor</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($entrada as $entra) { ?>
        <tr>   
                    <td>R$ <?=Metodos::exibir_double($entra->value)?></td>
                    <td><?=date('d/m/Y',strtotime($entra->date))?></td>
                    <td></td>
                    </tr>
                </tr>
            <?php } ?>
          
        </tbody>
    </table>

</div>
