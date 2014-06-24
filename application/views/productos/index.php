<ul class="nav nav-tabs nav-tabs-justified">
    <li class="active"><a href="/productos/">Listar productos</a></li>
    <li><a href="/productos/agregar/">Agregar producto</a></li>
</ul>

<div class="block-flat">
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
</div>