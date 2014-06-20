<h3>Agregar Sucursal</h3>
<form role="form" method="post">
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" maxlength="100" class="form-control" value="<?=set_value('sucursal')?>" name="sucursal" autofocus>
        <?=form_error('sucursal', '<div class="alert alert-danger">', '</div>')?>
        <?=$alerta?>
    </div>
    
    <div class="form-group">
        <label>Dirección</label>
        <input type="text" maxlength="100" class="form-control" value="<?=set_value('direccion')?>" name="direccion">
        <?=form_error('direccion', '<div class="alert alert-danger">', '</div>')?>
    </div>
    
    <div class="form-group">
        <label>Localidad</label>
        <input type="text" maxlength="100" class="form-control" value="<?=set_value('localidad')?>" name="localidad">
        <?=form_error('localidad', '<div class="alert alert-danger">', '</div>')?>
    </div>
    
    <div class="form-group">
        <label>Teléfono</label>
        <input type="text" maxlength="100" class="form-control" value="<?=set_value('telefono')?>" name="telefono">
        <?=form_error('telefono', '<div class="alert alert-danger">', '</div>')?>
    </div>
    
    <button type="submit" class="btn btn-primary">Agregar</button>
</form>