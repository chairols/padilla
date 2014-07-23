<div class="block-flat">
    <h4 class="page-header">
        <span class="pull-right">
            <a href="/log/ver/pedidos/<?=$pedido['idpedido']?>/" data-pacement="top" data-toggle="tooltip" data-original-title="Ver Historial" class="label label-info">
                <i class="fa fa-clock-o"></i>
            </a>
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
            </address>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-2 form-group">
            <div class="header">
                Cantidad
            </div>
            <div class="content">
                <input type="text" name="cantidad" class="form-control" autofocus>
            </div>
        </div>
        <div class="col-lg-5 form-group">
            <div class="header">
                Artículo
            </div>
            <div class="content">
                &nbsp;
            </div>
        </div>
        <div class="col-lg-3 form-group">
            <div class="header">
                Plano
            </div>
            <div class="content">
                &nbsp;
            </div>
        </div>
        <div class="col-lg-2 form-group">
            <div class="header">
                Precio
            </div>
            <div class="content">
                <input type="text" name="precio" class="form-control">
            </div>
        </div>
    </div>
    
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Cantidad</th>
                <th>Artículo</th>
                <th>Plano</th>
                <th>Precio Unitario</th>
                <th>Precio Total</th>
            </tr>
        </thead>
    </table>
</div>