<ul class="nav nav-tabs nav-tabs-justified">
    <li class="active"><a href="/articulos/">Listar artículos</a></li>
    <li><a href="/articulos/agregar/">Agregar artículos</a></li>
</ul>

<div class="block-flat">
    <table class="table table-responsive table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Artículo</th>
                <th>Revisión</th>
                <th>Posición</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($articulos as $articulo) { ?>
            <tr>
                <td><?=$articulo['idarticulo']?></td>
                <td><?=$articulo['articulo']?></td>
                <td><?=$articulo['revision']?></td>
                <td><?=$articulo['posicion']?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>