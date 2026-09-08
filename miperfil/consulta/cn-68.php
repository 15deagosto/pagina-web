<?php
require '../controlador/conexion.php';
require '../funciones/fn-68.php';
require '../funciones/fn-alert.php';
$opc_cn = $_POST['dato_0'];
$fn68 = new Fn_68();
$fnalert = new Fn_alert();

//OPC

if ($opc_cn == -1) {
    $tabla = $fn68->fn68_rpreguntas_frecuentes_all();
    $include = 1;
}

if ($opc_cn == 1) {
    $preg_prefrec = ($_POST['preg_prefrec']);
    $resp_prefrec = ($_POST['resp_prefrec']);
    $orden_prefrec = $fn68->fn68_rpreguntas_frecuentes_maxid();
    $cuenta = $fn68->fn68_cpreguntas_frecuentes_xdata($preg_prefrec, $resp_prefrec, $orden_prefrec);
    echo $fnalert->fnalert_create($cuenta);
    $tabla = $fn68->fn68_rpreguntas_frecuentes_all();
    $include = 1;
}

if ($opc_cn == 2) {
    $id = $_POST['dato_1'];
    $preg_prefrec = ($_POST['preg_prefrec']);
    $resp_prefrec = ($_POST['resp_prefrec']);
    $orden_prefrec = ($_POST['orden_prefrec']);
    $cuenta = $fn68->fn68_upreguntas_frecuentes_x($preg_prefrec, $resp_prefrec, $orden_prefrec, $id);
    echo $fnalert->fnalert_edit($cuenta);
    $tabla = $fn68->fn68_rpreguntas_frecuentes_all();
    $include = 1;
}

if ($opc_cn == 4) {
    $id = $_POST['dato_1'];
    $st = $_POST['dato_2'];
    $cuenta = $fn68->fn68_upreguntas_frecuentes_xest($id, $st);
    $estado = $fn68->fn68_estado_xid($st);
    if ($cuenta==0) {
        
        ?>
        <div class="custom-control custom-checkbox mb-3">
            <?php
            if ($st == 0) {
                ?>
                <input value="1" name="estado" onchange="cn68_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>"><?php echo $estado ?></label>
                <?php
            } else if ($st == 1) {
                ?>
                <input value="0" name="estado" onchange="cn68_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>"><?php echo $estado ?></label>
                <?php
            }
            ?>
        </div>
        <label><i class="fa fa-exclamation"></i></label>
        <?php
    }else{
        ?>
        <div class="custom-control custom-checkbox mb-3">
            <?php
            if ($st == 0) {
                ?>
                <input value="1" name="estado" onchange="cn68_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>"><?php echo $estado ?></label>
                <?php
            } else if ($st == 1) {
                ?>
                <input value="0" name="estado" onchange="cn68_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>"><?php echo $estado ?></label>
                <?php
            }
            ?>
        </div>
        <?php
        
    }
//    $tabla = $fn68->fn68_rredes_all();
//    $include = 1;
}
if ($opc_cn == 7) {
    $id = $_POST['dato_1'];
    $st = $_POST['dato_2'];
    $cuenta = $fn68->fn68_upreguntas_frecuentes_xest($id, $st);
    $estado = $fn68->fn68_estado_xid($st);
    $tabla = $fn68->fn68_rpreguntas_frecuentes_all();
    $include = 1;
}    

//INCLUDE

if ($include == 1) {
    ?>
    <table id="example3" class="display">
        <thead>
            <tr>
                <th>Nro.</th>
                <th>Pregunta</th>
                <th>Respuesta</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($menu = $tabla->fetch_assoc()) {
                $st = $menu['estado_prefrec'];
                $id = $menu['id_prefrec'];
                $estado = $fn68->fn68_estado_xid($st);
                ?>
                <tr>
                    <td> <?php echo ($menu['orden_prefrec']) ?> </td>
                    <td> <?php echo ($menu['preg_prefrec']) ?> </td>
                    <td> <?php echo ($menu['resp_prefrec']) ?> </td>
                    <td>
                        <div id="fill_<?php echo $id ?>">
                            <div class="custom-control custom-checkbox mb-3">
                                <?php
                                if ($st == 0) {
                                    ?>
                                    <input value="1" name="estado" onchange="cn68_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>"><?php echo $estado ?></label>
                                    <?php
                                } else if ($st == 1) {
                                    ?>
                                    <input value="0" name="estado" onchange="cn68_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>"><?php echo $estado ?></label>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </td>

                    <td>
                        <div class="d-flex">
                            <button onclick="md68_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                            <button onclick="md68_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>
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

