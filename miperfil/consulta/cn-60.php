<?php
require '../controlador/conexion.php';
require '../funciones/fn-60.php';
require '../funciones/fn-alert.php';
$opc_cn = $_POST['dato_0'];
$fn60 = new Fn_60();
$fnalert = new Fn_alert();

//OPC

if ($opc_cn == 1) {
    $nombre_trabajo = ($_POST['nombre_trabajo']);
    $descripcion = ($_POST['descripcion']);
    $tipo_trabajo = ($_POST['tipo_trabajo']);
    $estado = 0;
    $cuenta = $fn60->fn60_ctipoempleo_x($nombre_trabajo, $descripcion, $tipo_trabajo, $estado);
    echo $fnalert->fnalert_create($cuenta);
    $tabla = $fn60->fn60_rtipoempleo_all();
    $include = 1;
}

if ($opc_cn == 2) {
    $id = $_POST['dato_1'];
    $nombre_trabajo = ($_POST['nombre_trabajo']);
    $descripcion = ($_POST['descripcion']);
    $cuenta = $fn60->fn60_utipoempleo_x($nombre_trabajo, $descripcion, $id);
    echo $fnalert->fnalert_edit($cuenta);
    $tabla = $fn60->fn60_rtipoempleo_all();
    $include = 1;
}

if ($opc_cn == 3) {
    $id = $_POST['dato_1'];
    $tipo = $_POST['dato_2'];
    $cuenta = $fn60->fn60_utipoempleo_xtip($id, $tipo);
    $tabla = $fn60->fn60_rtipoempleo_all();
    $include = 1;
}

if ($opc_cn == 4) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn60->fn60_utipoempleo_xest($id, $estado);
    $tabla = $fn60->fn60_rtipoempleo_all();
    $include = 1;
}



//INCLUDE

if ($include == 1) {
    ?>
    <table id="example3" class="display">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($menu = $tabla->fetch_assoc()) {
                $st = $menu['estado_tipoempleo'];
                $tipo = $menu['tipo_tipoempleo'];
                $id = $menu['id_tipoempleo'];
                $name_tipo = $a->fn60_utipoempleo_xtipo($tipo);
                ?>
                <tr>
                    <td> <?php echo ($menu['nombre_tipoempleo']) ?> </td>
                    <td>
                        <div id="fill_<?php echo $id ?>">
                            <div class="custom-control custom-checkbox mb-3">
                                <select onchange="cn60_f3(3, <?php echo $id ?>, this.value)" class="form-control" name="tipo_trabajo">
                                    <option value="<?php echo $tipo ?>"><?php echo $name_tipo ?></option>
                                    <option value="1">PLANTA</option>
                                    <option value="2">TEMPORAL</option>
                                </select>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div id="fill_<?php echo $id ?>">
                            <div class="custom-control custom-checkbox mb-3">
                                <?php
                                if ($st == 0) {
                                    ?>
                                    <input value="1" name="estado" onchange="cn60_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                    <?php
                                } else {
                                    ?>
                                    <input value="0" name="estado" onchange="cn60_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                    <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Activo</label>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <button onclick="md60_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                            <button onclick="md60_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
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