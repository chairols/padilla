<ul class="nav nav-tabs nav-tabs-justified">
    <li class="active"><a href="/provincias/">Listar provincias</a></li>
    <li><a href="/provincias/agregar/">Agregar provincia</a></li>
</ul>

<div class="table-responsive block-flat">
    <table class="table no-border hover">
        <thead class="no-border">
            <tr>
                <th><strong>ID</strong></th>
                <th><strong>Provincia</strong></th>
                <th><strong>Acción</strong></th>
            </tr>
        </thead>
        <tbody class="no-border-y">
            <?php foreach($provincias as $provincia) { ?>
            <tr>
                <td><?=$provincia['idprovincia']?></td>
                <td><?=$provincia['provincia']?></td>
                <td>
                    <a href="#" class="label label-default"><i class="fa fa-pencil"></i></a> 
                    <a href="#" class="label label-danger"><i class="fa fa-times"></i></a>
                    <a href="/log/ver/provincias/<?=$provincia['idprovincia']?>/" class="label label-info"><i class="fa fa-clock-o"></i></a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>