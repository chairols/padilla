<h3>Agregar Artículo</h3>
<form role="form" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Artículo</label>
        <input type="text" maxlength="100" class="form-control" value="<?=set_value('articulo')?>" name="articulo" autofocus>
        <?=form_error('articulo', '<div class="alert alert-danger">', '</div>')?>
        <?=$alerta?>
    </div>
    
    <div class="form-group">
        <label>Plano</label>
        <input type="text" maxlength="100" class="form-control" value="<?=set_value('plano')?>" name="plano">
        <?=form_error('plano', '<div class="alert alert-danger">', '</div>')?>
    </div>
    
    <div class="form-group">
        <label>Archivo del plano</label>
        <input type="file" class="form-control" name="planofile">
    </div>
    
    <div class="form-group">
        <label>Producto</label>
        <select name="producto" class="form-control">
            <?php foreach($productos as $producto) { ?>
            <option value="<?=$producto['idproducto']?>"><?=$producto['producto']?></option>
            <?php } ?>
        </select>
    </div>
    
    <div class="form-group">
        <label>Revisión</label>
        <input type="number" maxlength="11" class="form-control" value="<?=set_value('revision')?>" name="revision">
        <?=form_error('revision', '<div class="alert alert-danger">', '</div>')?>
    </div>
    
    <div class="form-group">
        <label>Posición</label>
        <input type="number" maxlength="11" class="form-control" value="<?=set_value('posicion')?>" name="posicion">
        <?=form_error('posicion', '<div class="alert alert-danger">', '</div>')?>
    </div>
    
    <div class="form-group">
        <label>Observaciones</label>
        <textarea class="form-control" name="observaciones"><?=set_value('observaciones')?></textarea>
    </div>
    
    
    <button type="submit" class="btn btn-primary">Agregar</button>
</form>