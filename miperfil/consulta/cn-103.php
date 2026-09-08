<?php
require '../controlador/conexion.php';
require '../funciones/fn-103.php';
require '../funciones/fn-alert.php';
$opc_cn = $_POST['dato_0'];
$fn103 = new Fn_103();
$fnalert = new Fn_alert();

//OPC

if ($opc_cn == -1) {
    $tabla = $fn103->fn103_rredes_all();
    $include = 1;
}

if ($opc_cn == 1) {
    $img_avisos = "";
    $fecini_avisos = date('Y-m-d');
    $fecfin_avisos = date('Y-m-d');
    $est_avisos = 0;
    $cuenta = $fn103->fn103_cavisos_xdata($img_avisos, $fecini_avisos, $fecfin_avisos, $est_avisos);

    echo $fnalert->fnalert_create($cuenta);
}

if ($opc_cn == 2) {
    $id = ($_POST['dato_1']);
    $fecini_avisos = ($_POST['fecini_avisos']);
    $fecfin_avisos = ($_POST['fecfin_avisos']);
    $cuenta = $fn103->fn103_uavisos_x($fecini_avisos, $fecfin_avisos, $id);
    //echo $cuenta;
    echo $fnalert->fnalert_edit($cuenta);
}

if ($opc_cn == 3) {
    $id = $_POST['dato_1'];
    $dato = ($_FILES['dato_5']['name']);
    $cuenta = 0;
    $dir_subida = '../../images/';
    $fichero_subido = $dir_subida . basename($_FILES['dato_5']['name']);

    if (move_uploaded_file($_FILES['dato_5']['tmp_name'], $fichero_subido)) {
        $cuenta = $fn103->fn103_uavisos_ximg($id, $dato);
        echo $fnalert->fnalert_edit($cuenta);
    } else {
        echo $fnalert->fnalert_edit(0);
    }
    ?>
    <img src="../images/<?php echo $tupla[0]['img_avisos'] ?>" alt="alt"/>
    <?php
}

if ($opc_cn == 4) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn103->fn103_uavisos_xest($id, $estado);
    if ($cuenta == 0) {
        ?>
        <label><i class="fa fa-exclamation"></i></label>
        <?php
    }
//    $tabla = $fn103->fn103_rredes_all();
//    $include = 1;
}

if ($opc_cn == 5) {
    $id = $_POST['dato_1'];
    $texto1_prod = $_POST['texto1_prod'];
    $texto2_prod = $_POST['texto2_prod'];
    $texto3_prod = $_POST['texto3_prod'];
    $cuenta = $fn103->fn103_uredes_xtexto($texto1_prod, $texto2_prod, $texto3_prod, $id);
    echo $fnalert->fnalert_edit($cuenta);
    $tabla = $fn103->fn103_rredes_all();
    $include = 1;
}

if ($opc_cn == 6) {
    $id = $_POST['dato_1'];
    $idrol = $_POST['dato_2'];
    $cuenta = $fn103->fn103_uredes_xrol($id, $idrol);
    $include = 1;
}

if ($opc_cn == 7) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn103->fn103_uredes_xest($id, $estado);
    $tabla = $fn103->fn103_rredes_all();
    $include = 1;
}
if ($opc_cn == 100) {
    $tabla = $fn103->fn103_ravisos_all();
    $include = 1;
}
//INCLUDE

if ($include == 1) {
    ?>
    <table id="example3" class="display">
        <thead>
            <tr>
                <th>N°</th>
                <th>Imagen</th>
                <th>Fecha Inicio</th>
                <th>Fecha Final</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
                                <?php
                                while ($menu = $tabla->fetch_assoc()) {
                                    $st = $menu['est_avisos'];
                                    $id = $menu['id_avisos'];
                                    $estado = $fn103->fn103_estado_xid($st);
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo ($menu['id_avisos']) ?> 
                                        </td>
                                        <td> <a onclick="md103_004_d2(4,<?php echo $id ?>)" data-toggle="modal" 
                                            data-target="#modalcontent_lg" class="btn btn-warning shadow btn-xs sharp mr-1">
                                            <i class="fa fa-eye"></i></a>
                                        </td>
                                        <td>
                                            <?php echo ($menu['fecini_avisos']) ?>
                                        </td>
                                        <td>
                                            <?php echo ($menu['fecfin_avisos']) ?>
                                        </td>
                                        <td>
                                            
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <?php
                                                    if ($st == 0) {
                                                        ?>
                                                        <input value="1" name="estado" onchange="cn103_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                                        <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                                                        <?php
                                                    } else if ($st == 1) {
                                                        ?>
                                                        <input value="0" name="estado" onchange="cn103_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
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
                                                <button onclick="md103_003_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_lg" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                                                <!--<button onclick="md103_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>-->
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

