<div class="text-center">
    <a href="/articulos/agregar/">
        <button type="button" class="btn btn-primary">Agregar</button>
    </a>
</div>
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
