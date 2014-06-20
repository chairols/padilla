<div class="text-center">
    <a href="/productos/agregar/">
        <button type="button" class="btn btn-primary">Agregar</button>
    </a>
</div>
<table class="table table-responsive table-hover table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Producto</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($productos as $producto) { ?>
        <tr>
            <td><?=$producto['idproducto']?></td>
            <td><?=$producto['producto']?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
