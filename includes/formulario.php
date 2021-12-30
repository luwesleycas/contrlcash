<div class="content-large">
    <h4><?=TITLE?> </h4>
    <form method="post">
        Valor
        <input type="number"  name="value" id="in_val" step="0.01" min="0" max="999999" value="<?=$obEntrada->value?>">
        Data
        
        
        <input type="datetime-local" name="date" id="in_date" value="<?= date('Y-m-d\TH:i',strtotime($obEntrada->date))?>">
        </br>
        Obs
        </br>
        <textarea class="form-control" name="obs" id="in_obs" rows="5"><?=$obEntrada->obs?></textarea>
        </br>
        <input type="submit" class="btn btn-success">

    </form>
</div>
