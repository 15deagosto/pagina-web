<?php
require '../controlador/conexion.php';
require '../funciones/fn-46.php';
require '../funciones/fn-alert.php';
$opc_cn = $_POST['dato_0'];
$a = new Fn46();
$fnalert = new Fn_alert();

//OPC

if ($opc_cn == 1) {
    $fechadesde = $_POST['fechadesde'];
    $fechasta = $_POST['fechasta'];
    $pagina = ($_POST['pagina']);
    $navegador = $_POST['navegador'];
    $so = $_POST['sist_opera'];
    $tabla = $a->get_visitas_filto($fechadesde, $fechasta, $pagina, $navegador, $so);
    
    $include =1;
}

if ($include == 1) {
    ?>
    <table id="myTable"  class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Página</th>
                <th>Visitas</th>
                <th>Navegador</th>
                <th>SO</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($tabla->num_rows > 0) {
                while ($data = $tabla->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo ($data['nombre_pagina']) ?></td>
                        <td><?php echo $data['vp'] ?></td>
                        <td><?php echo $data['browser_pagina'] ?></td>
                        <td><?php echo $data['sistema_pagina'] ?></td>
                        <td><?php echo $data['final_pagina'] ?></td>
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