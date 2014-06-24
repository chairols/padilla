<ul class="nav nav-tabs nav-tabs-justified">
    <li class="active"><a href="/sucursales/">Listar sucursales</a></li>
    <li><a href="/sucursales/agregar/">Agregar sucursal</a></li>
</ul>

<div class="table-responsive block-flat">
    <table class="table no-border hover">
        <thead class="no-border">
            <tr>
                <th><strong>ID</strong></th>
                <th><strong>Sucursal</strong></th>
                <th><strong>Acción</strong></th>
            </tr>
        </thead>
        <tbody class="no-border-y">
            <?php foreach($sucursales as $sucursal) { ?>
            <tr>
                <td><?=$sucursal['idsucursal']?></td>
                <td><?=$sucursal['sucursal']?></td>
                <td>
                    <a href="#" class="label label-default"><i class="fa fa-pencil"></i></a> 
                    <a href="#" class="label label-danger"><i class="fa fa-times"></i></a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>