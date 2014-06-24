<ul class="nav nav-tabs nav-tabs-justified">
    <li class="active"><a href="/provincias/">Listar provincias</a></li>
    <li><a href="/provincias/agregar/">Agregar provincia</a></li>
</ul>

<div class="block-flat">
    <table class="table table-responsive table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Provincia</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($provincias as $provincia) { ?>
            <tr>
                <td><?=$provincia['idprovincia']?></td>
                <td><?=$provincia['provincia']?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>