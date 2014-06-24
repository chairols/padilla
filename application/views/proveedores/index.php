<ul class="nav nav-tabs nav-tabs-justified">
    <li class="active"><a href="/proveedores/">Listar proveedores</a></li>
    <li><a href="/proveedores/agregar/">Agregar proveedor</a></li>
</ul>

<div class="block-flat">
    <table class="table table-responsive table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Proveedor</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($proveedores as $proveedor) { ?>
            <tr>
                <td><?=$proveedor['idproveedor']?></td>
                <td><?=$proveedor['proveedor']?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>