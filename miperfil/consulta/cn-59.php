<?php
require '../controlador/conexion.php';
require '../funciones/fn-59.php';
require '../funciones/fn-alert.php';
$opc_cn = $_POST['dato_0'];
$fn59 = new Fn_59();
$fnalert = new Fn_alert();

//OPC

if ($opc_cn == 1) {
    $dia_horario = ($_POST['dia_horario']);
    $hora_inicio = ($_POST['hora_inicio']);
    $hora_final = ($_POST['hora_final']);
    $tipo_horario = ($_POST['tipo_horario']);
    $estado = 0;
    $cuenta = $fn59->fn59_chorarios_x($dia_horario, $hora_inicio, $hora_final, $tipo_horario, $estado);
    echo $fnalert->fnalert_create($cuenta);
    $tabla = $fn59->fn59_rhorarios_all();
    $include = 1;
}

if ($opc_cn == 2) {
    $id = $_POST['dato_1'];
    $dia_horario = ($_POST['dia_horario']);
    $hora_inicio = ($_POST['hora_inicio']);
    $hora_final = ($_POST['hora_final']);
    $tipo_horario = ($_POST['tipo_horario']);
    $cuenta = $fn59->fn59_uhorarios_x($dia_horario, $hora_inicio, $hora_final, $tipo_horario, $id);
    echo $fnalert->fnalert_edit($cuenta);
    $tabla = $fn59->fn59_rhorarios_all();
    $include = 1;
}

if ($opc_cn == 4) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn59->fn59_uhorarios_xest($id, $estado);
    if ($cuenta==0) {
        ?>
        <label><i class="fa fa-exclamation"></i></label>
        <?php
    }
//    $tabla = $fn59->fn59_rhorarios_all();
//    $include = 1;
}

if ($opc_cn == 5) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn59->fn59_uhorarios_xest($id, $estado);
    $tabla = $fn59->fn59_rhorarios_all();
    $include = 1;
}



//INCLUDE

if ($include == 1) {
    ?>
    <table id="example3" class="display">
        <thead>
            <tr>
                <th>Días</th>
                <th>Hora</th>
                <th>Tipo</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($menu = $tabla->fetch_assoc()) {
                $st = $menu['estado_horario'];
                $id = $menu['id_horario'];
            ?>
                <tr>
                    <td> <?php echo ($menu['dia_horario']) ?> </td>
                    <td> <?php echo ($menu['horaini_horario'].' a '.$menu['horafin_horario']) ?> </td>
                    <td> <?php echo ($menu['tipo_horario']) ?> </td>
                    <td>
                        
                            <div class="custom-control custom-checkbox mb-3">
                                <?php
                                if($menu['estado_horario'] == 0){
                                ?>
                                <input value="1" name="estado" onchange="cn59_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                <?php
                                }else{
                                ?>
                                <input value="0" name="estado" onchange="cn59_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
                                <?php    
                                }
                                ?>
                            </div>
                        <div id="fill_<?php echo $id ?>">
                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <button onclick="md59_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                            <button onclick="md59_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
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