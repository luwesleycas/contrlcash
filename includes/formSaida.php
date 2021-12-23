<div class="content-large">
    <h4><?=TITLE?> </h4>
    <form method="post">
        Descrição
        <input type="text" name="descript">
        Valor
        <input type="number"  name="value" id="in_val" step="0.01" min="0" max="999999" placeholder="<?=$obEntrada->value?>">
        Data
        <input type="datetime-local" name="date" id="in_date" value="<?=$obEntrada->value?>" style="margin-top:10px;">
        </br>
        <input type="submit" class="btn btn-success" style="margin-top:10px;">

    </form>
</div>

