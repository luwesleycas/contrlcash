<?php 

$resultado ='';
foreach($entrada as $entra){
    $resultado .= '<tr>
                    <td>R$ '.$nombre_format_francais = number_format($entra->value, 2, ',', ' ').'</td>
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
          <?php echo $resultado?>  
        </tbody>
    </table>

</div>

