<ul class="nav nav-tabs nav-tabs-justified">
    <li class="active"><a href="/pedidos/">Listar pedidos</a></li>
    <li><a href="/pedidos/agregar/">Agregar pedido</a></li>
</ul>

<div class="table-responsive block-flat">
    <table id="datatable">
        <thead>
            <tr>
                <th><strong>ID</strong></th>
                <th><strong>Cliente</strong></th>
                <th><strong>Orden de Compra</strong></th>
                <th><strong>Acción</strong></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($pedidos as $pedido) { ?>
            <tr>
                <td><?=$pedido['idpedido']?></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>
                    <a href="#" class="label label-default"><i class="fa fa-pencil"></i></a> 
                    <a href="#" class="label label-danger"><i class="fa fa-times"></i></a>
                    <a href="/log/ver/proveedores/<?=$proveedor['idproveedor']?>/" class="label label-info"><i class="fa fa-clock-o"></i></a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>