<ul class="nav nav-tabs nav-tabs-justified">
    <li class="active"><a href="/sucursales/">Listar sucursales</a></li>
    <li><a href="/sucursales/agregar/">Agregar sucursal</a></li>
</ul>

<div class="block-flat">
    <table class="table table-responsive table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Sucursal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($sucursales as $sucursal) { ?>
            <tr>
                <td><?=$sucursal['idsucursal']?></td>
                <td><?=$sucursal['sucursal']?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>