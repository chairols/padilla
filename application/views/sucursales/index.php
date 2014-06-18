<div class="text-center">
    <a href="/sucursales/agregar/">
        <button type="button" class="btn btn-primary">Agregar</button>
    </a>
</div>
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
