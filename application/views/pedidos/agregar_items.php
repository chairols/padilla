<div class="block-flat">
    <h4 class="page-header">
        <span class="pull-right">
            <a href="/log/ver/pedidos/<?=$pedido['idpedido']?>/" data-pacement="top" data-toggle="tooltip" data-original-title="Ver Historial" class="label label-info">
                <i class="fa fa-clock-o"></i> 
            </a>
        </span>
        <span class="pull-right">
            <i class="fa fa-calendar"></i> <?=strftime('%d/%m/%Y', strtotime($pedido['timestamp']));?>&nbsp;
        </span>
        
        <i class="fa fa-file-text-o"></i> Pedido # <?=$pedido['idpedido']?>
    </h4>
    
    <div class="row-fluid">
        <div class="span6">
            <address>
                <strong><i class="fa fa-home"></i> <?=$cliente['cliente']?></strong>
                <br>
                <?=$cliente['domicilio']?>
                <br>
                <?=$cliente['localidad']?> / <?=$cliente['provincia']['provincia']?>
                <br>
                <?=$cliente['telefono']?>
                <br>
                <?=$pedido['ordendecompra']?>
                <br>
                <a href="<?=$pedido['adjunto']?>" target="_blank"><i class="fa fa-file-text-o"></i> Adjunto</a>
            </address>
        </div>
    </div>
    
    <form method="POST">
        <div class="row">
            <div class="col-lg-2 form-group">
                <div class="header">
                    Cantidad
                </div>
                <div class="content">
                    <input type="text" name="cantidad" class="form-control" maxlength="11" autofocus required>
                </div>
            </div>
            <div class="col-lg-6 form-group">
                <div class="header">
                    Artículo
                </div>
                <div class="content">
                    <select name="articulo" class="select2">
                        <?php foreach($articulos as $articulo) { ?>
                        <option value="<?=$articulo['idarticulo']?>"><?=$articulo['articulo']?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-lg-2 form-group">
                <div class="header">
                    Precio
                </div>
                <div class="content">
                    <div class="input-group">
                        <span class="input-group-addon"><?=$pedido['moneda']['simbolo']?></span>
                        <input type="text" name="precio" class="form-control" maxlength="11" required>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 form-group">
                <div class="header">
                    &nbsp;
                </div>
                <div class="content">
                    <input type="submit" class="btn btn-primary" value="Agregar">
                </div>
            </div>
        </div>
    </form>
    
    <table class="table table-hover">
        <thead>
            <tr class="alert alert-info">
                <th>Cantidad</th>
                <th>Artículo</th>
                <th>Precio Unitario</th>
                <th>Precio Total</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($pedido_items as $item) { ?>
            <tr>
                <td><?=$item['cantidad']?></td>
                <td><?=$item['producto'].' '.$item['articulo'].' '.$item['plano']?></td>
                <td><?=number_format($item['precio'])?></td>
                <td><?=number_format($item['cantidad']*$item['precio'], 2)?></td>
                <td>&nbsp;</td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <span>
        <a href="/pedidos/">
            <input type="button" class="btn btn-primary" value="Finalizar"> 
        </a>
    </span>
</div>