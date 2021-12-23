<?php

use Andersonhsilva\MetodosPhp\Metodos;

$resultado ='';
foreach($entrada as $entra){
    $resultado .= '<tr>
                    <td>R$ '.Metodos::exibir_double($entra->value).'</td>
                    <td>'.date('d/m/Y',strtotime($entra->date)).'</td>
                    <td></td>
                    </tr>';
} 
  /*echo($entra->id);  echo $resultado */
/*   echo "<pre>"; print_r($resultado); echo "</pre>"; exit; */
?>

<div class="content-small">

   <table class="table">
        <thead>
            <tr>
                <th scope="col">Valor</th>
                <th scope="col">Data</th>
            </tr>
        </thead>
        <tbody>
          <?= $resultado?>  
        </tbody>
    </table>

</div>

