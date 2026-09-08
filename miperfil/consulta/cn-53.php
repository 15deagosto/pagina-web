<?php
require '../controlador/conexion.php';
require '../funciones/fn-53.php';
require '../funciones/fn-alert.php';
$opc_cn = $_POST['dato_0'];
$fn53 = new Fn_53();
$fnalert = new Fn_alert();

//OPC

if ($opc_cn == -1) {
    $tabla = $fn53->fn53_ravisos_all();
    $include = 1;
}

if ($opc_cn == 1) {
    $fechainicio = ($_POST['fechainicio']);
    $fechafin = ($_POST['fechafin']);
    $estado = 0;
    $cuenta = $fn53->fn53_cavisos_x($fechainicio, $fechafin, $estado);
    echo $fnalert->fnalert_create($cuenta);
    $tabla = $fn53->fn53_ravisos_all();
    $include = 1;
}

if ($opc_cn == 2) {
    $id = $_POST['dato_1'];
    $fechainicio = ($_POST['fechainicio']);
    $fechafin = ($_POST['fechafin']);
    $cuenta = $fn53->fn53_uavisos_x($fechainicio, $fechafin, $id);
    echo $fnalert->fnalert_edit($cuenta);
    $tabla = $fn53->fn53_ravisos_all();
    $include = 1;
}

if ($opc_cn == 3) {
    $id = $_POST['dato_1'];
    $dato = ($_FILES['dato_5']['name']);
    $cuenta = 0;
    $dir_subida = '../../images/';
    $fichero_subido = $dir_subida . basename($_FILES['dato_5']['name']);

    if (move_uploaded_file($_FILES['dato_5']['tmp_name'], $fichero_subido)) {
        $cuenta = $fn53->fn53_uavisos_ximg($id, $dato);
        echo $fnalert->fnalert_edit($cuenta);
    } else {
        echo $fnalert->fnalert_edit(0);
    }
}

if ($opc_cn == 4) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn53->fn53_uavisos_xest($id, $estado);
    if ($cuenta==0) {
        ?>
        <label><i class="fa fa-exclamation"></i></label>
        <?php
    }
    //$tabla = $fn53->fn53_ravisos_all();
    //$include = 1;
}

if ($opc_cn == 4) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn53->fn53_uavisos_xest($id, $estado);
    $tabla = $fn53->fn53_ravisos_all();
    $include = 1;
}



//INCLUDE

if ($include == 1) {
    ?>
    <table id="example3" class="display">
        <thead>
            <tr>
                <th>Imagen</th>
                <th>Fecha inicio</th>
                <th>Fecha final</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($menu = $tabla->fetch_assoc()) {
                $st = $menu['est_avisos'];
                $id = $menu['id_avisos'];
            ?>
                <tr>
                    <td> <img src="../images/<?php echo ($menu['img_avisos']) ?>" style="height: 50px"> </td>
                    <td> <?php echo ($menu['fecini_avisos']) ?> </td>
                    <td> <?php echo ($menu['fecfin_avisos']) ?> </td>
                    <td>
                        
                        <div class="custom-control custom-checkbox mb-3">
                            <?php
                            if($st == 0){
                            ?>
                            <input value="1" name="estado" onchange="cn53_f4(4, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                            <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
                            <?php
                            }else{
                            ?>
                            <input value="0" name="estado" onchange="cn53_f4(4, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
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
                            <button onclick="md53_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                            <button onclick="md53_d3(3,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-image"></i></button>
                            <button onclick="md53_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
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