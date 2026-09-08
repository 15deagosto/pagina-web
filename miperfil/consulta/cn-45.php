<?php
require '../controlador/conexion.php';
require '../funciones/fn-45.php';
$fn45 = new Fn_45();
$opc_cn = $_POST['dato_0'];
if ($opc_cn == 1) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn45->fn45_usolinversion_xest($id, $estado);
    if ($cuenta==0) {
        ?>
        <label><i class="fa fa-exclamation"></i></label>
        <?php
    }
    //$tabla = $fn45->fn45_rsolinversion_all();
    //$include = 1;
}
if ($opc_cn == 2) {
    $desde = ($_POST['fechadesde']);
    $hasta = ($_POST['fechasta']);
    $producto = ($_POST['producto']);
    $estado= ($_POST['estado']);
    $tabla = $fn45->fn45_rsolinversion_fecha($desde, $hasta,$producto,$estado);
    $include = 1;
}


//INCLUDE
if ($include == 1) {
    ?>
    <form id="frm_filtro" method="post">
        <input type="text" hidden="" id="desde" name="desde" value="<?php echo $desde ?>">
        <input type="text" hidden="" id="hasta" name="hasta" value="<?php echo $hasta ?>">
        <input type="text" hidden="" id="pr" name="pr" value="<?php echo $producto ?>">
        <input type="text" hidden="" id="st" name="st" value="<?php echo $estado ?>">
    </form>
    <table id="example3" class="display">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Agencia</th>
                <th>Cuidad</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($menu = $tabla->fetch_assoc()) {
                $st = $menu['estado_inversion'];
                $id = $menu['id_inversion'];
            ?>
                <tr>
                    <td> <?php echo ($menu['nombre_inversion'].' '.$menu['apellido_inversion']) ?></td>
                    <td> <?php echo ($menu['telefono_inversion']) ?> </td>
                    <td> <?php echo ($menu['email_inversion']) ?> </td>
                    <td> <?php echo ($menu['entidad_inversion']) ?> </td>
                    <td> <?php echo ($menu['ciudad_inversion']) ?> </td>
                    <td> 

                            <div class="custom-control custom-checkbox mb-3">
                                <?php
                                if ($st == 0) {
                                    ?>
                                    <input value="1" name="estado" onchange="cn45_f1(1, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Pendiente</label>
                                    <?php
                                } else if ($st == 1) {
                                    ?>
                                    <input value="0" name="estado" onchange="cn45_f1(1, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Aceptado</label>
                                    <?php
                                }
                                ?>
                            </div>
                        <div id="fill_<?php echo $id ?>">
                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <button onclick="md45_d1(1,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
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
