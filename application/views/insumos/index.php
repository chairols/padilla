<div class="text-center">
    <a href="/insumos/agregar/">
        <button type="button" class="btn btn-primary">Agregar</button>
    </a>
</div>
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
