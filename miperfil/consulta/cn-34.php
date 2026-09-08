<?php
require '../controlador/conexion.php';
require '../funciones/fn-34.php';
require '../funciones/fn-alert.php';
$opc_cn = $_POST['dato_0'];
$fn34 = new Fn_34();
$fnalert = new Fn_alert();

//OPC

if ($opc_cn == -1) {
    $tabla = $fn34->fn34_rlinea_credito_all();
    $include = 1;
}

if ($opc_cn == 1) {
    $nombre_lineacred = ($_POST['nombre_lineacred']);
    $desc_lineacred = ($_POST['desc_lineacred']);
    $estado = 0;
    $cuenta = $fn34->fn34_clinea_credito_xdata($nombre_lineacred, $desc_lineacred, $estado);
    echo $fnalert->fnalert_create($cuenta);
    $tabla = $fn34->fn34_rlinea_credito_all();
    $include = 1;
}

if ($opc_cn == 2) {
    $id = ($_POST['dato_1']);
    $nombre_lineacred = ($_POST['nombre_lineacred']);
    $desc_lineacred = ($_POST['desc_lineacred']);
    $cuenta = $fn34->fn34_ulinea_credito_x($nombre_lineacred, $desc_lineacred, $id);
    echo $fnalert->fnalert_edit($cuenta);
    $tabla = $fn34->fn34_rlinea_credito_all();
    $include = 1;
}

if ($opc_cn == 3) {
    $id = $_POST['dato_1'];
    $dato = ($_FILES['dato_5']['name']);
    $cuenta = 0;
    $dir_subida = '../../images/';
    $fichero_subido = $dir_subida . basename($_FILES['dato_5']['name']);

    if (move_uploaded_file($_FILES['dato_5']['tmp_name'], $fichero_subido)) {
        $cuenta = $fn34->fn34_uavisos_ximg($id, $dato);
        echo $fnalert->fnalert_edit($cuenta);
    } else {
        echo $fnalert->fnalert_edit(0);
    }
}

if ($opc_cn == 4) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn34->fn34_ulinea_credito_xest($id, $estado);
    echo $fnalert->fnalert_delete($cuenta);
    $tabla = $fn34->fn34_rlinea_credito_all();
    $include = 1;
}

if ($opc_cn == 5) {
    $id = $_POST['dato_1'];
    $estado = $_POST['dato_2'];
    $cuenta = $fn34->fn34_ulinea_credito_xest($id, $estado);
    if ($cuenta == 0) {
        ?>
        <label><i class="fa fa-exclamation"></i></label>
        <?php
    }
    //$include = 1;
}
//editar imagen
if ($opc_cn == 6) {
    $id = $_POST['dato_1'];
    echo $id;
    $dato = ($_FILES['img_lineacred']['name']);
    $cuenta = 0;
    $dir_subida = '../../images/';
    $fichero_subido = $dir_subida . basename($_FILES['img_lineacred']['name']);
    if (move_uploaded_file($_FILES['img_lineacred']['tmp_name'], $fichero_subido)) {
        $cuenta = $fn34->fn34_ulinea_credito_ximg($id, $dato);
        echo $fnalert->fnalert_edit($cuenta);
    } else {
        echo $fnalert->fnalert_edit(0);
    }
    $include = 2;
    $tupla = $fn34->fn34_rlinea_creditoes_x($id);
}
//INCLUDE

if ($include == 1) {
    ?>
    <table id="example3" class="display">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
    <?php
    while ($menu = $tabla->fetch_assoc()) {
        $st = $menu['estado_lineacred'];
        $id = $menu['id_lineacred'];
        $estado = $fn34->fn34_estado_xid($st);
        ?>
                <tr>
                    <td> <?php echo ($menu['nombre_lineacred']) ?></td>
                    <td>

                        <div class="custom-control custom-checkbox mb-3">
        <?php
        if ($st == 0) {
            ?>
                                <input value="1" name="estado" onchange="cn34_f4(5, <?php echo $id ?>, this.value)" type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
                                <label class="custom-control-label" for="customCheckBox<?php echo $id ?>">Inactivo</label>
            <?php
        } elseif ($st == 1) {
            ?>
                                <input value="0" name="estado" onchange="cn34_f4(5, <?php echo $id ?>, this.value)" checked type="checkbox" class="custom-control-input" id="customCheckBox<?php echo $id ?>" required>
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
                            <button onclick="md34_d2(2,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_md" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></button>
                            <button onclick="md34_d4(4,<?php echo $id ?>)" data-toggle="modal" data-target="#modalcontent_sm" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
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
if ($include == 2) {
    ?>
    <div class="form-group row offset-3">
        <img src="../images/<?php echo $tupla[0]['img_lineacred'] ?>" width="200px" />
    </div>
    <input type="text" name="tipo_rep" id="tipo_rep" value="1" hidden="">
    <div class="form-group row">
        <label class="col-sm-12 col-form-label">URL</label>
        <div class="col-sm-12">
            <input type="file" name="img_lineacred" id="img_lineacred" class="form-control" placeholder="">
        </div>
    </div>
    <?php
}