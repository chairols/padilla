<div class="text-center">
    <a href="/proveedores/agregar/">
        <button type="button" class="btn btn-primary">Agregar</button>
    </a>
</div>
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
