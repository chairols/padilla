<h3>Agregar Provincia</h3>
<form role="form" method="post">
    <div class="form-group">
        <label>Provincia</label>
        <input type="text" maxlength="50" class="form-control" value="<?=set_value('provincia')?>" name="provincia" autofocus>
        <?=form_error('provincia', '<div class="alert alert-danger">', '</div>')?>
        <?=$alerta?>
    </div>
    
    <button type="submit" class="btn btn-primary">Agregar</button>
</form>