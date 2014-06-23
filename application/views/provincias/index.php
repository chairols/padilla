<div class="text-center">
    <a href="/provincias/agregar/">
        <button type="button" class="btn btn-primary">Agregar</button>
    </a>
</div>
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
