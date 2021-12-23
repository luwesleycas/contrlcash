<div class="content-large">
    <h4><?=TITLE?> </h4>
    <form method="post">
        Valor
        <input type="number"  name="value" id="in_val" step="0.01" min="0" max="999999" placeholder="<?=$obEntrada->value?>">
        Data
        <input type="datetime-local" name="date" id="in_date" value="<?=$obEntrada->value?>">
        </br>
        Obs
        </br>
        <textarea class="form-control" name="obs" id="in_obs" placeholder="<?=$obEntrada->obs?>" rows="5"></textarea>
        </br>
        <input type="submit" class="btn btn-success">

    </form>
</div>

