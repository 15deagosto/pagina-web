<?php
require '../controlador/conexion.php';
require '../funciones/fn-48.php';
require '../funciones/fn-alert.php';
$opc_cn = $_POST['dato_0'];
$a = new Fn48();
$fnalert = new Fn_alert();

//OPC

if ($opc_cn == 1) {
    $fechadesde = $_POST['fechadesde'];
    $fechasta = $_POST['fechasta'];
    $lugar = ($_POST['lugar']);
    $tabla = $a->get_visitas_filto($fechadesde, $fechasta, $lugar);
    $include =1;
}

if ($include == 1) {
    ?>
    <table id="myTable"  class="table table-striped table-bordered">
    <thead>
        <tr >
            <th>Lugar donde nos visitan</th>
            <th>Visitas</th>
            <th>IP</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($tabla->num_rows > 0) {
            while ($data = $tabla->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo ($data['lugar_pagina']) ?></td>
                    <td><?php echo $data['vp'] ?></td>
                    <td><?php echo $data['ip_pagina'] ?></td>
                </tr>
                <?php
            }
        }
        ?>
    </tbody>
</table>    
    <script type="text/javascript">
            $('#myTable').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf'
                    ]
            } );
        </script>
    <?php
}