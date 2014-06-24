<ul class="nav nav-tabs nav-tabs-justified">
    <li class="active"><a href="/articulos/">Listar artículos</a></li>
    <li><a href="/articulos/agregar/">Agregar artículos</a></li>
</ul>

<div class="table-responsive block-flat">
    <table class="table no-border hover">
        <thead class="no-border">
            <tr>
                <th><strong>ID</strong></th>
                <th><strong>Artículo</strong></th>
                <th><strong>Revisión</strong></th>
                <th><strong>Posición</strong></th>
                <th><strong>Acción</strong></th>
            </tr>
        </thead>
        <tbody class="no-border-y">
            <?php foreach($articulos as $articulo) { ?>
            <tr>
                <td><?=$articulo['idarticulo']?></td>
                <td><?=$articulo['articulo']?></td>
                <td><?=$articulo['revision']?></td>
                <td><?=$articulo['posicion']?></td>
                <td>
                    <a href="#" class="label label-default"><i class="fa fa-pencil"></i></a> 
                    <a href="#" class="label label-danger"><i class="fa fa-times"></i></a>
                    <a href="/log/ver/articulos/<?=$articulo['idarticulo']?>/" class="label label-info"><i class="fa fa-clock-o"></i></a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
