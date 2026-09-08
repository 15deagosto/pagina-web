<?php
require '../controlador/conexion.php';
require '../funciones/fn-22.php';
require '../funciones/fn-alert.php';
$fn22 = new Fn_22();
$fnalert = new Fn_alert();
$opc_cn = $_POST['dato_0'];
//OPC

if ($opc_cn == -1) {
    $tabla = $fn22->fn22_rinversion_all();
    $include = 1;
}

if ($opc_cn == 1) {
    $montoin_inversion = ($_POST['montoin_inversion']);
    $montoout_inversion = ($_POST['montoout_inversion']);
    $diain_inversion = ($_POST['diain_inversion']);
    $diaout_inversion = ($_POST['diaout_inversion']);
    $prociento_inversion = ($_POST['prociento_inversion']);
    $tipo_prod = 0;
    $estado = 0;
    $cuenta = $fn22->fn22_cinversion_xdata($montoin_inversion, $montoout_inversion, $diain_inversion, $diaout_inversion,$prociento_inversion);
    echo $fnalert->fnalert_create($cuenta);
    $tabla = $fn22->fn22_rinversion_all();
    $include = 1;
}

if ($opc_cn == 2) {
    $id = ($_POST['dato_1']);
    $montoin_inversion = ($_POST['montoin_inversion']);
    $montoout_inversion = ($_POST['montoout_inversion']);
    $diain_inversion = ($_POST['diain_inversion']);
    $diaout_inversion = ($_POST['diaout_inversion']);
    $prociento_inversion = ($_POST['prociento_inversion']);
    $cuenta = $fn22->fn22_uinversion_x($montoin_inversion, $montoout_inversion, $diain_inversion, $diaout_inversion,$prociento_inversion, $id);
    echo $fnalert->fnalert_edit($cuenta);
    $tabla = $fn22->fn22_rinversion_all();
    $include = 1;
}

//INCLUDE

if ($include == 1) {
    ?>
    <table id="example3" class="display">
        <thead>
            <tr>
                <th>Monto Desde</th>
                <th>Monto Hasta</th>
                <th>Desde</th>
                <th>Hasta</th>
                <th>Porcentaje</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($menu = $tabla->fetch_assoc()) {
                $id = $menu['id_inversion'];
                ?>
                <tr>
                    <td> <?php echo ($menu['montoin_inversion']) ?></td>
                    <td> <?php echo ($menu['montoout_inversion']) ?></td>
                    <td> <?php echo ($menu['diain_inversion']) ?></td>
                    <td> <?php echo ($menu['diaout_inversion']) ?></td>
                    <td> <?php echo ($menu['prociento_inversion']) ?></td>
                    <td>
                        <div class="d-flex">
                            <button onclick="md22_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                            
                        </div>												
                    </td>												
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <script>
        $('#example3').dataTable();
    </script>
    <?php
}

