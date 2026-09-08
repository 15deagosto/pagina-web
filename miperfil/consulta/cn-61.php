<?php
require '../controlador/conexion.php';
require '../funciones/fn-61.php';
require '../funciones/fn-alert.php';
$opc_cn = $_POST['dato_0'];
$fn61 = new Fn_61();
$fnalert = new Fn_alert();

//OPC

if ($opc_cn == 1) {
    $fecha_indicador = ($_POST['fecha_indicador']);
    $dato_indicador = ($_POST['dato_indicador']);
    $sucursal_indicador = ($_POST['sucursal_indicador']);
    $tipo_indicador = ($_POST['tipo_indicador']);
    $estado = 0;
    $cuenta = $fn61->fn61_cindicadores_x($fecha_indicador, $dato_indicador, $sucursal_indicador, $tipo_indicador, $estado);
    echo $fnalert->fnalert_create($cuenta);
    $tabla = $fn61->fn61_rindicadores_all();
    $include = 1;
}

if ($opc_cn == 2) {
    $id = $_POST['dato_1'];
    $fecha_indicador = ($_POST['fecha_indicador']);
    $dato_indicador = ($_POST['dato_indicador']);
    $sucursal_indicador = ($_POST['sucursal_indicador']);
    $cuenta = $fn61->fn61_uindicadores_x($fecha_indicador, $dato_indicador, $sucursal_indicador, $id);
    echo $fnalert->fnalert_edit($cuenta);
    $tabla = $fn61->fn61_rindicadores_all();
    $include = 1;
}

if ($opc_cn == 3) {
    $id = $_POST['dato_1'];
    $tipo = $_POST['dato_2'];
    $cuenta = $fn61->fn61_uindicadores_xtip($id, $tipo);
    $tabla = $fn61->fn61_rindicadores_all();
    $include = 1;
}

if ($opc_cn == 4) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn61->fn61_uindicadores_xest($id, $estado);
    $tabla = $fn61->fn61_rindicadores_all();
    $include = 1;
}



//INCLUDE

if ($include == 1) {
    ?>
    <table id="example3" class="display">
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Dato</th>
                <th>Sucursal</th>
                <th>Tipo</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($menu = $tabla->fetch_assoc()) {
                $st = $menu['estado_indicador'];
                $tipo = $menu['tipo_indicador'];
                $id = $menu['id_indicador'];

                switch ($tipo) {
                    case 0:
                        $destipo = "No seleccionado";
                        break;
                    case 1:
                        $destipo = "Crecimiento";
                        break;
                    case 2:
                        $destipo = "Crédito";
                        break;
                    case 3:
                        $destipo = "Inversión";
                        break;
                }
            ?>
                <tr>
                    <td> <?php echo ($menu['fecha_indicador']) ?> </td>
                    <td> <?php echo ($menu['dato_indicador']) ?> </td>
                    <td> 
                        <?php
                        if($menu['sucursal_indicador'] == ""){
                            echo "No necesita sucursal.";
                        }else{
                            echo ($menu['sucursal_indicador']);
                        }
                        ?> 
                    </td>
                    <td>
                        <div id="fill_<?php echo $id ?>">
                            <div class="custom-control custom-checkbox mb-3">
                                <select onchange="cn61_f3(3, <?php echo $id ?>, this.value)" class="form-control" name="tipo_trabajo">
                                    <option value="<?php echo $tipo ?>"><?php echo $destipo ?></option>
                                    <option value="0">-- Seleccionar --</option>
                                    <option value="1">Crecimiento</option>
                                    <option value="2">Crédito</option>
                                    <option value="3">Inversión</option>
                                </select>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div id="fill_<?php echo $id ?>">
                            <div class="custom-control custom-checkbox mb-3">
                                <?php
                                if($st == 0){
                                ?>
                                <input value="1" name="estado" onchange="cn61_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                <?php
                                }else{
                                ?>
                                <input value="0" name="estado" onchange="cn61_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
                                <?php    
                                }
                                ?>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <button onclick="md61_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                            <button onclick="md61_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
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