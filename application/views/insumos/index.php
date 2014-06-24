<ul class="nav nav-tabs nav-tabs-justified">
    <li class="active"><a href="/insumos/">Listar insumos</a></li>
    <li><a href="/insumos/agregar/">Agregar insumo</a></li>
</ul>

<div class="block-flat">
    <table class="table table-responsive table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Insumo</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($insumos as $insumo) { ?>
            <tr>
                <td><?=$insumo['idinsumo']?></td>
                <td><?=$insumo['insumo']?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>