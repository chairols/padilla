<ul class="nav nav-tabs nav-tabs-justified">
    <li class="active"><a href="/ots/">Listar órdenes de trabajo</a></li>
    <li><a href="/ots/agregar/">Agregar orden de trabajo</a></li>
</ul>

<div class="block-flat">

    <table id="datatable" class="display table-hover" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th><strong>ID</strong></th>
                <th><strong>Orden de Trabajo</strong></th>
                <th><strong>Fábrica</strong></th>
            </tr>
        </thead>
 
        
        
        <tbody>
        <?php foreach($ots as $ot) { ?>
            <tr>
                <td><?=$ot['idot']?></td>
                <td><?=$ot['numero_ot']?></td>
                <td>&nbsp;</td>
            </tr>
        <?php } ?>
        </tbody>
        
        
    </table>

</div>

