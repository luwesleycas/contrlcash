<?php

use Andersonhsilva\MetodosPhp\Metodos;

/*echo($entra->id); echo $resultado */
/*   echo "<pre>"; print_r($resultado); echo "</pre>"; exit; */
?>
<div class="content-large">
    <h4>Detalhado</h4>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Valor</th>
                <th scope="col">Data</th>
                <th scope="col">Obs</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($entrada as $entra) { ?>
                <tr>
                    <td><?= $entra->id ?></td>
                    <td style="white-space:nowrap">R$ <?= Metodos::exibir_double($entra->value) ?></td>
                    <td style="white-space:nowrap"><?= $entra->date ?></td>
                    <td><?= Metodos::limpa_string_chars($entra->obs) ?></td>
                    <td><a class="btn btn-warning" href="editar.php?id=<?= $entra->id ?>">Editar</a></td>
                    <td><a class="btn btn-danger" href="excluir.php?id=<?= $entra->id ?>">Excluir</a></td>
                    <td></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href=""></a>
</div>